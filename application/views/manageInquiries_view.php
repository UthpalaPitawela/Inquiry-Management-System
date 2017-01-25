<!DOCTYPE html>
<html lang="en"> 

    <head> 

        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        
        <!-- END META SECTION -->
         <link rel="icon" href="<?php echo base_url(); ?>EDULINK logo1.ico" type="image/x-icon" />               
        <!-- CSS INCLUDE --> 
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/jquery/jquery-ui.min.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/theme-default.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/fontawesome/font-awesome.min.css'); ?> "/>
        
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script> 
        
        <!-- JS INCLUDE --> 

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
                        <a href="index.html">Edulink IMS</a>
                        
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
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                    <li class="xn-openable active">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li class="active"><a href="<?php echo base_url();?>index.php/manageInquiries_controller"><span class="fa fa-phone"></span> Manage Inquiries</a></li> 
                            
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

                    <li>
                        <a href="<?php echo base_url();?>index.php/Manager_Settings_Controller"><span class="fa fa-cogs"></span> <span class="xn-text">Settings</span></a>  
                    </li>               

                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            
            
<!-- ++++++++++++++++++++++++++++++++++++++   END OF SIDEBAR   +++++++++++++++++++++++++++++++++++++ -->

<!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    

                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="<?php echo base_url();?>index.php/logout_controller/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->    

                    <li class="pull-right" style="color:grey; padding-top: 16px; padding-right: 20px" >Logged in as <?php echo $name; ?> </li>
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->           

                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Inquiries</a></li>
                    <li><a href="#">Manage Inquiries</a></li>
                </ul>
                <!-- END BREADCRUMB -->


                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
            <!-- ++++++++++++++++++++++++ Tabbed page  ++++++++++++++++++++++ -->
                            <form class="form-horizontal">
                                                            
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" id="inquiryTabs" role="tablist">
                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Pending</a></li>
                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Following</a></li>
                                        <li><a href="#tab-third" role="tab" data-toggle="tab">Completed</a></li>
                                    </ul>


                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab-first">
                                       

                        <div class="col-md-12">
            <!--+++++++++++++++++++++++++++++ START VERTICAL TABS +++++++++++++++++++++++++++++ -->
                            <div class="panel panel-default tabs nav-tabs-vertical">                   
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab22" data-toggle="tab"><strong><font size="4" color="red">High</font></strong></a></li>
                                    <li><a href="#tab23" data-toggle="tab"><strong><font size="4" color="#f9e504">Medium</font></strong></a></li>
                                    <li><a href="#tab24" data-toggle="tab"><strong><font size="4" color="#0ed11b">Low</font></strong></a></li>
                                </ul>                    


                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab22" >
            <!-- +++++++++++++++++++++++++ Student info table - pending(High) ++++++++++++++++++++++++  -->
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Info</h3>                               
                                </div>

                                <div class="panel-body">
                                    <table id="customers2" class="table datatable table-hover">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="100" style="text-align: center">Handled By</th>
                                                <th width="200" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>
                                    <?php
                                    foreach($posts as $post){ ?>
                                    <div>
                                        <tbody id='table'>
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><?php echo $post->Fname; ?></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1+$post->Grade2+$post->Grade3; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $post->CounsellorName; ?></td>
                                                <td style="text-align: center">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm" onclick="follow('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Following</button>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Completed</button>
                                                </td>
                                            </tr>
                            
                                        </tbody>
                                        </div>

                                        <?php } ?>
                                    </table>                                    
                                    
                                </div>
                            </div>      
                            <!-- <script type="text/javascript">

                                function changetab(contact){
                                    var url = "http://localhost/edulink/index.php/";
                                    $.get(url,{contact:contact},function(data){
                                        document.getElementById("test1").innerHTML = "<tr><td>Test</td><td>System Architect</td><td>Edinburgh</td><td>61</td><td>2011/04/25</td><td>$320,800</td></tr>";
                                        $('.nav-tabs a[href=#tab-second]').tab('show');

                                    });
                                    
                                }
                            </script> -->

                
                        </div> 
                                    </div>
                                    <div class="tab-pane" id="tab23">
                                        <!-- +++++++++++++++++ Student info table - pending(Medium) ++++++++++++++++++++++++  -->
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Info</h3>                                   
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable table-hover">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="100" style="text-align: center">Handled By</th>
                                                <th width="200" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>
                                    <?php
                                    if($posts1) {foreach($posts1 as $post){ ?>

                                        <tbody id='table'>
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><?php echo $post->Fname; ?></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1+$post->Grade2+$post->Grade3; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $post->CounsellorName; ?></td>
                                                <td style="text-align: center">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm" onclick="follow('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Following</button>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Completed</button>
                                                </td>
                                            </tr>
                            
                                        </tbody>

                                        <?php }} ?>
                                    </table>                                    
                                    
                                </div>
                            </div>      

                        </div> 
                        </div>


            <!-- +++++++++++++++++ Student info table - pending(Low) ++++++++++++++++++++++++  -->
                                    <div class="tab-pane" id="tab24">
                                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Info</h3>                                   
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable table-hover">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="100" style="text-align: center">Handled By</th>
                                                <th width="200" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>
                                    <?php
                                    if($posts2) {foreach($posts2 as $post){ ?>

                                        <tbody id='table'>
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><?php echo $post->Fname; ?></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1+$post->Grade2+$post->Grade3; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $post->CounsellorName; ?></td>
                                                <td style="text-align: center">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm" onclick="follow('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Following</button>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Completed</button>
                                                </td>
                                            </tr>
                            
                                        </tbody>

                                        <?php }} ?>
                                    </table>                                    
                                    
                                </div>
                            </div>
                                 

                        </div> 
                                    </div>                        
                                </div>
                            </div>                        
                            <!-- END VERTICAL TABS -->
                        </div>                     
                    </div>

                    <!-- 'Following' tab -->
                    <div class="tab-pane" id="tab-second">               
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Info</h3>                                    
                                </div>

                                <div class="panel-body">
                                    <table id="mydata" class="table datatable table-hover">
                                        <thead>
                                            <tr role="row">
                                                <th width="70" style="text-align: center">First Name</th>
                                                <th width="70" style="text-align: center">Last Name</th>
                                                <th width="60" style="text-align: center">OL</th>
                                                <th width="60" style="text-align: center">AL</th>
                                                <th width="70" style="text-align: center">Contact No.</th>
                                                <th width="100" style="text-align: center">Email</th>
                                                <th data-sortable="true" width="100" style="text-align: center">Potential Level</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="100" style="text-align: center">Handled By</th>
                                                <th width="100" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody id='table'>
                                        <form>
                                    <?php
                                   // if($posts3) {
                                        foreach($posts3 as $post){ ?>

                                        
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><?php echo $post->Fname; ?></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1+$post->Grade2+$post->Grade3; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Intake; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $post->CounsellorName; ?></td>
                                        
                                                <td style="text-align: center">
                                                <a data-toggle="modal" data-target="#myModal<?php echo $post->r_id;?>" class="btn btn-warning btn-rounded btn-sm" onclick="assignID('<?php  echo $post->r_id; ?>')">Summary</a>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Completed</button>
                                                </td>
                                            </tr>
                                        </form>
                                        
                                      

                                        <!-- First POPUP -->

                                        <div id="myModal<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                        
                                        <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                                    
                                                        <div class="panel panel-default tabs">                            
                                                            <ul class="nav nav-tabs" role="tablist">

                                                                <li class="active"><a href="#first-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 1</a></li>

                                                                <li><a href="#second-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 2</a></li>
                                                                <li><a href="#third-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 3</a></li>
                                                                <li><a href="#fourth-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 4</a></li>
                                                            </ul>

                                                            <div class="panel-body tab-content">

                                                                <div class="tab-pane active" id="first-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Summary 1:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"><?php echo $post->Summary1; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane" id="second-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary2">Enter Summary 2:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary2" id="summary2"><?php echo $post->Summary2; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane" id="third-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary3">Enter Summary 3:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary3" id="summary3"><?php echo $post->Summary3; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane" id="fourth-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary4">Enter Summary 4:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary4" id="summary4"><?php echo $post->Summary4; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="tab-pane" id="fourth-tab">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary4">Enter Summary 5:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            <input type="hidden" name="id" value=$id />
                                                                        </div>
                                                                    </div>
                                                                </div> -->


                                                            </div>
                                                            
                                                        </div> 
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                  </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                    <?php } ?>
                                    </tbody> 
                                    </table>

                                </div>
                            </div>
                            
                                         
                                            
                                        </div>    

                                        <!-- 'Completed' tab -->                                    
                                        <div class="tab-pane" id="tab-third">
                                                                                        
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Student Info</h3>                                    
                                    </div>
                                
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable table-hover">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="100" style="text-align: center">Handled By</th>
                                                <th width="200" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>
                                        <div id="completed">
                                    <form>
                                    <?php
                                    foreach($posts4 as $post){ ?>

                                        <tbody id='table'>
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><?php echo $post->Fname; ?></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $post->CounsellorName; ?></td>
                                                <td style="text-align: center">
                                                <a data-toggle="modal" data-target="#mysecondModal<?php echo $post->r_id;?>" class="btn btn-warning btn-rounded btn-sm" onclick="assignID('<?php  echo $post->r_id; ?>')">View Summary</a>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" style="background-color: white;color: #6f22b6; border: 2px solid #6f22b6; /* Purple */" onclick="registered('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Registered</button>
                                                </td>
                                            </tr>
                                            </form>

                                            <!-- POPUP -->

                                        <div id="mysecondModal<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                        <div class="row">
                                                <div class="col-md-12">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                                    
                                                        <div class="panel panel-default tabs">                            
                                                            <ul class="nav nav-tabs" role="tablist">

                                                                <li class="active"><a href="#first-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 1</a></li>

                                                                <li><a href="#second-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 2</a></li>
                                                                <li><a href="#third-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 3</a></li>
                                                                <li><a href="#fourth-tab<?php echo $post->r_id; ?>" role="tab" data-toggle="tab">Summary 4</a></li>
                                                            </ul>

                                                            <div class="panel-body tab-content">

                                                                <div class="tab-pane active" id="first-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Summary 1:</label>
                                                                        <div class="col-md-8 col-xs-12"> 

                                                                            <textarea type="text" class="form-control" style="height:100px; color: black; align-items: top;" name="summary1" id="summary1" readonly><?php echo $post->Summary1; ?></textarea>   
                                                                            
                                                                            <!-- <textarea class="form-control" rows="5" name="summary1" id="summary1" readonly><?php echo $post->Summary1; ?></textarea> -->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane" id="second-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary2">Enter Summary 2:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea type="text" class="form-control" style="height:100px; color: black; align-items: top;" name="summary2" id="summary2" readonly><?php echo $post->Summary2; ?></textarea> 
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane" id="third-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary3">Enter Summary 3:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea type="text" class="form-control" style="height:100px; color: black; align-items: top;" name="summary3" id="summary3" readonly><?php echo $post->Summary3; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane" id="fourth-tab<?php echo $post->r_id; ?>">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary4">Enter Summary 4:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea type="text" class="form-control" style="height:100px; color: black; align-items: top;" name="summary4" id="summary4" readonly><?php echo $post->Summary4; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                  </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                            
                                        </tbody>

                                        <?php } ?>
                                        </div>
                                    </table>  
                                </div>
                            </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                                            
                                        </div>
                                    </div>
                                   
                                                        
                            
                            </form>
                            
                        </div>
                    </div> 
   
                </div>
                <!-- END PAGE CONTENT WRAPPER -->

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
                        <p><strong>Press No if you want to continue work.</strong> Press Yes to logout.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/login_controller/logout') ?>" class="btn btn-danger btn-lg">Yes</a>
                            <button type= "button" class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of message box-->

        <!-- ++++++++++++++++++++++++++++++ POPUP FOR SUMMARY +++++++++++++++++++++++++++++++ -->


    

            
        
        
                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->

        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap.min.js"></script>                 
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?php echo base_url(); ?>public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/bootstrap/bootstrap-select.js"></script>

        
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/base64.js"></script>

         <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>  
 
        

      
        <!-- END TEMPLATE -->

        <!-- To switch through buckets -->
        <script type="text/javascript">

        function follow(email,r_id){
                $.ajax({             
                    type:"post",
                    url : 'inquirybutton_controller/following/',
                    data : {id:r=email},
                    success: function(data) {
                        $('#followed').html(data);
                    }
                });
                $('#'+r_id).hide();
        }

        function complete(email,r_id){
                $.ajax({             
                    type:"post",
                    url : 'inquirybutton_controller/completed/',
                    data : {id:r=email},
                    success: function(data) {
                        $('#completed').html(data);
                    }
                });
                $('#'+r_id).hide();
        }

        function registered(email,r_id){
                $.ajax({             
                    type:"post",
                    url : 'inquirybutton_controller/registered/',
                    data : {id:r=email},
                    success: function(data) {
                        $('#registered').html(data);
                    }
                });
                $('#'+r_id).hide();
        }
        </script>

 

        <script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
        </script>


       <script>
        //To be on the same tab on page reload
        $('#inquiryTabs a').click(function(e) {
          e.preventDefault();
          $(this).tab('show');
        });

        // store the currently selected tab in the hash value
        $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
          var id = $(e.target).attr("href").substr(1);
          window.location.hash = id;
        });

        // on load of the page: switch to the currently selected tab
        var hash = window.location.hash;
        $('#inquiryTabs a[href="' + hash + '"]').tab('show');
        </script> 


        <script type="text/javascript">
    
        function assignID(registerID) {  
            var registerID=registerID;
            document.getElementById("regid").value = registerID; 
        }
        </script>

        <!-- <script type="text/javascript">
        // To retain the saved value

        document.getElementById("summary1").value = getSavedValue("summary1");    // set the value to this input
        document.getElementById("summary2").value = getSavedValue("summary2");   // set the value to this input
        document.getElementById("summary3").value = getSavedValue("summary3");  // set the value to this input
        document.getElementById("summary4").value = getSavedValue("summary4"); // set the value to this input
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e){
            var id = e.id;  // get the sender's id to save it . 
            var val = e.value; // get the value. 
            localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue  (v){
            if (localStorage.getItem(v) === null) {
                return "";// You can change this to your defualt value. 
            }
            return localStorage.getItem(v);
        }
        </script> -->


        <!-- END THIS PAGE PLUGINS -->       
        
       
    <!-- END SCRIPTS -->                   
    </body>
</html>






