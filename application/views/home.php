<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
 


        <link rel="icon" href="<?php echo base_url('public/Assets/EDULINK-Logo1.ico'); ?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->       
        <style> 
       
</style>





    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/css/jquery/jquery-ui.min.css"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>                
        <script type='text/javascript' src="<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        
<!-- <script type="text/javascript" src="<?php echo base_url();?>public/js/settings.js"></script>
-->
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins.js"></script>  
   <!--       <script type="text/javascript" src="<?php echo base_url();?>public/js/actions.js"></script> -->      
            <!--    <script type="text/javascript" src="<?php echo base_url();?>public/js/demo_dashboard.js"></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         

































         <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bootstrap/css/bootstrap.css"> 
       
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/theme-default.css">

       
        
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container" style="height: 662px; ">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Edulink</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                                                                      
                    <li class="xn-title">Navigation</li>
                    <li>
                       



  <a href="<?php echo base_url('index.php/page_controller/loadingpages/home') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Home</span> </a>
  <a href="profile.php"><span class="fa fa-desktop"></span>  <span class="xn-text"> Profile</span> </a>
  <a href="<?php echo site_url('page_controller/loadingpages/uploadresults') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Upload results </span> </a>
  <a href="<?php echo site_url('page_controller/loadingpages/contact') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Contact</span> </a>
  <a href="<?php echo site_url('login_controller../../../') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Logout</span> </a>













<?php
$name=$_SESSION["first_username"];
//$_SESSION['name'];
?>






                    </li>                                        
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li style="color:white; padding-top: 16px;" >Loged in as  <?php echo $name?></li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Edulink</a></li>                    
                    <li class="active">Home</li>
                </ul>
                <!-- END BREADCRUMB -->                



                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Hello <?php echo $name?>, Welcome to EDULink</h2>
                </div>                   
                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <div class="panel-body">
                                   <h3 class="panel-title">This is your temporary account and you have to upload your relevant certificates to prove your results.
You can proceed to upload from <a href="<?php echo site_url('page_controller/loadingpages/uploadresults') ?>" style="color:blue; ">here</a> or you can select "Upload results" from menu</h3>



<br><br><br><br><br><br><br><br>
<h1>You are eligible to following Degrees</h1>
<br><br>
<ol>
    <li><h4> BSc (Hons) Computing </h4> </li>
    <li><h4>HND in Computer Science</h4> </li>
</ol>






                                </div>
                            </div>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <!-- END PRELOADS -->                 
    </body>
</html>






