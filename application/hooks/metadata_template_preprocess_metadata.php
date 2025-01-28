<?php

function preprocess_metadata($metadata)

{
   $ci=& get_instance();

   $ci->load->library('ion_auth');

   $ci->load->helper('array');

   $is_logged_in=$ci->ion_auth->logged_in();

   if ($is_logged_in){

       //get user roles

       $roles=$ci->ion_auth->get_groups_by_user(); 

       $restricted = false;

        if (!empty($roles)) {
            foreach ($roles as $role) {
                if ($role['role_id'] > 1) { 
                    $restricted = true;
                    break;
                }
            }
        }
        if ($restricted) {
       $restricted_fields=array(
            
            'metadata/additional/survey_code_ipums',
            'metadata/additional/other_country_codes/0/country_code_ipums',
            'metadata/additional/other_country_codes/0/region_code_unicef_2021',
            'metadata/study_desc/method/data_collection/collector_training',
            'metadata/additional/listing_information/0/month_listing_started',
            'metadata/additional/listing_information/0/year_listing_started',
            'metadata/additional/listing_information/0/month_listing_was_completed',
            'metadata/additional/listing_information/0/year_listing_was_completed',
            'metadata/additional/sampling_information/0/number_of_psus_that_were_replaced',
            'metadata/study_desc/method/data_collection/weight',
            'metadata/additional/sample_implementation/0',
            'metadata/additional/questionnaires/6',
            'metadata/additional/questionnaires/7',

       );

       foreach($restricted_fields as $xpath){

           array_unset_value($metadata, $xpath, '/');

       }
    }

   }
   else
   {
        $restricted_fields=array(
                
            'metadata/additional/survey_code_ipums',
            'metadata/additional/other_country_codes/0/country_code_ipums',
            'metadata/additional/other_country_codes/0/region_code_unicef_2021',
            'metadata/study_desc/method/data_collection/collector_training',
            'metadata/additional/listing_information/0/month_listing_started',
            'metadata/additional/listing_information/0/year_listing_started',
            'metadata/additional/listing_information/0/month_listing_was_completed',
            'metadata/additional/listing_information/0/year_listing_was_completed',
            'metadata/additional/sampling_information/0/number_of_psus_that_were_replaced',
            'metadata/study_desc/method/data_collection/weight',
            'metadata/additional/sample_implementation/0',
            'metadata/additional/questionnaires/6',
            'metadata/additional/questionnaires/7',

    );

    foreach($restricted_fields as $xpath){

        array_unset_value($metadata, $xpath, '/');

    }
   }
   return $metadata;

}

?>