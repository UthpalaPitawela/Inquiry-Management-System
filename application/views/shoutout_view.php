
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

         <!-- ALERT CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
        
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>

        <!-- JS INCLUDE --> 
        <!-- ALERT -->
        <script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>
        

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
    $status1 = $_SESSION["status"];
    $lname = $_SESSION["last_username"];

    ?>

               
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <?php if($status1==0){   ?>
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller">Edulink IMS</a>
                        <?php }  ?>
                        <?php if($status1==3){ ?>
                        <a href="<?php echo base_url('index.php/Counsellor_Profile_Controller/index/'. $name."/" .$lname);?>">Edulink IMS</a>
                        <?php }  ?>
                        
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url(). $propic ?>" alt="noimage"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name ?></div>
                                <div class="profile-data-title"><?php if($status1==0){echo 'Manager';}
                                elseif($status1==2){echo 'Admissions Officer';}
                                elseif($status1==3){echo 'Counsellor';}   ?></div> 
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url();?>index.php/profile_controller" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-cog"></span></a>
                            </div>
                        </div>                                                                        
                    </li>

                    <li>
                        <?php if($status1==0){   ?>
                        <a href="<?php echo base_url();?>index.php/Manager_Profile_Controller"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>
                        <?php }  ?>
                        <?php if($status1==3){ ?>
                        <a href="<?php echo base_url('index.php/Counsellor_Profile_Controller/index/'. $name."/" .$lname);?>"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>  
                        <?php }  ?>                        
                    </li>                    
                    <li class="xn-openable">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li>

                            <?php if($status1==0){ ?>
                            <a href="<?php echo base_url();?>index.php/manageInquiries_controller"><span class="fa fa-phone"></span> Manage Inquiries</a>
                            <?php  } ?>

                            <?php if($status1==3){ ?>
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

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/shoutout/index"><span class="fa fa-envelope"></span> <span class="xn-text">Email/SMS</span></a>
                    </li>

                    <li>
                        <?php if($status1==0){ ?>
                        <a href="<?php echo base_url();?>index.php/admissions_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                        <?php  } ?>

                        <?php if($status1==3){ ?>
                        <a href="<?php echo base_url();?>index.php/admissionsCoun_controller"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                        <?php  } ?>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/addStudentAcc_controller"><span class="fa fa-user"></span> <span class="xn-text">Student Profiles</span></a>   
                    </li>

                    
                    <?php if($status1==0){ ?>
                    <li class="xn-title">Administration</li>
                    <li >
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
                    <li><a href="<?php echo base_url();?>index.php/shoutout/index">Email / SMS</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                <div id="loading_image" style="display:none;position:absolute;top:3%;left:35%;padding:2px;"><img src="<?php echo base_url('public/img/waiting.gif'); ?>" width="90" height="90"/>Loading..</div>

                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" style="border-color: #808080;" action="<?php echo base_url();?>index.php/shoutout/evaluate_campaign" 
                                method="post" name="add_campaign" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Email/SMS Dashboard</strong></h3>
                                </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                <!-- ++++++++++++++++++++++++ Tabbed page  ++++++++++++++++++++++ -->
                                                <form class="form-horizontal">
                                                                                
                                                    <div class="panel panel-default tabs">                            
                                                        <ul class="nav nav-tabs" id="emailSMS_tabs" role="tablist">
                                                            <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><strong>SMS</strong></a></li>
                                                            <li><a href="#tab-second" role="tab" data-toggle="tab"><strong>Email</strong></a></li>
                                                        </ul>


                                        <div class="panel-body tab-content">
                                            <div class="tab-pane active" id="tab-first">
                                                           

                                            <div class="col-md-12">

                                                <!-- Start of SMS tab -->
                                                <div class="panel panel-default">
                                                    
                                                    <div class="panel-body"> 
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">SMS Number</label>
                                                                    <div class="col-md-9">                                            
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                                            <input type="text" id="sms_number" name="sms_number" class="form-control" placeholder="eg: 94719954234"/>
                                                                        </div> 
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Text Message</label>
                                                                <div class="col-md-9 col-xs-12">                                            
                                                                    <textarea class="form-control" rows="5" id="text_body" name="text_body" placeholder="Text message body"></textarea>
                                                                </div>
                                                            </div>        
                                                            
                                                            <div class="form-group">                                        
                                                                        <label class="col-md-3 control-label"></label>
                                                                        <div class="col-md-9" >                             
                                                                            <button type="button" onclick="check_sms()" class="btn btn-primary">Send SMS</button>
                                                                        </div>
                                                                       
                                                                        <script>
                                                                                        
                                                                            function check_sms() {
                                                                                
                                                                                var recipient = $('#sms_number').val();
                                                                                var message = $('#text_body').val();
                                                                                 
                                                                                if ( recipient!=="") {
                                                                                    if(message!==""){
                                                                                        $('#loading_image').show();
                                                                                        $.ajax({
                                                                                            type: "get",
                                                                                            url: "<?php echo base_url(); ?>" +"index.php/sms/Send_sms/send/"+recipient+"/"+message,
                                                                                           
                                                                                            success: function (msg) {
                                                                                                $('#loading_image').hide();
                                                                                               // if(msg.status == "success"){
                                                                                                    swal("SMS sent successfully", "You clicked the button!", "success");
                                                                                               // }else{
                                                                                                  //  swal('Oops...','An error occured','error');
                                                                                               // }
                                                                                            },
                                                                                            error: function (error) {
                                                                                                $('#loading_image').hide();
                                                                                                alert("Something went wrong");
                                                                                            }
                                                                                        }); 
                                                                                                    

                                                                                    }else{
                                                                                        alert("Please fill the required field");
                                                                                    } 
                                                                                }else{
                                                                                    alert("Choose either a campaign or a recipient \n Note: Cannot choose both");
                                                                                }
                                                                            }        
                                                                                    

                                                                        </script> 
                                                            </div>                                                         
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            </div> <!-- End of tab-first -->


                                            <!-- Start of second Tab  -->
                                            <div class="tab-pane" id="tab-second">
                                                           

                                            <div class="col-md-12">

                                                <!-- Start of Email tab -->
                                                <div class="panel panel-default">
                                                    
                                                    <div class="panel-body"> 
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Email Address</label>
                                                                    <div class="col-md-9">                                            
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                                            <input type="text" id="email" name="email" class="form-control" placeholder="eg: john@gmail.com" />
                                                                        </div> 
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Subject</label>
                                                                    <div class="col-md-9">                                            
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                                            <input type="text" id="email_subj" name="email_subj" class="form-control"/>
                                                                        </div> 
                                                                    </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Email Content</label>
                                                                <div class="col-md-9 col-xs-12">                                            
                                                                    <textarea class="form-control" id="email_body" name="email_body" rows="5" placeholder="Email message body"></textarea>
                                                                </div>
                                                            </div>        
                                                            <div class="form-group">                                        
                                                                        <label class="col-md-3 control-label"></label>
                                                                        <div class="col-md-9" >                             
                                                                            <button type="button" name="send_mail" class="btn btn-primary" onclick="check_email()">Send Email</button>
                                                                        </div>

                                                                        <script>
                                                                                        
                                                                                        function check_email() {
                                                                                            
                                                                                            $recipient = $('#email').val();
                                                                                            $subject = $('#email_subj').val();
                                                                                            $message = $('#email_body').val();
                                                                                            
                                                                                            if ( $recipient!=="" ) {
                                                                                                if($subject!=="" && $message!==""){
                                                                                                    $('#loading_image').show();
                                                                                                    $.ajax({
                                                                                                        type: "post",
                                                                                                        url: "<?php echo base_url(); ?>" +"index.php/email/send_email/send",
                                                                                                        dataType: 'json',
                                                                                                        data: {recp: $recipient, subj: $subject , message: $message},
                                                                                                        success: function (msg) {
                                                                                                            $('#loading_image').hide();
                                                                                                            if (msg.status == "success") {
                                                                                                                swal("Your message has been sent", "You clicked the button!", "success");
                                                                                                            } 
                                                                                                        },
                                                                                                        error: function (error) {
                                                                                                            $('#loading_image').hide();
                                                                                                            alert("Something went wrong");
                                                                                                        }
                                                                                                    }); 
                                                                                                    

                                                                                                }else{
                                                                                                    alert("Please fill the required fields");
                                                                                                } 
                                                                                           }else{
                                                                                               alert("Fill recipient");
                                                                                            }
                                                                                        }
                                                                                       
                                                                                    

                                                                        </script>
                                                            </div>                                                       
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            </div>
                                             <!-- End of tab-second -->

                                        </div> <!-- End of tab content -->
                                                    </div>
                                                </form>
                                            </div>
                    </div> <!-- End of row -->   
                                        
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
                            <a href="<?php echo base_url('index.php/Login_Controller/Logout') ?>" class="btn btn-danger btn-lg">Yes</a>
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
        
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>        
        <!-- END TEMPLATE -->

        <script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
        </script>

    <!-- END SCRIPTS -->                   
    </body>
</html>






