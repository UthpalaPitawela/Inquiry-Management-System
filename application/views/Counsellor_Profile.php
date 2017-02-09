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
                        <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/managerhome') ?>">Edulink IMS</a>
                        
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
                                <a href="#" class="profile-control-right"><span class="fa fa-cog"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li class="active">
                        <a href="#"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li><a href="<?php echo base_url();?>index.php/manageInquiriesCoun_controller"><span class="fa fa-phone"></span> Manage Inquiries</a></li> 
                            
                        </ul>
                        
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Database"><span class="fa fa-database"></span> <span class="xn-text">Databases</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email/SMS</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/admissionsCoun_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
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
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->

                    <li class="pull-right" style="color:grey; padding-top: 16px; padding-right: 20px" >Logged in as <?php echo $name; ?> </li>

                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <!-- <script type="text/javascript">
                    $(document).ready(function () {
                        $.ajax({
                            url : '<?php echo base_url('index.php/Counsellor_Profile_Controller'); ?>',
                            method : post,
                            data : {username : $name},
                            success : function(){
                            }
                        });
                    });
                </script> -->
                <div class="page-content-wrap">
                              
                    <div class="col-md-6">
                        <div class="row">

                        <?php
                          
                           
                            $sum = $result['pending'] + $result['following']+$result['completed'];
                                
                            

                        
                            $pending =round( ($result['pending']/$sum)*100 , 0);

                            
                            $following = round(($result['following']/$sum)*100 , 0);

                            
                            $completed = round(($result['completed']/$sum)*100 , 0);

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

                                                <?php
                                                    
                                                 
                                                    
                                                    echo $pending."% Pending";
                                                          
                                                ?>
                                            </div>
                                        </div>

                                         <div class="progress">
                                            <div class="progress-bar progress-bar-colorful" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $following?>%">
                                                <?php
                                                     
                                                     echo $following."% Following";   
                                                ?>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completed?>%">
                                               <?php
                                               
                                                    echo $completed."% Completed";
                                                ?>
                                            </div>
                                        </div>
                                        
                            
                                        
                                       
                                                                   
                                    </div>                            
                            </div>
                        </div>

                        <div class="row">
                              
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Target</h3>
                                    </div>
                                    <div class="panel-body">
                                    <!--This is the target section-->
                                        <div class="list-group border-bottom push-down-20">
                                            <a href="#" class="list-group-item active">Month(November)</a>
                                            <a href="#" class="list-group-item">Total Target<span class="badge badge-success">30</span></a>
                                            <a href="#" class="list-group-item">Completed <span class="badge badge-danger">5</span></a>
                                            
                                        </div> 
                                       
                                    </div>                            
                            </div>
                            
                        </div>
                      
                    </div>

                    <br>
                    <!-- Calendar -->
                    <div class="col-md-5" >
                
                        <div id="alert_holder"></div>
                            <div class="calendar">                                
                                <div id="calendar"></div>                            
                            </div>
                    </div>


                    <br><br>      <br><br> 


                    <div class="col-md-5">

                            <!-- CONTACTS WITH STATUS -->
                            <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">Reminders</h3>         
                                </div>
                                <div class="panel-body list-group list-group-contacts">
<?php
                                 $countremider = $remiderstudent->num_rows();
           
            if($countremider>0){
               foreach ($remiderstudent->result_array() as $onestudent) {
                    date_default_timezone_set('Asia/Colombo');
                    $today = date('Y-m-d ');
                    $mday= date('Y-m-d', strtotime('+1 month'));
                    $spotential=$onestudent['Pdate'] ;
                    $tday=date_create($today);
                  //  $mday=date_create($monthdate);
                    $sday=date_create($spotential);
                       $diff=date_diff($tday,$sday);
                    // echo "<script>alert(".$today.")</script>";
                    // echo $mday;
                    // echo $spotentail;
                    if( (strtotime($mday) > strtotime($spotential)) && (strtotime($spotential)> strtotime($today))){
                        ?>
                         <a href="#" class="list-group-item" >         
                                        <div class="list-group-status status-online"></div>

                                        <img src="<?php echo base_url() ;?>public/assets/images/users/no-image.jpg" class="pull-left" alt="Student">
                                        <span class="contacts-title"><?php echo $onestudent['Fname']; ?>&nbsp;<?php echo $onestudent['Lname']; ?></span>
                                        <p>Email : <?php echo $onestudent['Email']; ?></p>
                                        <p>                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Potential Date : <?php echo $onestudent['Pdate'];?></p>
                                        <p>                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php  echo $diff->format('%a days remaining'); ?></p>                      
                                    </a>                                
                               
                        <?php
                    }
                }
            }else{
                ?>
                <h2>No Reminders</h2>
            <?php
            }
                ?>
                                            
                                </div>
                            </div>
                            <!-- END CONTACTS WITH STATUS -->

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

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

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

        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/actions.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>
