<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $title; ?></title>
<?php /* <base href="<?php echo base_url(); ?>"> */ ?>
<?php if (isset($_meta) ){ echo $_meta;} ?>

<?php if($use_cdn):?>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php else:?>
    <link href="<?php echo base_url().$bootstrap_theme ?>/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme; ?>/css/bootstrap.min.css">
<?php endif;?>    


<link rel="icon" href="<?php echo base_url().$bootstrap_theme ?>/images/favicon/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="stylesheet" media="all" href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" />

<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/fonts/unicef-font.css">

<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/variables/fonts.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/variables/fonts-max-767.css" media="(max-width: 767px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/variables/colors.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/variables/others.css">

<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/common/css/base.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/common/css/common.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/common/css/text-styles.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/common/css/text-styles-max-767.css" media="(max-width: 767px)">


<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/layout/layout.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/layout/layout-min-576.css" media="(min-width: 576px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/layout/layout-min-768.css" media="(min-width: 768px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/layout/layout-min-992.css" media="(min-width: 992px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/layout/layout-min-1200.css" media="(min-width: 1200px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/layout/layout-min-1920.css" media="(min-width: 1920px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/layout/layout-max-767.css" media="(max-width: 767px)">

<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/breadcrumb/css/breadcrumb.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/button/css/buttons.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/input/css/input.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/tab/css/tab.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/table/css/table.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/pagination/css/pagination.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/accordian/css/accordian.css">

<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/header/css/header.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/header/css/header-max-991.css" media="(max-width: 991px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/header/css/header-max-767.css" media="(max-width: 767px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/footer/css/footer.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/footer/css/footer-max-767.css" media="(max-width: 767px)">

<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/search-banner/css/search-banner.css">

<!-- listing -->
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/listing/css/listing.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/listing/css/listing-max-767.css" media="(max-width: 767px)">

<!-- home -->
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/home/home.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/home/home-max-991.css" media="(max-width: 991px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/home/home-max-767.css" media="(max-width: 767px)">

<!-- search -->
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/elements/search/css/search.css">

<!-- listing page -->
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/listing/css/listing-page.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/listing/css/listing-page-min-1200.css" media="(min-width: 1200px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/listing/css/listing-page-max-767.css" media="(max-width: 767px)">

<!-- filter -->
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/filter/css/filter.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/filter/css/filter-max-1024.css" media="(max-width: 1024px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/filter/css/filter-max-767.css" media="(max-width: 767px)">

<!-- detail page -->
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/css/detail-info.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/css/detail-info-max-991.css" media="(max-width: 991px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/css/detail-info-max-767.css" media="(max-width: 767px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/css/tab-area.css">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/css/tab-area-max-1200.css" media="(max-width: 1200px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/css/tab-area-max-991.css" media="(max-width: 991px)">
<link rel="stylesheet" href="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/css/tab-area-max-767.css" media="(max-width: 767px)">

<?php if($use_cdn):?>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php else:?>
    <script src="<?php echo base_url(); ?>javascript/jquery/jquery.js"></script>
    <script src="<?php echo base_url().$bootstrap_theme ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url().$bootstrap_theme ?>/js/bootstrap.min.js"></script>
<?php endif;?>

<script type="text/javascript">
    var CI = {'base_url': '<?php echo site_url(); ?>'};

    if (top.frames.length!=0) {
        top.location=self.document.location;
    }

    $(document).ready(function()  {
        /*global ajax error handler */
        $( document ).ajaxError(function(event, jqxhr, settings, exception) {
            if(jqxhr.status==401){
                window.location=CI.base_url+'/auth/login/?destination=catalog/';
            }
            else if (jqxhr.status>=500){
                alert(jqxhr.responseText);
            }
        });

    }); //end-document-ready

</script>

<script src="<?php echo base_url().$bootstrap_theme ?>/components/elements/search/js/search.js"> </script>
<script src="<?php echo base_url().$bootstrap_theme ?>/components/elements/tab/js/tab.js"> </script>
<script src="<?php echo base_url().$bootstrap_theme ?>/components/header/js/header.js"> </script>

<!-- detail page-->
<script src="<?php echo base_url().$bootstrap_theme ?>/components/pages/detail/js/detail.js"> </script> 

<?php if (isset($_styles) ){ echo $_styles;} ?>
<?php if (isset($_scripts) ){ echo $_scripts;} ?>

<?php $google_ua_code=$this->config->item("google_ua_code"); ?>
<?php if(!empty($google_ua_code)):?>
    <?php require_once 'google_analytics.php';?>
<?php endif;?>
