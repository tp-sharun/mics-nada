
<link rel="stylesheet" href="<?php echo base_url();?>javascript/codemirror/lib/codemirror.css">
<script src="<?php echo base_url();?>javascript/codemirror/lib/codemirror.js"></script>
<script src="<?php echo base_url();?>javascript/codemirror/mode/css/css.js"></script>

<style>
label{
    font-weight:bold;
}
.CodeMirror {
    border: 1px solid #cccccc;
    height: auto;
    resize: vertical;
    overflow: auto !important;
}
.file{border:1px solid gainsboro;}
.repo-thumbnail{float:left;width:100px;height:100px;overflow:hidden;border:1px solid gainsboro;margin-right:20px;}
.repo-box-1{
    border:1px solid gainsboro;overflow:auto;padding:10px;margin-right:8px;
    background-color: #F8F8F8;
    border: 1px solid gainsboro;
    margin-top: 25px;
    margin-bottom: 25px;
    margin-right: 8px;
}
.repo-box-1 legend{font-weight:bold;}
.repo-box-1 .repo-file-upload{float:left;width:450px}
.repo-about-photo{float:left;width:120px;height:82px;overflow:hidden;border:1px solid gainsboro;margin-right:20px;}
</style>
<?php
$repo_types=array(
	'0'=>'Internal',
	'1'=>'External'
	);
$options_published=array(
	'0'=>'Unpublish',
	'1'=>'Publish'
);

$sections=$this->data['section_options'];
$options_section=array(
    '0' => t('Select')
);

foreach($sections as $sec){
	$options_section[$sec['id']]=$sec['title'];
}
?>

<div class="container-fluid repositories-edit-page">

<?php $this->load->view('repositories/page_links'); ?>
<h1><?php echo $this->page_title;?></h1>
	
<?php if (validation_errors() ) : ?>
    <div class="alert alert-danger">
	    <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>

<?php $error=$this->session->flashdata('error');?>
<?php echo ($error!="") ? '<div class="alert alert-danger">'.$error.'</div>' : '';?>

<?php $message=$this->session->flashdata('message');?>
<?php echo ($message!="") ? '<div class="alert alert-success">'.$message.'</div>' : '';?>

<?php
	//form action url
	$uri_arr=$this->uri->segment_array();
	$form_action_url=current_url();
?>

<?php echo form_open_multipart($form_action_url, array('class'=>'form mt-4') ); ?>
	<input type="hidden" name="id" value="<?php echo get_form_value('id',isset($id) ? $id : ''); ?>"/>

    <div class="row">

        <div class="col-md-2">
            <div class="form-group">
                <label for="repositoryid"><?php echo t('repositoryid');?><span class="required">*</span></label>
                <?php echo form_input($this->data['repositoryid']);?>
            </div>
        </div>

        <div class="col">
        <div class="form-group">
            <label for="title"><?php echo t('title');?><span class="required">*</span></label>
            <?php echo form_input($this->data['title']);?>        
        </div>
        </div>

    </div>

     <div class="form-group">
        <label for="short_text"><?php echo t('short_description');?><span class="required">*</span></label>
        <?php echo form_textarea('short_text', get_form_value('short_text',isset($this->data['short_text']) ? $this->data['short_text'] : ''),'class="form-control"');?>
    </div>
    
    <div class="form-grouop">
        <label for="long_text"><?php echo t('long_description');?><span class="required">*</span></label>
        <?php echo form_textarea('long_text', set_value('long_text',isset($this->data['long_text']) ? $this->data['long_text'] : '',FALSE),'id="code_editor" class="form-control code_editor"');?>
        <div class="help-block">
            HTML allowed. 
            <a class="btn btn-link" data-toggle="collapse" href="#tokens" role="button" aria-expanded="false" aria-controls="tokens">
                Available tokens
            </a>

            <div class="collapse" id="tokens">
                <div class="card card-body bg-light">                    
                    <dl>                        
                        <dt>[site-base-url]</dt>
                        <dd>Website URL</dd>
                        <dt>[search-box:repositoryID]</dt>
                        <dd>Show search box for collection</dd>                        
                        <dt>[latest-entries:repositoryID]</dt>
                        <dd>Show latest entries for a collection</dd>
                        <dt>[counts-by-type:repositoryID]</dt>
                        <dd>Show counts per data type</dd>
                        <dt>[cards-featured-entries:repositoryID]</dt>
                        <dd>Cards to display featured entries by collection</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <fieldset class="repo-box-1">
        <legend for="thumbnail-file"><?php echo t('thumbnail');?><span class="required">*</span></legend>
        
            <div class="repo-thumbnail">
                <img alt="THUMBNAIL" style="width:100%" title="Thumbnail" src="<?php echo base_url();?><?php echo $this->data['thumbnail']['value'];?>"/>
            </div>
            
            <div class="repo-file-upload">
            
                <div class="form-inline">
                    <label for="thumbnail"><?php echo t('Provide thumbnail path');?></label>
                    <?php echo form_input($this->data['thumbnail']);?>        
                </div>
            
                <div class="form-inline file-upload" style="margin-top:15px;">
                    <label for="thumbnail-file"><?php echo t('OR upload a thumbnail file (gif,png,jpg)');?></label>
                    <input type="file" name="thumbnail_file" class="file" />
                </div>
            </div>    
    </fieldset>


	<div class="row">
    	<div class="col-md-2">
            <div class="form-group">
                <label for="weight"><?php echo t('weight');?><span class="required">*</span></label>
                <span><?php echo form_input($this->data['weight']);?></span>
            </div>
        </div>
        
        <div class="col-md-2">      
            <div class="form-group">
                <label for="section"><?php echo t('section');?><span class="required">*</span></label>
                <?php echo form_dropdown('section', $options_section,get_form_value('section',isset($this->data['section']) ? $this->data['section'] : ''),array('class'=>'form-control'));?>                
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="ispublished"><?php echo t('published');?></label>
                <?php echo form_dropdown('ispublished', $options_published,get_form_value('ispublished',isset($this->data['ispublished']) ? $this->data['ispublished'] : ''),array('class'=>'form-control'));?>                
            </div>  
        </div>
        </div>



    <div>
		<?php echo form_submit('submit', 'Submit',array('class'=>'btn btn-primary'));?>
     	<?php echo anchor('admin/repositories',t('cancel'),array('class'=>'btn btn-default') );?>
    </div>
<?php echo form_close();?>
</div>

<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code_editor"), {
    lineNumbers: true,
    lineWrapping: true,
    mode: "text/html",
    viewportMargin: Infinity,
    });
    editor.setSize(null, 300);
</script>
