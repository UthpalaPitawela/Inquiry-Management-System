
<!DOCTYPE html>
<html lang="en">

    <head> 

        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        
        <!-- END META SECTION -->
         <link rel="icon" href="<?php echo base_url(); ?>EDULINK-Logo1.ico" type="image/x-icon" />               
        <!-- CSS INCLUDE --> 
             
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/theme-default.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/fontawesome/font-awesome.min.css'); ?> "/>
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>

        <!-- JS INCLUDE --> 

    </head>
    <body>
        <?php if($this->session->flashdata('message')){?>
          <div align="center" class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>

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
                                <img src="<?php echo base_url(). $propic ?>" alt="noimage"/>
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
                        <a href="#"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
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

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email / SMS</span></a>
                    </li>

                    <li>
                        <a href="#"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
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

                </ul>
                <!-- END X-NAVIGATION VERTICAL -->              
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="<?php echo base_url();?>index.php/shoutout/index">Email / SMS</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" style="border-color: #808080;" action="<?php echo base_url();?>index.php/shoutout/evaluate_campaign" 
                                method="post" name="add_campaign" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Email/SMS Dashboard</strong></h3>
                                </div>
                            
                                <div class="panel panel-default"  style="border-top-color:#1caf9a; border-top-width:2px; ">
                                    <div class="panel-heading" >
                                        <h2 class="panel-title"><strong>Create Campaign</strong></h2>
                                    </div>
                                    <div class="panel-body"> 
                                            <!-- FIRST COLUMN -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Campaign Name</label>
                                                    <div class="col-md-9">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" id="campaign_name" name="campaign_name" class="form-control"/>
                                                        </div> 
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 control-label">Date</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input type="text" name="inquiry_date" id="inquiry_date" class="form-control datepicker" value="">                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">                                        
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">                                        
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-9" >                             
                                                        <button type="submit" name="evaluate" style="background-color:#1caf9a; border-color:#1caf9a; font-size: 14;" class="btn btn-primary" 
                                                        onclick="update_campaign()">Evaluate Contacts </button>
                                                    </div>
                                                </div>
                                                                                          
                                            </div>
                                            <!-- SECOND COLUMN -->
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Type</label>
                                                    <div class="col-md-9">                                        
                                                        <select name="inquiry_type" id="inquiry_type" class="form-control select">
                                                            <option>Select Type</option>
                                                            <option>Walk-in</option>
                                                            <option>Call</option>
                                                            <option>E-mail</option>
                                                            <option>SMS</option>
                                                            <option>Bulk</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Course</label>
                                                    <div class="col-md-9">                                        
                                                        <select name="course" id="course" class="form-control select">
                                                            <option>Select Course</option>
                                                            <option>Dual Certificate Program </option>
                                                            <option>    International Foundation Programme  </option>
                                                            <option>HND in Business </option>
                                                            <option>    HND in Computer Science </option>
                                                            <option>Advanced Diploma in Information Security & Ethical Hacking</option>
                                                            <option>    Advanced Diploma in Multimedia & Animation  </option>
                                                            <option>BA (Hons) Accounting & Finance</option>
                                                            <option>    BA (Hons) International Business    </option>
                                                            <option>BA (Joint Hons) Business & Marketing</option>
                                                            <option>    BA (Joint Hons) Business & Entrepreneurship </option>
                                                            <option>BSc (Hons) Computing</option>
                                                            <option>General MBA</option>
                                                            <option>    Executive MBA   </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Status</label>
                                                    <div class="col-md-9">                                        
                                                        <select name="inquiry_status" id="inquiry_status" class="form-control select">
                                                            <option>Select Status</option>
                                                            <option>Pending</option>
                                                            <option>Following</option>
                                                            <option>Direct Admission</option>
                                                            <option>Inquiry Admission</option>
                                                            <option>Unassigned</option>
                                                            <option>Direct Admission Offer Sent</option>
                                                            <option>Indirect Admission Offer Sent</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Selected Contacts</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" readonly value=""/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>  

                    <!-- END PAGE CONTENT WRAPPER --> 

                    <!-- PAGE CONTENT WRAPPER --> 
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START FORM1 -->
                            <form class="form-horizontal" style="border-color:#808080;">
                            <div class="panel panel-default"   style="border-top-color:#1caf9a; border-top-width:2px; " >
                                <div class="panel-heading">
                                    <h2 class="panel-title"><strong>SMS</strong></h2> 
                                </div>
                                <div class="panel-body"> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Campaign</label>
                                            <div class="col-md-9">                                        
                                                <select class="form-control select">
                                                    <option>Select Campaign</option>
                                                    
                                                </select>
                                            </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">SMS Number</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control"/>
                                                </div> 
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Text Message</label>
                                        <div class="col-md-9 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" placeholder="Text message body"></textarea>
                                        </div>
                                    </div>        
                                    
                                    <div class="form-group">                                        
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9" >                             
                                                    <button style="background-color:#1caf9a; border-color:#1caf9a; font-size: 14;" class="btn btn-primary">Send SMS</button>
                                                </div>
                                    </div>                                                         
                                </div>
                            </div>
                            </form>
                            <!-- END FORM1 -->                       
                        </div>
                        <div class="col-md-6">
                            <!-- START FORM2 -->
                            <form class="form-horizontal" style="border-color: #808080;">
                            <div class="panel panel-default"   style="border-top-color:#1caf9a; border-top-width:2px; ">
                                <div class="panel-heading">
                                    <h2 class="panel-title"><strong>Email</strong></h2> 
                                </div>
                                <div class="panel-body"> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Campaign</label>
                                            <div class="col-md-9">                                        
                                                <select class="form-control select">
                                                    <option>Select Campaign</option>
                                                    
                                                </select>
                                            </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control"/>
                                                </div> 
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Subject</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" class="form-control"/>
                                                </div> 
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Content</label>
                                        <div class="col-md-9 col-xs-12">                                            
                                            <textarea class="form-control" rows="5" placeholder="Email message body">Email message body</textarea>
                                        </div>
                                    </div>        
                                    <div class="form-group">                                        
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9" >                             
                                                    <button style="background-color:#1caf9a; border-color:#1caf9a; font-size: 14;" class="btn btn-primary">Send Email</button>
                                                </div>
                                    </div>                                                          
                                </div>
                            </div>
                            </form>
                            <!-- END FORM2 --> 
                        </div>                    
                    </div>

                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
               
        
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
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>        
        <!-- END TEMPLATE -->

        <!-- START MyJS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/shoutout.js"></script>        
        <!-- END MyJS -->

    <!-- END SCRIPTS -->                   
    </body>
</html>






