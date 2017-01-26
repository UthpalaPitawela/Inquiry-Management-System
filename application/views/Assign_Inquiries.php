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


       

         

        <style>
        .ScrollStyle {
            
            max-height: 400px;
            overflow-y: scroll;
        }                 
        </style>                
    </head>

    <body>

         <?php

    $name = $_SESSION["first_username"];
    $propic = $_SESSION["propic"];

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
                                <a href="#" class="profile-control-right"><span class="fa fa-cog"></span></a>
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
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
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
                        <div class="col-md-2"></div>
                        <div class="col-md-7">
                            <div class="row">
                                <h4 align="center"> Unassigned Inquiries</h4><br>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <label>Select the counsellor to assign inquiries</label>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-6">
                                <div class="btn-group">
                               
                                    <select id = "counsellorname" name="counsellornamename" class="btn btn-primary dropdown-toggle">
                                    <?php

                                        foreach($result as $row)
                                        {
                                            $name = $row->first_name." ".$row->last_name;
                                            echo '<option value = "'.$name.'">'.$row->first_name." ".$row->last_name.'</option>';
                                        }
                                    ?>
                                    </select>
                                    <br><br>
                                
                                </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="ScrollStyle">
                                    <div class="panel-body panel-body-table">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th width="120" align="center">First Name</th>
                                                                <th width="120" align="center">Last Name</th>
                                                                <th width="120" align="center">Email</th>
                                                                <th width="60" align="center">Intake</th>
                                                                <th width="80" align="center">Assign</th>
                                                                
                                                                
                                                            </tr>
                                                        </thead>

                                                        <?php
                                                        if(is_array($inquiries) || is_object($inquiries)){
                                                            foreach($inquiries -> result_array() as $row){
                                                             
                                                                $fname = $row['Fname'];
                                                                $lname = $row['Lname'];
                                                                $email = $row['Email'];
                                                                $intake = $row['Intake'];
                                                                $rid = $row['r_id']
                                                            
                                                        ?>

                                                        <tbody>                                            
                                                            <tr id="">
                                                                
                                                                <td  style="height:40px; padding-bottom: 0px"><?php echo $fname;   ?></td>
                                                                <td  style="height:40px; padding-bottom: 0px"><?php echo $lname;   ?></td>
                                                                <td  style="height:40px; padding-bottom: 0px"><?php echo $email;   ?></td>
                                                                <td  style="height:40px; padding-bottom: 0px"><?php echo $intake;   ?></td>
                                                                <td  style="height:40px; padding-bottom: 0px"><label class="switch switch-small" style="height:20px">
                                                    <input type="checkbox" class = "chk" id="assign" name="assign"  value="<?php echo $rid?>"  />
                                                    <span></span>
                                                </label></td>
                                                                
                                                               
                                                               
                                                            </tr>
                                                            <?php }
                                                            }
                                                             ?>
                                                            
                                                        </tbody>

                                                    </table>
                                                    
                                                   
                                        </div>
                                    </div>    
                                
                                 
                            </div>
                            <br><br>
                            <button onclick="handleInquiry();" style="float: right;" id="doneBtn" name="doneBtn" class="btn btn-success" >Done</button>
                            
                              <script type="text/javascript">
                                function handleInquiry(){
                                    var counsellorname = document.getElementById('counsellorname').value; 
                                    var selected_value = []; // initialize empty array 
                                    $(".chk:checked").each(function(){
                                        selected_value.push($(this).val());
                                });
                                    //console.log(selected_value);
                                    //alert(selected_value);
                                    //alert(counsellorname);

                 
                             $.ajax({
                                url : '<?php echo base_url('index.php/Assign_Inquiries_Controller/assignInquiries'); ?>',
                                method : 'get',
                                data : {'result':JSON.stringify(selected_value), 'counsellorname' : counsellorname },
                                success : function(){
                                    //alert("hiii");
                                    

                                }


                            });
                          
}


        </script>
                        </div>
                    </div>
                    <div class="col-md-3">
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

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/actions.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






