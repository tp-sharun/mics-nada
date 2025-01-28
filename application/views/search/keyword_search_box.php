<?php
 $survey_count=$this->stats_model->get_survey_count(); 
?>
<div class="text-center  wb-library-search banner-search-block">
<div class="home-page-search-container container">
<h1 class="wb-library-search-title heading-style-2 text-bold"><?php echo $this->config->item("website_title"); ?></h1>
    <div class="sub-text paragraph-style-1">Search in <?php echo $survey_count; ?> datasets</div>
<div class="nada-search-box wb-controls-wrapper">
    <div class="row justify-content-center">
    
      <div class="col-10 col-md-12 ">
        <div class="search-box-container search-block">            
        <input type="search" class="form-control form-control-lg py-2 search-keywords search-bar" id="search-keywords" name="sk" value="<?php echo form_prep($search_options->sk);?>" placeholder="<?php echo t('Search by keyword, data type');?>..."  >
        <span class="input-clear-icon" tabindex="0">Clear search</span>
        <span class="input-group-append search-button-wrap">
            <button class="btn btn-primary btn-search-submit search-button" type="submit" id="submit_search">
                <!-- <i class="fa fa-search"></i> --> 
                <?php echo t('search');?>
            </button>
            <a href="<?php echo site_url('catalog/'.@$active_repo_id);?>" class="close clear-search-button" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
        </span>
        </div>
        <span class="keyword-suggestions"></span>   
        </div>
    </div>    
</div>
</div> 
</div>
