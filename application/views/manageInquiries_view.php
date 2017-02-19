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

        <style type="text/css">
            input:focus{
                outline: none;
            }
            *:focus {
                outline: none;
            }
        </style>

        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script> 
        <!-- JS INCLUDE --> 

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
                        <a href="index.html">Edulink IMS</a>
                        
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url(). $propic ?>" alt="Viduni"/>
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

                    <li>
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                    <li class="xn-openable active">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li class="active"><a href="<?php echo base_url();?>index.php/ManageInquiries_controller"><span class="fa fa-phone"></span> Manage Inquiries</a></li> 
                            
                        </ul>
                        
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Database"><span class="fa fa-database"></span> <span class="xn-text">Databases</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email/SMS</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Admissions_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
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
                    </li>  -->

                    <li>
                        <a href="<?php echo base_url();?>index.php/Manager_Settings_Controller"><span class="fa fa-cogs"></span> <span class="xn-text">Settings</span></a>  
                    </li>     
                    <?php } ?>          

                    
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
                        <a href="<?php echo base_url();?>index.php/Login_controller/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
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

                            <!-- Start of Pending tab -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Info</h3>                               
                                </div>

                                <div class="panel-body">
                                    <table id="customers2" class="table datatable table-hover">
                                        <thead>
                                            <tr>
                                                <th width="50" style="text-align: center">First Name</th>
                                                <th width="70" style="text-align: center">Last Name</th>
                                                <th width="50" style="text-align: center">OL</th>
                                                <th width="50" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="150" style="text-align: center">Email</th>
                                                <th width="80" style="text-align: center">Potential Date</th>
                                                <th width="120" style="text-align: center">Handled By</th>
                                                <!-- <th width="300" style="text-align: center">Actions</th> -->
                                            </tr>
                                        </thead>
                                    <tbody id='table'>
                                        
                                    <?php

                                    foreach($posts3 as $postt){ ?>
                                            <tr id="<?php  echo $postt->r_id; ?>">
                                               <!-- <form method="post" action="<?php echo base_url();?>index.php/ManageInquiries_controller/updateChanges" >  -->
                                            
                                                <!-- <input type="hidden" style="border:none; text-align: center;" value="<?php echo $postt->r_id; ?>" id="id" name="rid" /> -->
                                                <td style="text-align: center"><a href="<?php echo base_url('index.php/EditRecords_controller/index/'.$postt->r_id);?>"><?php echo $postt->Fname; ?></a></td>
                                                <td style="text-align: center"><?php echo $postt->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $postt->OL; ?></td>
                                                <td style="text-align: center"><?php echo $postt->Grade1+$postt->Grade2+$postt->Grade3; ?></td>
                                                <td style="text-align: center"><?php echo $postt->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $postt->Email; ?></td>
                                                <td style="text-align: center"><?php echo $postt->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $postt->CounsellorName; ?></td>
                                                <!-- <td style="text-align: center">
                                            
                                                <input type="submit" name="submit" class="btn btn-primary btn-rounded btn-sm" data-tooltip="tooltip" title="Update Changes" data-toggle="top" value="Save" />
                                                <button type="button" class="btn btn-info btn-rounded btn-sm" onclick="follow('<?php echo $postt->Email; ?>','<?php echo $postt->r_id; ?>')">Following</button>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $postt->Email; ?>','<?php echo $postt->r_id; ?>')">Completed</button>
                                                </td> -->
                                          <!--   </form> -->
                                            </tr>
                                            
                            
                                        </tbody>
                                        <?php } ?>
                                    </table>                                    
                                    
                                </div>
                            </div>      
                
                        </div> 
                        </div> <!-- End of tab-first -->


                        <!-- Start of Following Tab  -->
                        <div class="tab-pane" id="tab-second">               
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Info</h3>                                    
                                </div>

                            <!-- Start of vertical tabs -->
                            <div class="panel panel-default tabs nav-tabs-vertical">  
                            <div class = "col-md-12">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab22" data-toggle="tab"><strong><font size="4" color="red">High</font></strong></a></li>
                                    <li><a href="#tab23" data-toggle="tab"><strong><font size="4" color="#f9e504">Medium</font></strong></a></li>
                                    <li><a href="#tab24" data-toggle="tab"><strong><font size="4" color="#0ed11b">Low</font></strong></a></li>
                                </ul>                    


                        <div class="panel-body tab-content">

                        <!-- +++++++++++++++++++++++++ Following (High) ++++++++++++++++++++++++  -->
                        <div class="tab-pane active" id="tab22" >
                        <div class="col-md-12">
                            
                                    <table id="mydata" class="table datatable table-hover">
                                        <thead>
                                            <tr role="row">
                                                <th width="70" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="60" style="text-align: center">OL</th>
                                                <th width="60" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="150" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="250" style="text-align: center">Handled By</th>
                                                <th width="300" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <form>
                                    <?php
                                   
                                        foreach($following->result_array() as $post){ 

                                            date_default_timezone_set('Asia/Colombo');

                                            $today = date('Y-m-d ');
                                            $thisyear=date('Y');
                                            $thismonth = date('m'); 

                                            $sepintake = "$thisyear-09-01";
                                            $januaryforcompare= "$thisyear-01-31";
                                            $septemberforcompare="$thisyear-09-30";
                                            $nextyear=$thisyear+1;
                                            $nextjanuaryforcompare="$nextyear-01-31";
                                            
                                            $sep = date('Y-m-d',strtotime($sepintake));
                                            $thisjanend = date('Y-m-d',strtotime($januaryforcompare));
                                            $thissepend=date('Y-m-d',strtotime($septemberforcompare));
                                            $nextjan=date('Y-m-d',strtotime($nextjanuaryforcompare));

                                            $janintake = "2010-01-12 13:57:01";
                                           // $sep = date('m',strtotime($sepintake));

                                            $potentialdate= $post['Pdate'];

if(   ( strtotime($today) > strtotime($potentialdate) ) || ( (strtotime($thissepend) > strtotime($potentialdate)) && (strtotime($thisjanend) < strtotime($today))    ) || (  (strtotime($thissepend) < strtotime($today)) && (strtotime($nextjan) > strtotime($potentialdate))  ) || ( (strtotime($thisjanend) > strtotime($potentialdate)) )   ){


?>
                                                <tr id="<?php  echo $post['r_id']; ?>">
                                                <td style="text-align: center"><a href="<?php echo base_url('index.php/ManageInquiries_controller/viewSummary/'. $post['r_id']);?>"><?php echo $post['Fname']; ?></a></td>
                                                <td style="text-align: center"><?php echo $post['Lname']; ?></td>
                                                <td style="text-align: center"><?php echo $post['OL']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Grade1']+$post['Grade2']+$post['Grade3']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Contactno']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Email']; ?></td>
                                                <td style="text-align: center"><?php echo $post['Pdate']; ?></td>
                                                <td style="text-align: center"><?php echo $post['CounsellorName']; ?></td>
                                        
                                                <td style="text-align: center">
                                                <!-- <a data-toggle="modal" data-target="#myModal<?php echo $post->r_id;?>" class="btn btn-warning btn-rounded btn-sm" onclick="assignID('<?php  echo $post->r_id; ?>')">Summary</a> -->
                                                <a class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#myModal<?php echo $post['r_id'];?>" data-tooltip="tooltip" data-placement="top" title="Call Summary" onclick="assignID('<?php  echo $post['r_id']; ?>')"><span class="glyphicon glyphicon-earphone"></span></a>
                                                <button class="btn btn-danger btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="SMS" data-tooltip="tooltip" data-target="#myModal1<?php echo $post['r_id'];?>" onclick="assignID('<?php  echo $post['r_id']; ?>')"><span class="glyphicon glyphicon-phone red"></span></button>
                                                <button class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="Email" data-tooltip="tooltip" data-target="#myModal2<?php echo $post['r_id'];?>" onclick="assignID('<?php  echo $post['r_id']; ?>')"><span class="glyphicon glyphicon-envelope" style="color:#1E90FF"></span></button>
                                                <button class="btn btn-warning btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="Other" data-tooltip="tooltip" data-target="#myModal3<?php echo $post['r_id'];?>" onclick="assignID('<?php  echo $post['r_id']; ?>')"><span class="glyphicon glyphicon-plus" style="color:orange"></span></button>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post['Email']; ?>','<?php echo $post['r_id']; ?>')">Completed</button>
                                                </td>
                                            </tr>
                                        </form>
                                        
                                      <!-- POPUP for call summary -->
                                      <div id="myModal<?php echo $post['r_id']; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post['r_id']; ?>" hidden="hidden" />
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Call Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for SMS -->
                                      <div id="myModal1<?php echo $post['r_id']; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post['r_id']; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Number:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post['Contactno']; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="sms1">Enter SMS content:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="sms1" id="sms1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Send Text Message</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for Email -->
                                      <div id="myModal2<?php echo $post['r_id']; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post['r_id']; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Email:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post['Email']; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="sms1">Enter Email body:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="sms1" id="sms1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Send Email</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for call summary -->
                                      <div id="myModal3<?php echo $post['r_id']; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post['r_id']; ?>" hidden="hidden" />
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>  





<?php

                                            }


                                     } ?>
                                    </tbody> 
                                    </table>

                        </div>
                        </div>              

                        <!-- +++++++++++++++++++++++++ Following (Medium) ++++++++++++++++++++++++  -->
                        <div class="tab-pane" id="tab23" >
                                <div class="col-md-12">
                                    <table id="mydata" class="table datatable table-hover">
                                        <thead>
                                            <tr role="row">
                                                <th width="70" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="60" style="text-align: center">OL</th>
                                                <th width="60" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="150" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="250" style="text-align: center">Handled By</th>
                                                <th width="300" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <form>
                                    <?php
                                   
                                        foreach($posts1 as $post){ ?>

                                        
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><a href="<?php echo base_url('index.php/ManageInquiries_controller/viewSummary/'. $post->r_id);?>"><?php echo $post->Fname; ?></a></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1+$post->Grade2+$post->Grade3; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $post->CounsellorName; ?></td>
                                        
                                                <td style="text-align: center">
                                                <a class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#myModal<?php echo $post->r_id;?>" data-tooltip="tooltip" data-placement="top" title="Call Summary" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-earphone"></span></a>
                                                <button class="btn btn-danger btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="SMS" data-tooltip="tooltip" data-target="#myModal1<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-phone red"></span></button>
                                                <button class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="Email" data-tooltip="tooltip" data-target="#myModal2<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-envelope" style="color:#1E90FF"></span></button>
                                                <button class="btn btn-warning btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="Other" data-tooltip="tooltip" data-target="#myModal3<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-plus" style="color:orange"></span></button>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Completed</button>
                                                </td>
                                            </tr>
                                        </form>
                                        
                                      <!-- POPUP for call summary -->
                                      <div id="myModal<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Call Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for SMS -->
                                      <div id="myModal1<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Number:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post->Contactno; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="sms1">Enter SMS content:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="sms1" id="sms1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Send Text Message</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for Email -->
                                      <div id="myModal2<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Email:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post->Email; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="sms1">Enter Email body:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="sms1" id="sms1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Send Email</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for call summary -->
                                      <div id="myModal3<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                    <?php } ?>
                                    </tbody> 
                                    </table>

                                </div>
                            </div> <!-- End of Following Medium -->


                        <!-- +++++++++++++++++++++++++ Following (Low) ++++++++++++++++++++++++  -->
                        <div class="tab-pane" id="tab24" >
                                <div class="col-md-12">
                                    <table id="mydata" class="table datatable table-hover">
                                        <thead>
                                            <tr role="row">
                                                <th width="70" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="60" style="text-align: center">OL</th>
                                                <th width="60" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="150" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="250" style="text-align: center">Handled By</th>
                                                <th width="300" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <form>
                                    <?php
                                   // if($posts3) {
                                        foreach($posts2 as $post){ ?>

                                        
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><a href="<?php echo base_url('index.php/ManageInquiries_controller/viewSummary/'. $post->r_id);?>"><?php echo $post->Fname; ?></a></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1+$post->Grade2+$post->Grade3; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center"><?php echo $post->CounsellorName; ?></td>
                                        
                                                <td style="text-align: center">
                                                <a class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#myModal<?php echo $post->r_id;?>" data-tooltip="tooltip" data-placement="top" title="Call Summary" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-earphone"></span></a>
                                                <button class="btn btn-danger btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="SMS" data-tooltip="tooltip" data-target="#myModal1<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-phone red"></span></button>
                                                <button class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="Email" data-tooltip="tooltip" data-target="#myModal2<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-envelope" style="color:#1E90FF"></span></button>
                                                <button class="btn btn-warning btn-rounded btn-sm" data-toggle="modal" data-placement="top" title="Other" data-tooltip="tooltip" data-target="#myModal3<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-plus" style="color:orange"></span></button>
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Completed</button>
                                                </td>
                                            </tr>
                                        </form>
                                        
                                      
                                    <!-- POPUP for call summary -->
                                      <div id="myModal<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateCallSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Call Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for SMS -->
                                      <div id="myModal1<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Number:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post->Contactno; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="sms1">Enter SMS content:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="sms1" id="sms1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Send Text Message</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for Email -->
                                      <div id="myModal2<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Email:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post->Email; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="sms1">Enter Email body:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="sms1" id="sms1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Send Email</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for call summary -->
                                      <div id="myModal3<?php echo $post->r_id; ?>" class="modal fade">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow-Up Summary</h4>
                                              </div>
                                              <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSummary">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                    <?php } ?>
                                    </tbody> 
                                    </table>

                                </div>
                        </div> <!-- End of Following Low -->
                            
                                         
                                            
                        </div> 
                        </div>                        
                            <!-- END VERTICAL TABS -->
                            </div>
                        </div>                     
                    </div> <!-- End of tab-second -->







                        <!-- Start of 'Completed' tab -->                                    
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
                                                <!-- <a data-toggle="modal" data-target="#mysecondModal<?php echo $post->r_id;?>" class="btn btn-warning btn-rounded btn-sm" onclick="assignID('<?php  echo $post->r_id; ?>')">View Summary</a> -->
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" style="background-color: white;color: #6f22b6; border: 2px solid #6f22b6; /* Purple */" onclick="registered('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Registered</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <?php } ?>
                                        </form>
                                        </div>
                                    </table>  
                                </div>
                            </div>
                            </div>
                            <!-- End of completed tab (tab-third) -->




                    </div> <!-- End of tab content -->
                                    </div>
                                </form>
                            </div>
                        </div> <!-- End of row  -->
                
                    
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
                            <a href="<?php echo base_url('index.php/Login_controller/logout') ?>" class="btn btn-danger btn-lg">Yes</a>
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

        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>


        <script type="text/javascript"> 
        //For the tooltip
        $(document).ready(function() {
            $('body').tooltip({
                selector: "[data-tooltip=tooltip]",
                container: "body"
            });
        });
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






