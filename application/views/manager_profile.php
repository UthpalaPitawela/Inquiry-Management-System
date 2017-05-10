<?php
if (time() - $_SESSION['start'] > 1800) {
            session_destroy();
            
            ?>
            <script type="text/javascript">
                window.location="<?php echo base_url()?>index.php/Login_Controller/session_timeout_direct/";
            </script>
            <?php

        }
        else{
            $_SESSION['start']=time();

        }
          ?>











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
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller">Edulink IMS</a>
                        
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url(). $propic ?>" alt="noimage"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name ?></div>
                                <div class="profile-data-title"><?php if($status==0){echo 'Manager';}
                                elseif($status==2){echo 'Admissions Officer';}
                                elseif($status==3){echo 'Counsellor';}   ?></div> 
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url();?>index.php/profile_controller" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-cog"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/User"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li><a href="<?php echo base_url();?>index.php/ManageInquiries_controller"><span class="fa fa-phone"></span> Manage Inquiries</a></li> 
                            
                        </ul>
                        
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Database"><span class="fa fa-database"></span> <span class="xn-text">Databases</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Campaign_Controller/index"><span class="fa fa-th-list"></span> <span class="xn-text">Campaigns</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email/SMS</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/admissions_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/AddStudentAcc_controller"><span class="fa fa-user"></span> <span class="xn-text">Student Profiles</span></a>   
                    </li>

                    
                    <?php if($status==0){ ?>
                    <li class="xn-title">Administration</li>
                    <li class>
                        <a href="<?php echo base_url();?>index.php/TargetsController"><span class="fa fa-bullseye"></span> <span class="xn-text">Targets</span></a>                        
                    </li>    

                    <!-- <li>
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>                 
                    </li> --> 

                    <li>
                        <a href="<?php echo base_url();?>index.php/Manager_Settings_Controller"><span class="fa fa-cogs"></span> <span class="xn-text">Settings</span></a>  
                    </li>  
                    <?php } ?>             

                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            
            
<!-- ++++++++++++++++++++++++++++++++++++++   END OF SIDEBAR   +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

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
                                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                              
                    <div class="col-md-6">
                        <div class="row">


                        <?php

                            $sum = 0;
                            $val1 = 0;
                            $val2 = 0;
                            $val3 = 0;
                             foreach ($result as $row) {
                                if($row['status'] == 'Pending'){
                                    $val1 = $row['count'];
                                }else if($row['status'] == 'Following'){
                                    $val2 = $row['count'];
                                }else if($row['status'] == 'Completed'){
                                    $val3 = $row['count'];
                                }

                               
                            }


                            $sum = $val1 + $val2 + $val3;
                          
                    
                            $pending = round(($val1/$sum)*100,0);

                            if($sum == 0){
                                $pending = 0;
                                $following = 0;
                                $completed = 0;
                            }else{

                            $val1 = $result[2];
                            $pending = round(($val1['count']/$sum)*100,0);


                            $following = round(($val2/$sum)*100,0);


                   
                            $completed = round(($val3/$sum)*100,0);

                            $val3 = $result[0];
                            $completed = round(($val3['count']/$sum)*100,0);
                        }


                        ?>
                        <!--This is the activity summary section-->
                        <br>
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Activity Summary</h3>
                                    </div>
                                    <div class="panel-body">

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pending?>%">


                                                 <font color="black">

                                                <?php
                                                    
                                                 
                                                    
                                                    echo $pending."% Pending";
                                                          
                                                ?>

                                       

                                                </font>

                                            </div>
                                        </div>

                                         <div class="progress">
                                            <div class="progress-bar progress-bar-colorful" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $following?>%">

                                                <font color="black">

                                                <?php
                                                     
                                                    echo $following."% Following";   
                                                ?>
                                                </font>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completed?>%">

                                            <font color="black">

                                                 

                                               <?php
                                               
                                                    echo $completed."% Completed";
                                                ?>

                                          

                                                </font>

                                            </div>
                                        </div>
                                        
                            
                                        
                                       
                                                                   
                                    </div>                            
                            </div>
                        </div>

                        

                        <!-- Assign Inquiries button -->
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <a href="<?php echo base_url();?>index.php/Assign_Inquiries_Controller"><button class="btn btn-primary btn-block">Assign Inquiries</button></a>
                            </div>
                        </div> -->

                        <!--Web inquiries -->
                        <div class="col-md-6">

                            <div class="widget widget-primary widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="widget-data">
                                <br>
                                    <a href="#"><div class="widget-subtitle"><div class="widget-int num-count">Web Inquiries</div></div></a>
                                    
                                    <a href="<?php echo base_url();?>index.php/Web_Inquiries_Controller"><div class="widget-subtitle">Direct Inquiries From The Website</div></a>
                                </div>
                                                           
                            </div>  

                        </div>

                        <!-- Assign Inquiries -->
                        <div class="col-md-6">

                            <div class="widget widget-primary widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-users"></span>
                                </div>
                                <div class="widget-data">
                                <br>
                                    <a href="<?php echo base_url();?>index.php/Assign_Inquiries_Controller"><div class="widget-subtitle"><div class="widget-int num-count">Assign</div></div></a>
                                    
                                    <a href="<?php echo base_url();?>index.php/Assign_Inquiries_Controller"><div class="widget-subtitle">Assign Inquiries to Counsellors</div></a>
                                </div>
                                                           
                            </div>

                        </div>

                                             
                        
                              
                                      
                    </div>

                    <br>

                    <!-- START WIDGET CLOCK -->
                    <div class="col-md-5">
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                                            
                                                           
                            </div>            
                    </div>            
                            <!-- END WIDGET CLOCK -->

                    <!--Calendar -->
                    <div class="col-md-5" >
                    
                        <div id="alert_holder"></div>
                        <div class="calendar">                                
                            <div id="calendar"></div>                            
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
        


        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/jquery/jquery-ui.min.js"></script>
         <!-- START PLUGINS -->
        
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
          <!-- START THIS PAGE PLUGINS calendar-->        
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/fullcalendar/fullcalendar.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->         

        <!-- START PLUGINS progress bars -->
        
        
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

        <!-- START THIS PAGE PLUGINS  targets-->        
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js"></script>
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
