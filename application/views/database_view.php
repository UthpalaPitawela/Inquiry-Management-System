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
                            <li><a href="<?php echo base_url();?>index.php/manageInquiries_controller"><span class="fa fa-phone"></span> Manage Inquiries</a></li> 
                            
                        </ul>
                        
                    </li>

                    <li class="active">
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
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->

                   

                    
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
                                                            <input type="text" id="bulk_name" name="bulk_name" class="form-control"/>
                                                        </div> 
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-group">                                        
                                                    <label class="col-md-3 control-label">Date</label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                            <input type="text" name="bulk_date" id="bulk_date" class="form-control datepicker" value="">                                            
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
    <!-- END SCRIPTS -->                   
    </body>
</html>






