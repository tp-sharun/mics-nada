<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Direct Data Access
 *
 * @package		Data Access
 * @subpackage	Libraries
 * @category	NADA Core
 */

class Data_access_direct extends CI_Driver {

	protected $CI;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->CI =& get_instance();
		
		$this->CI->load->model('Catalog_model');
		$this->CI->load->model('Dataset_model');
		$this->CI->load->model('managefiles_model');
		$this->CI->load->model('Survey_resource_model');
		$this->CI->lang->load('direct_access_terms');		
	}
	
	function process_form($sid,$user=FALSE, $additional_html='')
	{
		if ($this->CI->input->post("accept"))
		{
			//get study microdata files
			$result['resources_microdata']=$this->CI->Survey_resource_model->get_microdata_resources($sid);
			$result['sid']=$sid;
			$result['storage_path']=$this->CI->Dataset_model->get_storage_fullpath($sid);
			$output=$this->CI->load->view('catalog_search/survey_summary_microdata', $result,TRUE);
			return $additional_html . $output;
		}
		
		//show the Terms and Conditions form
		return $this->CI->load->view('request_forms/access_terms',NULL,TRUE);							
		$this->CI->template->write('title', t('title_terms_and_conditions'),true);
	}
	
	
	/**
	* 
	* Get the request form
	**/
	private function get_application_form($sid,$userid)
	{
		return $this->CI->load->view("access_public/request_form",NULL,TRUE);
	}

}