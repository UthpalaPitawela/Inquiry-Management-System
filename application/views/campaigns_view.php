<!DOCTYPE html>
<html lang="en">

    <head> 

        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        
        <!-- END META SECTION -->
        <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />            
        <!-- CSS INCLUDE --> 
             
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/theme-default.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/fontawesome/font-awesome.min.css'); ?> "/>

        <!-- ALERT CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
        
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <!-- JS INCLUDE --> 

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>

        <!-- ALERT -->
        <script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>
        

        <style>
       input[type="text"][disabled] {
            color: black;
        }
        </style>

    </head>
    <body>

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
                        
                        <a href="<?php echo base_url();?>index.php/admissions_controller"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
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
                    <?php  } ?>       

                    
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
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="<?php echo base_url();?>index.php/Campaign_Controller/index">Campaigns</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" style="border-color: #808080;" enctype="multipart/form-data">
                                
                                <div class="panel panel-default"  style="border-top-width:2px; ">
                                    <div class="panel-heading" >

                                        <h2 class="panel-title"><strong>Campaigns</strong></h2>
                                        <button type="button" class="btn btn-info pull-right" style="border-radius: 6px" data-toggle="modal" data-placement="top" data-tooltip="tooltip" href="#newModal"><span class="glyphicon glyphicon-plus"></span>Create New Campaign</button>

                                        
                                            <!-- Data Modal for new Campaign -->
                                                  <div id="newModal" class="modal fade">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title">Create Campaign</h4>
                                                          </div>
                                                          <br>
                                                          
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    
                                                                    <form class="form-horizontal" >

                                                            <!-- FIRST COLUMN -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Campaign Name</label>
                                                                    <div class="col-md-9">                                            
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                                            <input type="text" id="campaign_name" name="campaign_name" class="form-control" required="" />
                                                                        </div> 
                                                                    </div>
                                                                    
                                                                </div>

                                                                <div class="form-group">                                        
                                                                    <label class="col-md-3 control-label">Date</label>
                                                                    <div class="col-md-9">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                            <input type="text" name="inquiry_date" id="inquiry_date" class="form-control datepicker" value="" required="" />                                            
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
                                                                                              
                                                            </div>
                                                            <!-- SECOND COLUMN -->
                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Type</label>
                                                                    <div class="col-md-9">                                        
                                                                        <select name="inquiry_type" id="inquiry_type" class="form-control select">
                                                                            <option value="">Select Type</option>
                                                                            <option >Walk-in</option>
                                                                            <option >Call</option>
                                                                            <option >Email</option>
                                                                            <option >SMS</option>
                                                                            <option >Bulk</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Status</label>
                                                                    <div class="col-md-9">                                        
                                                                        <select name="inquiry_status" id="inquiry_status" class="form-control select">
                                                                            <option value="">Select Status</option>
                                                                            <option >Pending</option>
                                                                            <option >Following</option>
                                                                            <option >Registered</option>
                                                                            <option >Completed</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                
                                                            </div>
                                                        
                                                    </div>
                                                </div>

                                                        </div>

                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                <button type="button" id="evaluate" class="btn btn-primary" onclick="update_campaign()">Evaluate Contacts </button>
                                                        </div> 
                                                        </form>
                                                        
                                                        </div>
                                                    </div>
                                              </div> 
                                              <!-- End of Data Modal for Campaign -->
                                        

                                        
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-11">
                                        <!-- Start Campaigns Table --> 
                                            <div style="overflow-y:scroll; height:450px;">
                                            <table id="mydata" class="table datatable table-hover">
                                                <thead>
                                                    <tr role="row">
                                                        <th width="100" style="text-align: center"></th>
                                                        <th width="150" style="text-align: center">Campaign Name</th>
                                                        <th width="150" style="text-align: center">Date Created</th>
                                                        <th width="200" colspan="2" style="text-align: center;">Selection</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                <form>
                                            <?php
                                           
                                                    foreach($campaigns as $campaign){ ?>
                                                        <tr id="<?php  echo $campaign->campaign_id; ?>">
                                                            <td style="text-align: center">
                                                            <button type="button" class="btn btn-success btn-sm" style="border-radius: 25px" data-toggle="modal" data-placement="top" title="View Campaign Details" data-tooltip="tooltip" href="#viewModal<?php echo $campaign->campaign_id;?>" onclick="getDetails('<?php  echo $campaign->campaign_id; ?>')"><span class="glyphicon glyphicon-plus"></span></button> 
                                                            </td>
                                                            <td style="text-align: center"><?php echo $campaign->campaign_name; ?></td>
                                                            <td style="text-align: center"><?php echo $campaign->date; ?></td>
                                                            <td style="text-align: center"><?php echo $campaign->inquiry; ?></td>
                                                            <td style="text-align: center"><?php echo $campaign->status; ?></td>
                                                        </tr>
                                                </form>
                                            <?php } ?>


                                                </tbody> 
                                            </table>
                                            <div> <!-- scroll bar -->
                                            <!-- End Campaigns Table -->

                                                     <!-- Data Modal for each Campaign -->
                                                  <div id="viewModal<?php echo $campaign->campaign_id; ?>" class="modal fade">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title"><?php echo $campaign->campaign_name; ?></h4>
                                                          </div>
                                                          <br>
                                                          
                                                        <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                
                                                                <form class="form-horizontal">

                                                                    <input type="text" name="campid" id="campid" value="<?php echo $campaign->campaign_id; ?>" hidden="hidden" />

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Selected Contacts</label>
                                                                        <div class="col-md-3">
                                                                            <input type="text" class="form-control" readonly value=""/>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div id="campaign_table" class="table-responsive" style="display:none">    
                                                                    <table class="table datatable table-hover ">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th width="50" style="text-align: center">First Name</th>
                                                                                <th width="50" style="text-align: center">Last Name</th>
                                                                                <th width="50" style="text-align: center">Email</th>
                                                                                <th width="50" style="text-align: center">Contact No</th>
                                                                            </tr>
                                                                        </thead>

                                                                         
                                                                    </table>
                                                                    </div>
                                                                      
                                                                    <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>                               
                                                                
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                        </div>
                                                        
                                                        </div>
                                                    </div>
                                              </div> 
                                              <!-- End of Data Modal for Campaign -->
                                           
                                        </div>      
                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>  

                    <!-- END PAGE CONTENT WRAPPER --> 

                    <!-- PAGE CONTENT WRAPPER --> 
                    

                    
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

        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/base64.js"></script>

        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="<?php echo base_url(); ?>public/js/settings.js"></script> -->
        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>        
        <!-- END TEMPLATE -->

        <script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
        </script>

        <script>
            function update_campaign() {
                
                $campaign_name = $('#campaign_name').val();
                $date = $('#inquiry_date').val();
                $type = $('#inquiry_type').val();
                $status = $('#inquiry_status').val();
                
                
                if ($type!=="Select Type" || $status!=="Select Status"){

                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url();?>index.php/Campaign_Controller/evaluate_campaign",
                        dataType: 'json',
                        data: {name: $campaign_name, date: $date, type: $type ,status: $status},
                            success: function (data) {
                                if (data.status == "success") {
                                    $('#newModal').modal('hide');
                                    swal({title: data.info, text: "You clicked the button!", type: "success"},
                                           function(){
                                               var url = "<?php echo base_url();?>index.php/Campaign_Controller/send_campaign/"+data.id;
                                               window.location.href = url;
        
                                           }
                                        );
                                }else{
                                    swal(data.info);
                                }
                                                                                                    
                            },
                            error: function (error) {
                                alert("Error in connection");
                            }
                    }); 
                                                                                                
                }else{
                    alert("Select a Category");
                }
                    
            }
                                                                               
        </script>

        <script type="text/javascript">
    
        function getDetails(campID) {  
            var campID=campID;
            $.ajax({
     
                type:"post",
                url : "<?php echo base_url();?>index.php/Campaign_Controller/get_campaignDetails",
                data : {id: campID},
                dataType: 'json',
                success: function (data) {
                    var trHTML = '';
                    $.each(data, function (i, item) {
                        trHTML += '<tr><td>' + item.Fname + '</td><td>' + item.Lname + '</td><td>' + item.Email + '</td><td>' + item.Contactno + '</td></tr>';
                    });
                    $('#campaign_table').append(trHTML);
                            }
                        })
 
        }
        </script>


        <script type="text/javascript">
    
        function assignID(campID) {  
            var campID=campID;
            document.getElementById("campid").value = campID; 
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

        
    <!-- END SCRIPTS -->                   
    </body>
</html>






