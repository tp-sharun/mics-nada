<!-- <style>
.site-header .navbar-light .no-logo .navbar-brand--sitename {border:0px!important;margin-left:0px}
.site-header .navbar-light .no-logo .nada-site-title {font-size:18px;}

.navbar-brand--logo {
    display: inline-block; 
    margin-right: 20px; 
}

.navbar-brand--logo:last-child {
    margin-right: 0; 
}



</style> -->
<header class="site-header">
    <?php /*?>
    <div class="container-fluid wb-user-bar">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <?php //require 'user-bar.php';?>
                </div>
            </div>
        </div>
    </div>
    <?php */ ?>

    <?php //language bar ?>
    <?php require 'lang-bar.php';?>



        <div class="header-top">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light rounded navbar-toggleable-md wb-navbar">

                    <?php /**
                     * 
                     * LOGO + Text
                     **/  ?>
                    <?php  ?>
                    <div class="navbar-brand">
                        <div class="navbar-brand--logo">
                            <img src="<?php echo base_url();?>themes/mics/images/header/mics-logo.png" alt="MICS Logo" >
                        </div>
                        <div class="navbar-brand--logo">
                            <img src="<?php echo base_url();?>themes/mics/images/header/UNICEF-Logo.png" alt="UNICEF Logo" >
                        </div>
                        <div class="navbar-brand--logo">
                        <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo">
                            <img src="<?php echo base_url();?>themes/mics/images/header/Microdata-Library.png" alt="Microdata logo" >
                        </a>
                        </div>
                        <!-- <div class="navbar-brand--sitename ml-3" style="font-size: 50px; line-height: 50px;">
                            <a class="nada-site-title" href="<?php echo site_url(); ?>">Microdata Library</a>
                        </div> -->
                    </div>
                                        <?php  ?>


                    <?php /**
                     * 
                     * text only 
                     **/  ?>
                    <?php /**/ ?>

                    <!--<div class="navbar-brand no-logo">
                        <div class="navbar-brand--sitename">
                               
                            <div><a class="nada-site-title" href="<?php echo site_url(); ?>"><?php echo $this->config->item("website_title"); ?></a></div>
                            <div class="nada-site-subtitle"></div>
                        </div>
                    </div>-->
                    
                    <?php /**/?>
                    

                    <button class="navbar-toggler navbar-toggler-right collapsed wb-navbar-button-toggler" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- User Menu -->
                    <div class="login-menu">
                        <ul>
                        <?php require 'user-menu.php'; ?>
                        </ul>
                    </div>
                </nav>

               

            </div>
             
                

            
        </div>
        </div>
        <!-- /row -->
       
        <div class="header-bottom">
            <div class="container">
              <nav class="navbar navbar-expand-md navbar-light rounded navbar-toggleable-md wb-navbar ml-auto header-menu">
                  <?php require 'nav-menu.php'; ?>
              </nav>
            </div>
        </div>


</header>
