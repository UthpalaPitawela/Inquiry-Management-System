<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
         <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('public/css/theme-default.css'); ?>"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>

    <body>

    <?php

    $name = $_SESSION["first_username"];
    $propic = $_SESSION["propic"];
    $status = $_SESSION["status"];

    ?>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url('index.php/page_controller/loadingpages/managerhome') ?>">Edulink IMS</a>
                        
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url(). $propic ?>" alt="Viduni"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name ?></div>
                                <!-- <div class="profile-data-title">Designation</div> -->
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url();?>index.php/profile_controller" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller" class="profile-control-right"><span class="fa fa-cog"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li>
                        <a href="<?php echo base_url('index.php/page_controller/loadingpages/managerhome') ?>"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li><a href="<?php echo base_url();?>index.php/manageInquiries_controller"><span class="fa fa-phone"></span> Manage Inquiries</a></li> 
                            
                        </ul>
                        
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Database"><span class="fa fa-database"></span> <span class="xn-text">Databases</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email/SMS</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/admissions_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/addStudentAcc_controller"><span class="fa fa-user"></span> <span class="xn-text">Student Profiles</span></a>   
                    </li>

                    
                    <?php if($status==0){ ?>
                    <li class="xn-title">Administration</li>
                    <li class>
                        <a href="<?php echo base_url();?>index.php/TargetsController"><span class="fa fa-bullseye"></span> <span class="xn-text">Targets</span></a>                        
                    </li>    

                    <li>
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>                 
                    </li> 

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/Manager_Settings_Controller"><span class="fa fa-cogs"></span> <span class="xn-text">Settings</span></a>  
                    </li>        
                    <?php } ?>       

                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            
            
<!-- ++++++++++++++++++++++++++++++++++++++   END OF SIDEBAR   ++++++++++++++++++++++++++++++++++++++++++++++ -->    

<!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                   

                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="<?php echo base_url();?>index.php/Login_Controller/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->    


                    <li class="pull-right" style="color:grey; padding-top: 16px; padding-right: 20px" >Logged in as <?php echo $name; ?> </li>
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->  

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active"><a href="#">Settings</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                        <div class="row">
                            
                        </div>  
                    <div class="row">
                    <!-- START TIMELINE -->
                    <div class="col-md-4">
                        <div class="panel panel-default">
                                <div class="panel-body profile" style="background: base_url('public/assets/images/users/no-image.jpg') center center no-repeat;">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url('public/assets/images/users/no-image.jpg');?>" />
                                    </div>
                                    
                                                                       
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                           
                                        </div>
                                        <div class="col-md-6">
                                            <?php if($details['intake'] == 'high'){?>
                                                <button class="btn btn-primary btn-rounded btn-block" style="border-color:red;" ><font size="4" color="red"> High </font></button>
                                            <?php }else if($details['intake'] == 'medium'){?>
                                                <button class="btn btn-primary btn-rounded btn-block" style="border-color:#f9e504;" ><font size="4" color="#f9e504"> Medium </font></button>
                                            <?php}else{?>
                                                <button class="btn btn-primary btn-rounded btn-block" style="border-color:#f9e504;" ><font size="4" color="#0ed11b"> Low </font></button>
                                            <?php }?>
                                            
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                                
                                <div class="panel-body list-group border-bottom" style="padding:0px;">
                                    <a href="#" class="list-group-item active"><span class="fa fa-bar-chart-o"></span> <?php echo $details['fname']." ".$details['lname']?></a>
                                    <div class="row">
                                    <a href="#" class="list-group-item" style="height:40px;">
                                        <div class="col-md-6"> Email</div>
                                        <div class="col-md-6"><?php echo $details['email']?></div>
                                    </a>   
                                    </div>                             
                                    <div class="row">
                                    <a href="#" class="list-group-item" style="height:40px;">
                                        <div class="col-md-6">Contact No</div>
                                        <div class="col-md-6"><?php echo $details['contactno']?></div>
                                    </a>   
                                    </div>
                                    <div class="row">
                                    <a href="#" class="list-group-item" style="height:40px;">
                                        <div class="col-md-6"> Country</div>
                                        <div class="col-md-6"><?php echo $details['country']?></div>
                                    </a>   
                                    </div>
                                    <div class="row">
                                    <a href="#" class="list-group-item" style="height:40px;">
                                        <div class="col-md-6">Potential Date</div>
                                        <div class="col-md-6"><?php echo $details['pdate']?></div>
                                    </a>   
                                    </div>
                                </div>
                                
                    </div> 
                    
                    </div>
                    <div class="row">
                        <?php  if($summary != null){?>

                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div class="timeline timeline-right">
                            

                                
                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-main">
                                    <div class="timeline-date"><h3>Follow up Summary</h3></div>
                                </div>
                                <?php foreach ($summary as $row){
                               
                        ?>

                                 <div class="timeline timeline-right">
                                <!-- END TIMELINE ITEM -->
                                <br><br><br><br>
                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <div class="timeline-item-info"><?php echo ($row['date']);?></div>
                                    <?php if ($row['mode'] == 'call'){?>
                                    <div class="timeline-item-icon"><span class="glyphicon glyphicon-earphone"></span></div><?php }else if($row['mode'] == 'sms'){?>
                                        <div class="timeline-item-icon"><span class="glyphicon glyphicon-phone"></span></div>
                                        <?php }else if ($row['mode'] == 'email'){?>
                                          <div class="timeline-item-icon"><span class="glyphicon glyphicon-envelope""></span></div>  
                                    <?php }else {?>
                                        <div class="timeline-item-icon"><span class="glyphicon glyphicon-plus"></span></div>
                                    <?php }?>
                                    <div class="timeline-item-content">
                                        <div class="timeline-heading">

                                             <?php if ($row['mode'] == 'call'){?>
                                                <h4>Call Follow up</h4>
                                    <?php }else if($row['mode'] == 'sms'){?>
                                        <h4>SMS Follow up</h4>
                                        <?php }else if ($row['mode'] == 'email'){?>
                                          <h4>Email Follow up</h4>  
                                    <?php }else {?>
                                        <h4>Other Follow up</h4>
                                    <?php }?>
                                        </div>
                                        <div class="comment-item">
                                          
                                            <p><?php echo $row['summary']?></p>
                                            
                                                                                       
                                        </div>
                                                                               
                                       
                                    </div>
                                </div>       
                                <!-- END TIMELINE ITEM -->
                        </div>
                        <?php 
                        
                        } ?>
                    
                </div>
                </div>
                <div class="col-md-2"></div>
                    <?php }?>
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
                        <p><strong>Press No if you want to continue work.</strong> Press Yes to logout.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/Login_Controller/logout') ?>" class="btn btn-danger btn-lg">Yes</a>
                            <button type= "button" class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of message box-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        
        
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/actions.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/demo_dashboard.js"></script>

        <script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
        </script>
       
    <!-- END SCRIPTS -->         
    </body>
</html>






