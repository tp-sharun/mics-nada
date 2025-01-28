<?php

use JsonSchema\SchemaStorage;
use JsonSchema\Validator;
use JsonSchema\Constraints\Factory;
use JsonSchema\Constraints\Constraint;


/**
 * 
 * Visualization
 * 
 */
class Dataset_visualization_model extends Dataset_model {
 
    public function __construct()
    {
        parent::__construct();
    }

    function create_dataset($type,$options)
	{
		//validate schema
        $this->validate_schema($type,$options);

        //get core fields for listing datasets in the catalog
        $core_fields=$this->get_core_fields($options);
        $options=array_merge($options,$core_fields);
		
		if(!isset($core_fields['idno']) || empty($core_fields['idno'])){
			throw new exception("IDNO-NOT-SET");
		}

		//validate IDNO field
        $dataset_id=$this->find_by_idno($core_fields['idno']); 

		//overwrite?
		if($dataset_id>0 && isset($options['overwrite']) && $options['overwrite']!=='yes'){
			throw new ValidationException("VALIDATION_ERROR", "IDNO already exists. ".$dataset_id);
        }
        
        //fields to be stored as metadata
        $study_metadata_sections=array('metadata_information','visualization_description','files','additional');

        foreach($study_metadata_sections as $section){		
			if(array_key_exists($section,$options)){
                $options['metadata'][$section]=$options[$section];
                unset($options[$section]);
            }
        }                

		//start transaction
		$this->db->trans_start();
        
        if($dataset_id>0){
            $this->update($dataset_id,$type,$options);
        }
        else{
            $dataset_id=$this->insert($type,$options);
        }

        $this->update_filters($dataset_id,$options['metadata']);

		//complete transaction
		$this->db->trans_complete();

		return $dataset_id;
    }


    /**
	 * 
	 * get core fields 
	 * 
	 * core fields are: idno, title, nation, year, authoring_entity
	 * 
	 * 
	 */
	function get_core_fields($options)
	{        
        $output=array();
        $output['title']=$this->get_array_nested_value($options,'visualization_description/title_statement/title');
        $output['subtitle']=$this->get_array_nested_value($options,'visualization_description/title_statement/sub_title');
        $output['idno']=$this->get_array_nested_value($options,'visualization_description/title_statement/idno');

        //todo
        $output['nation']='';

        $output['abbreviation']=$this->get_array_nested_value($options,'visualization_description/title_statement/alternate_title');            
        
        $auth_entity=$this->get_array_nested_value($options,'visualization_description/publisher');
        $output['authoring_entity']=$this->array_column_to_string($auth_entity,$column_name='name', $max_length=300);

        $years=$this->get_years($options);
        $output['year_start']=$years['start'];
        $output['year_end']=$years['end'];
        
        return $output;
    }
    


    /**
     * 
     * get years
     * 
     **/
	function get_years($options)
	{
        $years=explode("-",$this->get_array_nested_value($options,'visualization_description/date_published'));

        if(is_array($years)){
            $start=(int)$years[0];
            $end=(int)$years[0];			
        }

		return array(
			'start'=>$start,
			'end'=>$end
		);
	}


    /**
     * 
     * Update all related tables used for facets/filters
     * 
     * 
     */
    function update_filters($sid, $metadata=null)
    {
        if (!is_array($metadata)){            
            return false;
        }

        $core_fields=$this->get_core_fields($metadata);

		$this->update_years($sid,$core_fields['year_start'],$core_fields['year_end']);
        $this->Survey_country_model->update_countries($sid,$core_fields['nations']);
        $this->add_tags($sid,$this->get_array_nested_value($metadata,'tags'));

        return true;
    }

}