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
    $status = $_SESSION["status"];
    $lname = $_SESSION["last_username"];

    ?>
        

        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <?php if($status==0){   ?>
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller">Edulink IMS</a>
                        <?php }  ?>
                        <?php if($status==3){ ?>
                        <a href="<?php echo base_url('index.php/Counsellor_Profile_Controller/index/'. $name."/" .$lname);?>">Edulink IMS</a>
                        <?php }  ?>
                        
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
                        <?php if($status==0){   ?>
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>
                        <?php }  ?>
                        <?php if($status==3){ ?>
                        <a href="<?php echo base_url('index.php/Counsellor_Profile_Controller/index/'. $name."/" .$lname);?>"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>  
                        <?php }  ?>                             
                    </li>                    
                    <li class="xn-openable">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li>

                            <?php if($status==0){ ?>
                            <a href="<?php echo base_url();?>index.php/manageInquiries_controller"><span class="fa fa-phone"></span> Manage Inquiries</a>
                            <?php  } ?>

                            <?php if($status==3){ ?>
                            <a href="<?php echo base_url();?>index.php/manageInquiriesCoun_controller"><span class="fa fa-phone"></span> Manage Inquiries</a>
                            <?php  } ?>

                            </li> 
                            
                        </ul>
                        
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/Database"><span class="fa fa-database"></span> <span class="xn-text">Databases</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Campaign_Controller/index"><span class="fa fa-th-list"></span> <span class="xn-text">Campaigns</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email/SMS</span></a>
                    </li>

                    <li>
                        <?php if($status==0){ ?>
                        <a href="<?php echo base_url();?>index.php/admissions_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                        <?php  } ?>

                        <?php if($status==3){ ?>
                        <a href="<?php echo base_url();?>index.php/admissionsCoun_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                        <?php  } ?>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/addStudentAcc_controller"><span class="fa fa-user"></span> <span class="xn-text">Student Profiles</span></a>   
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
                    <li><a href="<?php echo base_url();?>index.php/Database">Databases</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                    	<!-- FORM -->
                        <div class="col-md-5">
                            
                            <form class="form-horizontal" style="border-color: #808080;" action="<?php echo base_url();?>index.php/database/bulk_input" method="post" name="add_bulk" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Bulk Input</strong></h3>
                                </div>
                            
                                <div class="panel panel-default"  style="border-top-color:#2b73ef; border-top-width:2px; ">
                                    <div class="panel-heading" >
                                        <h2 class="panel-title"><strong>Create Bulk</strong></h2>
                                 	</div>
                                    <div class="panel-body"> 
                                         
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Bulk Name</label>
                                                    <div class="col-md-9">                                            
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                            <input type="text" id="bulk_name" name="bulk_name" class="form-control" required/>
                                                        </div> 
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 control-label">Date</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input type="text" name="bulk_date" id="datepicker" value="<?php echo date('d-m-Y'); ?>" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control" required>                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">                                        
                                                    <label class="col-md-3 control-label">Bulk Input</label>
                                                    <div class="col-md-6">                                            
                                                        <input type="file"  name="file" >
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="panel-footer">
                                   					 <button type="reset" class="btn btn-default">Clear Form</button>                                    
                                   					 <button type="submit" name="create_bulk" style="background-color:#2b73ef; border-color:#2b73ef; font-size: 14;" class="btn btn-primary pull-right" >Create Bulk</button>
                                				</div>
                                                                                          
                                            </div>
                                                                                    
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        <!-- END FORM -->
                        <div class="col-md-7">
                            <form class="form-horizontal" style="border-color: #808080;" action="<?php echo base_url();?>index.php/database/bulk_input" method="post" name="add_bulk" enctype="multipart/form-data">
                                <div class="panel panel-default"  style="top:39px; border-top-color:#2b73ef; border-top-width:2px; "> 
                                	<div class="panel-heading" >
                                        <h2 class="panel-title"><strong>View Bulk Details</strong></h2>
                                 	</div>
	                                    <div class="panel-body"> 
	                                            <!-- FIRST COLUMN -->
	                                            <div class="col-md-12">
	                                                <div class="form-group">
	                                                    <label class="col-md-2 control-label">Bulk Name</label>
                                                    	<div class="col-md-9">                                        
	                                                        <select name="bulk_type" id="bulk_type" class="form-control select">
	                                                            <option>Select Bulk</option>
	                                                            <option>Walk-in</option>
	                                                            <option>Call</option>
	                                                            <option>E-mail</option>
	                                                            <option>SMS</option>
	                                                            <option>Bulk</option>
	                                                        </select>
                                                    	</div>
	                                                    
	                                                </div>                                               
	                                            </div>
	                                                                                    
	                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        
                    </div> 


                    <!-- END PAGE CONTENT WRAPPER --> 

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
        
        
        
        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script> 

        <script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
        </script>  

        <script>
        //To select date of insertion
          $( function() {
            $( "#datepicker" ).datepicker();
          } );
        </script>     
        
    <!-- END SCRIPTS -->                   
    </body>
</html>






