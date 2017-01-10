<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
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
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Edulink IMS</a>
                        
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url('public/assets/images/users/user2.jpg');?>" alt="Viduni"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Name</div>
                                <div class="profile-data-title">Designation</div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-cog"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li>
                        <a href="#"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li><a href="manageInquiries.php"><span class="fa fa-phone"></span> Manage Inquiries</a></li> 
                            
                        </ul>
                        
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Database"><span class="fa fa-database"></span> <span class="xn-text">Databases</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email/SMS</span></a>
                    </li>

                    <li>
                        <a href="#"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                    </li>

                    <li>
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Student Profiles</span></a>   
                    </li>

                    

                    <li class="xn-title">Administration</li>
                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/TargetsController"><span class="fa fa-bullseye"></span> <span class="xn-text">Targets</span></a>                        
                    </li>    

                    <li>
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Reports</span></a>                 
                    </li> 

                    <li>
                        <a href="<?php echo base_url();?>index.php/Manager_Settings_Controller"><span class="fa fa-cogs"></span> <span class="xn-text">Settings</span></a>  
                    </li>               

                    
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

                    <!-- SETTINGS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-cog"></span></a>                        
                    </li> 
                    <!-- END SETTINGS -->

                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                                                          

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Targets</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                 

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Targets Dashboard</h2>
                </div>
                <!-- END PAGE TITLE -->                    
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- ADDING A TARGET -->  
                    
                    <form class = "form-horizontal" method="POST" action="<?php echo base_url('index.php/TargetsController/setTarget');?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Set New Target</h3>
                                </div>
                                <div class="panel-body">

                                    <form class="form-horizontal" role="form">                                   
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee ID</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="EID"/>
                                        </div>
                                    </div>

                                    <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="E_Name"/>
                                        </div>
                                    </div>

                                    <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Role</label>
                                        <div class="col-md-9">
                                            <input type="radio" name="Role" id="optionsRadios2" value="Assistant Manager"/> &nbsp; Assistant Manager &nbsp;
                                            <input type="radio" name="Role" id="optionsRadios2" value="Counsellor"/> &nbsp;Counsellor
                                        </div>
                                    </div>

                                    <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Target</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="Target"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start Date</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input type="date" id="dp-3" class="form-control" value="06-06-2014" data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years" name="Start_Date"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Deadline</label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <input type="date" id="dp-3" class="form-control" value="06-06-2014" data-date="06-06-2014" data-date-format="dd-mm-yyyy" data-date-viewmode="years" name="End_Date"/>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="form-horizontal" role="form">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Assigned By</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="Assigned_By"/>
                                        </div>
                                    </div>


                                </div>                            
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Clear</button>
                                    <button class="btn btn-primary pull-right" name="Set_Target">Submit</button>
                                </div>                              
                            </div>
                            
                            
                        </div>
                        </form>

                        <!-- Targets of each counsellor -->

                        <div class="col-md-8">

                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Assigned Targets</h3>
                                </div>
                                <div class="panel-body">

                                <!-- LIST GROUP WITH BADGES -->
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <ul class="list-group border-bottom">
                                            <li class="list-group-item">Harini<span class="badge badge-info" data-toggle="tooltip" data-placement="top" title="Pending">10</span><span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Conversions">5</span></li>
                                            <li class="list-group-item">Uthpala<span class="badge badge-info" data-toggle="tooltip" data-placement="top" title="Pending">12</span><span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Conversions">10</span></li>
                                            <li class="list-group-item">Malshan<span class="badge badge-info" data-toggle="tooltip" data-placement="top" title="Pending">8</span><span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Conversions">5</span></li>
                                            <li class="list-group-item">Ridmi<span class="badge badge-info" data-toggle="tooltip" data-placement="top" title="Pending">8</span><span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Conversions">2</span></li>
                                        </ul>                                
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                                <!-- END LIST GROUP WITH BADGES -->    
                        
                    

                        <!-- SUMMARY -->
                        <div class="col-md-8">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Summary</h3>
                                </div>

                                <div class="panel-body">

                                <!-- RESPONSIVE TABLE FOR SUMMARY -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">

                                            <div class="panel-body panel-body-table">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <!--<th width="50">TID</th>-->
                                                                <th width="50">EID</th>
                                                                <th>Name</th>
                                                                <th width="100">Role</th>
                                                                <th width="60">Target</th>
                                                                <th width="100">Start Date</th>
                                                                <th width="100">Deadline</th>
                                                                <th width="100">Assigned By</th>
                                                                <th width="110">Actions</th>
                                                            </tr>
                                                        </thead>

                                                        <?php
                                                        if(is_array($fetch_data) || is_object($fetch_data)){
                                                            foreach($fetch_data -> result_array() as $row){
                                                                //$TID = $row['TID'];
                                                                $EID = $row['EID'];
                                                                $E_Name = $row['E_Name'];
                                                                $Role = $row['Role'];
                                                                $Target = $row['Target'];
                                                                $Start_Date = $row['Start_Date'];
                                                                $End_Date = $row['End_Date'];
                                                                $Assigned_By = $row['Assigned_By'];
                                                        

                                                        ?>

                                                        <tbody>                                            
                                                            <tr id="trow_1">
                                                                <!--<td class="text-center"><?php echo $TID;   ?></td>-->
                                                                <td class="text-center"><?php echo $EID;   ?></td>
                                                                <td><strong><?php echo $E_Name;   ?></strong></td>
                                                                <td><span class="label label-success"><?php echo $Role;   ?></span></td>
                                                                <td><?php echo $Target;   ?></td>
                                                                <td><?php echo $Start_Date;   ?></td>
                                                                <td><?php echo $End_Date;   ?></td>
                                                                <td><?php echo $Assigned_By;   ?></td>
                                                                <td>
                                                                    <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                                    <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                                </td>
                                                            </tr>
                                                            <?php }
                                                            }
                                                             ?>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>                                

                                            </div>
                                        </div>                                                

                                    </div>
                                </div>
                                <!-- END RESPONSIVE TABLE -->
                                    
                
                                                          
                                                             
                            </div>
                        </div>


                
                                </div>                            
                                                           
                            </div>
                           
                            
                        </div>                   
                    
                    
 
                    </div>
                                                 
<!-- ++++++++++++++++++++++++++++ FOOTER +++++++++++++++++++++++++++++++++++++++++++++++++-->

                              
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->




        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if you want to continue working. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="#" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
         
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






