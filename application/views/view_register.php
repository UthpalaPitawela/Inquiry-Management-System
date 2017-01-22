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
                    <li class="xn-openable active">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li class="active"><a href="<?php echo base_url();?>index.php/user"><span class="fa fa-pencil"></span> Data Entry</a></li>
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
                    <li><a href="<?php echo base_url();?>index.php/user">Data Entry</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

<div class="row">
<div class="col-md-12">
<!--index.php/user/register-->
<form action="" class="form-horizontal" method="post">
<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Student Registation Form</h3>

</div>
<div class="panel-body">

</div>
<div class="panel-body">

<div class="row">

<div class="col-md-6">

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">First Name</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input name="fname" type="text" class="form-control" required />
            </div>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Last Name</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input name="lname" type="text" class="form-control" />
            </div>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Gender</label>
        <div class="col-md-6 col-xs-12">
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Address</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input name="address" type="text" class="form-control" />
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Country</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="country" class="form-control" />
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Email</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="email" class="form-control" required />
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Contact No</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="contactno" class="form-control" required />
            </div>

        </div>
    </div>


    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">NIC/Passport No</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="nic" class="form-control" />
            </div>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">O/L Results</label>
        <div class="col-md-9 col-xs-12">
            <div class="row">
                    <label class="col-md-10 col-xs-12 control-label" style="text-align: left">Above 5Cs, including Maths and English</label>
            </div>
             &nbsp;

            <div class="row">
                <div class="col-md-3">
                    <input type="radio" name="ol" value="Yes"> Yes
                    <input type="radio" name="ol" value="No">No
                </div>
            </div>

        </div>

        &nbsp;

        <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Remarks</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <textarea class="form-control" rows="3" cols="50" name="remark"></textarea>
            </div>

        </div>
        </div>

    </div>
</div>


<div class="col-md-6">

    <div class="form-group">
        <label class="col-md-3 control-label">A/L Results</label>
        <div class="col-md-9 col-xs-12">
            <div class="row">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" name="subject1" class="form-control" placeholder="Subject" >
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-control select" name="grade1" id="res1" />

                    <option value="120">A</option>
                    <option value="100">B</option>
                    <option value="80">C</option>
                    <option value="60">S</option>
                    <option value="40">F</option>
                    </select>

                </div>
            </div>
            <div class="row">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" name="subject2" class="form-control" placeholder="Subject" >
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-control select" name="grade2" id="res2" />

                    <option value="120">A</option>
                    <option value="100">B</option>
                    <option value="80">C</option>
                    <option value="60">S</option>
                    <option value="40">F</option>

                    </select>

                </div>
            </div>
            <div class="row">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" name="subject3" class="form-control" placeholder="Subject" >
                    </div>
                </div>

                <div class="col-md-3">
                    <select class="form-control select" name="grade3" id="res3" />

                    <option value="120">A</option>
                    <option value="100">B</option>
                    <option value="80">C</option>
                    <option value="60">S</option>
                    <option value="40">F</option>

                    </select>

                </div>
            </div>
        </div>

    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Other</label>
        <div class="col-md-6 col-xs-12">
            <textarea class="form-control" rows="3" name="other"></textarea>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Mode Of Inquiry</label>
        <div class="col-md-6 col-xs-12" name="mode">
            <input type="radio" name="mode" value="Walk-in"> &nbsp;Walk-in&nbsp;
            <input type="radio" name="mode" value="Call"> &nbsp;Call&nbsp;            
            <input type="radio" name="mode" value="Email"> &nbsp;Email / SMS&nbsp;

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Potential Level </label>
        <div class="col-md-6 col-xs-12" name="mode">
            <input type="radio" name="intake" value="High"> High&nbsp;
            <input type="radio" name="intake" value="Medium"> Medium&nbsp;
            <input type="radio" name="intake" value="Low"> Low&nbsp;

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Potential Date </label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                <input type="date" class="form-control datepicker" name="pdate" value="">

            </div>

        </div>
    </div>

    <div class="row">
        <label class="col-md-2 col-xs-12 control-label"></label>
        <div class="col-md-6 col-xs-12" id="ss">
            <button class="btn btn-primary pull-right" id="eligle">See Eligible Degrees</button>

        </div>
    </div>

    &nbsp;

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label"></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <textarea class="form-control" rows="3" cols="50" name="ed" id="tt">

            </textarea>

            </div>

        </div>
    </div>

      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Counsellor Name</label>
         <div class="col-md-6 col-xs-12">
             <div class="input-group">
                 <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                 <input name="counsellorname" type="text" class="form-control" />
            </div>
 
         </div>
     </div>


</div>

</div>

</div>
<div class="panel-footer">
    <button class="btn btn-default">Clear Form</button>
    <button class="btn btn-primary pull-right">Submit</button>
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
                            <a href="<?php echo base_url('index.php/login_controller/logout') ?>" class="btn btn-danger btn-lg">Yes</a>
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
    <!-- END SCRIPTS -->                   
    </body>
</html>


<script>
    $(document).ready(function(){

        $('button#eligle').click(function (e) {
            e.preventDefault();

            var  val1 = $("#res1 option:selected").val();
            var  val2 = $("#res2 option:selected").val();
            var val3 = $("#res3 option:selected").val();

            if (val1 == '120'){
                var mark1 = 120;

            }else if(val1 == '100'){
                var mark1 = 100;

            }else if(val1 == '80'){
                var mark1 = 80;
            }else{
                var mark1 = 60;
            }


            if (val2 == '120'){
                var mark2 = 120;
            }else if(val1 == '100'){
                var mark2 = 100;

            }else if(val1 == '80'){
                var mark2 = 80;
            }else{
                var mark2 = 60;
            }

            if (val3 == '120'){
                var mark3 = 120;
            }else if(val1 == '100'){
                var mark3 = 100;

            }else if(val1 == '80'){
                var mark3 = 80;
            }else{
                var mark3 = 60;
            }

            var tot = mark1+mark2+mark3;
            if(tot>260){
                var id = 1;
            }else if(tot>=240){
                var id = 2;
            }
            
            
            
            $.ajax({
                
                type:"get",
                url : 'user/geteligbledata/'+id,
                //url : 'view_register'+id,
                success: function (data) {

                    $('textarea#tt').html("");
                    $('textarea#tt').html(data);

                }
            })
    });


    });


</script>

<script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
</script>







