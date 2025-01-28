<footer class="site-footer">
    <!-- footer top section -->
    <?php //include_once 'footer_top.php';?>
    <!-- End footer top section -->

    <!-- footer bottom section -->
    <div class="full-row-footer-black-components">
        <div class="container">
            <div class="footer">
                <div class="row footer-wrap">

                    <!-- / footer logo --> 
                    <div class="col-12 col-md-6 footer-left">

                        <div class="text-center text-lg-left footer-logo-section">
                        <?php ?>
                        <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo">
                            <img  src="<?php echo base_url().$bootstrap_theme; ?>/images/footer/MICS-Logo.png" class="img-responsive">                            
                        </a>
                        <a href="<?php echo site_url();?>" class="g01v1-logo nada-logo">
                            <img   src="<?php echo base_url().$bootstrap_theme; ?>/images/footer/UNICEF-Logo.png" class="img-responsive">                            
                        </a>
                        <?php ?>

                        <?php /* text only */ ?>
                        <a href="<?php echo site_url();?>" >
                            <?php /*echo $this->config->item("website_title"); */ ?>
                            <img   src="<?php echo base_url().$bootstrap_theme; ?>/images/footer/microdata.png" class="img-responsive">    
                        </a>                        
                        <?php /* */?>
                        </div>

                    </div>
                    <!-- / footer logo -->

                    <!-- Copyrights-->
                    <div class="col-12 col-md-6 footer-right">
                        <div class="">
                            <div class="footer-copy-right">

                                <p class="text-center text-lg-right">

                           
                                        ©
                                        <script language="JavaScript">
                                            var time = new Date();
                                            var year = time.getYear();
                                            if (year < 2000)
                                                year = year + 1900 + ", ";
                                            document.write(year); // End -->
                                        </script> <?php echo $this->config->item("website_title");?>, All Rights Reserved.
                                

                                </p>

                            </div>

                        </div>
                    </div>
                    <!-- / Copyrights  -->

                </div>
            </div>
        </div>
    </div>
</footer>
