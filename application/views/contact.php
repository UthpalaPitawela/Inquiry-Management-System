<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
          <link rel="icon" href="<?php echo base_url('public/Assets/EDULINK-Logo1.ico'); ?>" type="image/x-icon" />
       <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
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
                        <a href="<?php echo base_url('index.php/page_controller/loadingpages/home') ?>">Edulink</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>



<?php

$name=$_SESSION["first_username"];
//$_SESSION['name'];
$propic=$_SESSION["propic"];

?>





<li class="xn-profile">
                       
                        <div class="profile">
                            <div class="profile-image">
                                <img src='<?php echo base_url($propic); ?>' alt="No image">
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name; ?></div>
                                <div class="profile-data-title">Student</div>
                            </div>
                           
                        </div>                                                                        
                    </li>

















                    <li class="xn-title">Navigation</li>
                    
                       


<li>
  <a href="<?php echo base_url('index.php/page_controller/loadingpages/home') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Home</span> </a>
  </li>
  <li>
  <a href="<?php echo site_url('page_controller/loadingpages/student_profile') ?>"><span class="fa fa-user"></span>  <span class="xn-text"> Profile</span> </a>
  </li>
  <li>
  <a href="<?php echo site_url('page_controller/loadingpages/uploadresults') ?>"><span class="fa fa-floppy-o"></span>  <span class="xn-text"> Upload results </span> </a>
  </li>
  <li class="active">
  <a href="<?php echo site_url('page_controller/loadingpages/contact') ?>"><span class="fa fa-envelope"></span>  <span class="xn-text"> Contact</span> </a>
  </li>
                      <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> <span class="xn-text"> Logout</span></a>                        
                    </li> 

















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
                    <li class="active">Contact</li>
                </ul>
                <!-- END BREADCRUMB -->                



                
                <div class="page-title">                    
                    <h2><span class="fa fa-envelope"></span>&nbspContact Us</h2>
                </div>                   
                




                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-body">
                               












<section class="section-content">
    <div class="container clearfix">
        <article id="post-487" class="post-487 page type-page status-publish hentry">
                        <div id="page-title">

                            </div>
            <h2>Location</h2>            
            <div class="entry-content full-width-content" style="width:90% !important;">
                <div id="street-map" style="box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.25); padding: 0; margin: 0 0 30px 0; height: 300px;"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9365705793143!2d79.85590599999996!3d6.898189999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bdf63d3ebaf%3A0x9933be46f49b3e7!2sEdulink+International+Campus!5e0!3m2!1sen!2slk!4v1440058877955" width="100%" height="300" alt="Location of EDULINK in google map.Need Internet connection."frameborder="0"></iframe></div>



<div class="dm3-divider-dotted"></div>
<div class="dm3-one-third dm3-column-last" >
<h3>Get in Touch</h3>

<p><strong>You can contact us by email or phone:</strong><br>

Tel: <lable>+94-11-597-9797</lable><br>
Hotline: <lable>+94-77-040-1111</lable></p>
<p><small><i class="fa fa-phone"></i></small> <span><lable>+94-77-040-3333</lable></span><br>
<small><i class="fa fa-phone"></i></small> <span><lable>+94-77-040-6666</lable></span><br>
<small><i class="fa fa-phone"></i></small> <span><label>+94-77-040-8888</label></span></p>
<p style="float:left;">Email: <a href="mailto:info@edulink.edu.lk">info@edulink.edu.lk</a></p>
<address style="float:left; margin-left: 10%;margin-top: -13.5%;">
<strong>Visit Us</strong><br>
EDULINK COLOMBO<br>
498, R.A. De Mel Mawatha,<br>
Colombo 03,<br>
Sri Lanka.<br>
</address>
<p></p>

</div><div class="clear"></div>
            </div>
        </article>

            </div>
</section>
































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
                            <a href="<?php echo site_url('login_controller../../../') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
            <?php

      include 'imports.php'
      ?>

    <!-- END SCRIPTS -->         
    </body>
</html>






