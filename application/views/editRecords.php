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
        <!-- <link href="<?php echo base_url('public/alert/css/alert.css'); ?>" rel="stylesheet" />
        <link href="<?php echo base_url('public/alert/themes/default/theme.css'); ?>" rel="stylesheet" /> -->
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js"></script> 


        <!-- ALERT -->
        <!-- <script src="<?php echo base_url('public/alert/js/alert.js'); ?>"></script> -->
        <!-- JS INCLUDE --> 

        <style>
       input[type="text"][disabled] {
            color: black;
        }

        .button1 {padding: 2px 3px;}

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
                                <img src="<?php echo base_url(). $propic ?>" alt="noimage"/>
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
                    <li class="xn-openable active">
                        
                        <a href="#"><span class="fa fa-question"></span> <span class="xn-text">Inquiries</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php/User"><span class="fa fa-pencil"></span> Data Entry</a></li>
                            <li  class="active">

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
                        <a href="<?php echo base_url();?>index.php/logout_controller/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT --> 

                    <li class="pull-right" style="color:grey; padding-top: 16px; padding-right: 20px" >Logged in as <?php echo $name; ?> </li>

                   

                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                                      
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>
                    <?php if($status==0){ ?>
                            <a href="<?php echo base_url();?>index.php/manageInquiries_controller">Manage Inquiries</a>
                            <?php  } ?>

                            <?php if($status==3){ ?>
                            <a href="<?php echo base_url();?>index.php/manageInquiriesCoun_controller">Manage Inquiries</a>
                            <?php  } ?>
                    </li>
                    <li><a href="#">Summary Timeline</a></li>
                    <li><a href="<?php echo base_url();?>index.php/user">Edit Records</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
<!--index.php/user/register-->
                            <form action="<?php echo base_url();?>index.php/EditRecords_controller/register" name="registerForm" class="form-horizontal" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Registation Form</h3>

                                </div>
                            <div class="panel-body">

                            </div>
                            <div class="panel-body">

                            <div class="row">

                                <div class="col-md-6">
                                <?php
                                foreach($record as $post){ ?>

                                <input name="rid" id="rid" type="hidden" class="form-control" value="<?php echo $post->r_id;  ?>" />

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">First Name*</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="fname" id="fname" type="text" class="form-control" value="<?php echo $post->Fname;  ?>" required />
                                            </div>
                                            <span id="error_invalidFirstname" style="color: red;"></span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Last Name*</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="lname" id="lname" type="text" class="form-control" value="<?php echo $post->Lname;  ?>" required />
                                            </div>
                                            <span id="error_invalidLastname" style="color: red;"></span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Gender</label>
                                        <div class="col-md-6 col-xs-12">
                                        <?php

                                            if( $post->Gender=="Male"){
                                                ?>

                                <input type="radio" name="gender" value="Male" checked="checked" > Male
                                            <input type="radio" name="gender" value="Female"> Female

<?php
                                            }elseif($post->Gender=="Female"){
?>                                                
                                <input type="radio" name="gender" value="Male"  > Male
                                            <input type="radio" name="gender" checked="checked" value="Female"> Female

<?php
                                            }else{

                                                ?>                                                
                                <input type="radio" name="gender" value="Male"  > Male
                                            <input type="radio" name="gender" value="Female"> Female

<?php

                                            }

                                        ?>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input name="address" type="text" class="form-control" value="<?php echo $post->Address;  ?>" />
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Country</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="country" class="form-control" value="<?php echo $post->Country;  ?>" />
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email*</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $post->Email;  ?>" required />
                                            </div>
                                            <span id="error_invalidEmail" style="color: red;"></span>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Contact No*</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="contactno" id="contactno" class="form-control" placeholder="Contact number format : 94 XXXXXXXXX" required value="<?php echo $post->Contactno;  ?>" />
                                            </div>
                                            <span id="error_invalidMobile" style="color: red;"></span>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">NIC/Passport No</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="nic" class="form-control" value="<?php echo $post->NIC;  ?>" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">O/L Results*</label>
                                        <div class="col-md-9 col-xs-12">
                                            <div class="row">
                                                    <label class="col-md-10 col-xs-12 control-label" style="text-align: left">Above 5Cs, including Maths and English</label>
                                            </div>
                                             &nbsp;

                                            <div class="row">
                                                <div class="col-md-3"> 
                                                <?php
                                                    if($post->OL="Yes"){
                                                            ?>
                                                    <input type="radio" name="ol" value="Yes" checked required> Yes
                                                    <input type="radio" name="ol"  value="No">No


                                                        <?php
                                                    }else{
                                                        ?>

                                                    <input type="radio" name="ol" value="Yes" required> Yes
                                                    <input type="radio" name="ol"  value="No" checked>No
          

                                                        <?php
                                                    }
                                                ?>
                                                </div>
                                            </div>

                                        </div>

                                        &nbsp;

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">Remarks</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="input-group">
                                                    <textarea class="form-control" rows="3" cols="50" name="remark"><?php echo $post->Remark; ?></textarea>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Counsellor Name</label>
                                         <div class="col-md-6 col-xs-12">
                                             <div class="input-group">
                                                 <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="CounsellorName" class="form-control" disabled value="<?php echo $post->CounsellorName;  ?>" />
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
                                                        <input type="text" name="subject1" class="form-control" placeholder="Subject" value="<?php echo $post->Subject1;  ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control select" name="grade1" id="res1">

<?php
        if($post->Grade1==120){
?>
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>
<?php
        }elseif($post->Grade1==100){
            ?>


                                                    <option value=100>B</option>
                                                    <option value=120>A</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>

<?php
        }elseif ($post->Grade1==80) {
            ?>

                                                    <option value=80>C</option>
                                                     <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>

            <?php
        }elseif($post->Grade1==60){
            ?>
                                                    <option value=60>S</option>
                                                    
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=40>F</option>
                                                   

            <?php
        }else{
            ?>

                                                    <option value=40>F</option>
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    
            <?php

        }


?>
                                                   
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="subject2" class="form-control" placeholder="Subject" value="<?php echo $post->Subject2;  ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control select" name="grade2" id="res2" >

                                                
<?php
        if($post->Grade2==120){
?>
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>
<?php
        }elseif($post->Grade2==100){
            ?>


                                                    <option value=100>B</option>
                                                    <option value=120>A</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>

<?php
        }elseif ($post->Grade2==80) {
            ?>

                                                    <option value=80>C</option>
                                                     <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>

            <?php
        }elseif($post->Grade2==60){
            ?>
                                                    <option value=60>S</option>
                                                    
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=40>F</option>
                                                   

            <?php
        }else{
            ?>

                                                    <option value=40>F</option>
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    
            <?php

        }


?>
                                                   
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="subject3" class="form-control" placeholder="Subject" value="<?php echo $post->Subject3;  ?>" />
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <select class="form-control select" name="grade3" id="res3" >

                             
<?php
        if($post->Grade3==120){
?>
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>
<?php
        }elseif($post->Grade3==100){
            ?>


                                                    <option value=100>B</option>
                                                    <option value=120>A</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>

<?php
        }elseif ($post->Grade3==80) {
            ?>

                                                    <option value=80>C</option>
                                                     <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=60>S</option>
                                                    <option value=40>F</option>

            <?php
        }elseif($post->Grade3==60){
            ?>
                                                    <option value=60>S</option>
                                                    
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=40>F</option>
                                                   

            <?php
        }else{
            ?>

                                                    <option value=40>F</option>
                                                    <option value=120>A</option>
                                                    <option value=100>B</option>
                                                    <option value=80>C</option>
                                                    <option value=60>S</option>
                                                    
            <?php

        }


?>
                                                   
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Other</label>
                                        <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" rows="3" name="other"><?php echo $post->Other;  ?></textarea>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Mode Of Inquiry</label>
                                        <div class="col-md-6 col-xs-12" name="mode">

                                        <?php
                                        if($post->Inquiry=="Walk-in"){

?>
                                <input type="radio" name="mode" value="Walk-in" checked="checked"> &nbsp;Walk-in&nbsp;
                                   <input type="radio" name="mode" value="Call"> &nbsp;Call&nbsp;            
                                            <input type="radio" name="mode" value="Email"> &nbsp;Email / SMS&nbsp;
                                            <input type="radio" name="mode" value="Database"> &nbsp;Database&nbsp;
<?php


                                        }elseif($post->Inquiry=="Call"){

                                            ?>

                                    <input type="radio" name="mode" value="Walk-in"> &nbsp;Walk-in&nbsp;
                                            <input type="radio" checked="checked" name="mode" value="Call"> &nbsp;Call&nbsp;            
                                            <input type="radio" name="mode" value="Email"> &nbsp;Email / SMS&nbsp;
                                            <input type="radio" name="mode" value="Database"> &nbsp;Database&nbsp;
                                            <?php

                                        }elseif($post->Inquiry=="Email"){
                                            ?>

                                            <input type="radio" name="mode" value="Walk-in"> &nbsp;Walk-in&nbsp;
                                            <input type="radio" name="mode" value="Call"> &nbsp;Call&nbsp;            
                                            <input type="radio" name="mode" value="Email" checked="checked" > &nbsp;Email / SMS&nbsp;
                                            <input type="radio" name="mode" value="Database"> &nbsp;Database&nbsp;


                                            <?php
                                        }elseif($post->Inquiry=="Database"){
                                            ?>
                                            <input type="radio" name="mode" value="Walk-in"> &nbsp;Walk-in&nbsp;
                                            <input type="radio" name="mode" value="Call"> &nbsp;Call&nbsp;            
                                            <input type="radio" name="mode" value="Email"> &nbsp;Email / SMS&nbsp;
                                            <input type="radio" name="mode" value="Database" checked="checked"> &nbsp;Database&nbsp;

                                            <?php
                                        }else{
                                            ?>
 <input type="radio" name="mode" value="Walk-in"> &nbsp;Walk-in&nbsp;
                                            <input type="radio" name="mode" value="Call"> &nbsp;Call&nbsp;            
                                            <input type="radio" name="mode" value="Email"> &nbsp;Email / SMS&nbsp;
                                            <input type="radio" name="mode" value="Database"> &nbsp;Database&nbsp;

                                            <?php

                                        }

                                        ?>

                                           
                                        </div>
                                    </div>
                                    <!-- START TAGSINPUT -->
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tags</label>
                                        <div class="col-md-6 col-xs-12">
                                        
                                            <div class="input-group" >
                                                <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                                 
                                                
                                                <input type="text" class="form-control" id="tag" size="25" onkeyup="tagsinput(<?php echo $post->r_id;?>)" value=""/>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <button class="btn btn-primary active" onclick="addnewtag(<?php echo $post->r_id;?>)" type="button">Add new</button>
                                        </div>

                                        <div class = "col-md-3 col-xs-12"></div>
                                        <div class="col-md-6 col-xs-12">

                                            <div id="tagdiv"></div>

                                            <br>
                                            <div><?php foreach($tags as $mytags){ echo"
                                            <input style=\"width:50px\" type='text' value='$mytags->tag'/>
                                                   <button type='button' onclick='removetag($post->r_id,$mytags->tag_id)' class='btn btn-secondary button1'><i class='fa fa-times'></i></button>

                                            ";}?>
                                            </div>
                                        </div>
                                    </div>


                                        
                                                          
                                    <!-- END OF TAGSINPUT -->

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Potential Date* </label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input id="datepicker" class="form-control datepicker" data-date-format="yyyy-mm-dd"  value="<?php echo $post->Pdate;  ?>"   name="pdate" required />

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-md-2 col-xs-12 control-label"></label>
                                        <div class="col-md-6 col-xs-12" id="ss">
                                            <button class="btn btn-primary pull-right" type="button" onclick="getDegrees()" id="eligle">See Eligible Degrees</button>

                                        </div>
                                    </div>

                                    &nbsp;

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label"></label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <textarea class="form-control" rows="5" cols="50" name="ed" id="tt"  style="font-style:bold; color: red;">

                                            </textarea>

                                            </div>

                                        </div>
                                    </div>

                                      

                                </div>

                            </div>

                            </div>
                            <div class="panel-footer">

                                
                                <button type="reset" class="btn btn-default">Clear Form</button> &nbsp;&nbsp;
                                
                                <!-- Summary buttons -->
                                <label>Enter Summary&nbsp; </label>
                                <a class="btn btn-success btn-rounded btn-sm" style="text-align: center" data-toggle="modal" data-target="#myModal<?php echo $post->r_id;?>" data-tooltip="tooltip" data-placement="top" title="Call Summary" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-earphone"></span></a>
                                <a class="btn btn-danger btn-rounded btn-sm" style="text-align: center" data-toggle="modal" data-placement="top" title="SMS" data-tooltip="tooltip" data-target="#myModal1<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-phone red"></span></a>
                                <a class="btn btn-info btn-rounded btn-sm" style="text-align: center" data-toggle="modal" data-placement="top" title="Email" data-tooltip="tooltip" data-target="#myModal2<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-envelope" style="color:#1E90FF"></span></a>
                                <a class="btn btn-warning btn-rounded btn-sm" style="text-align: center" data-toggle="modal" data-placement="top" title="Other" data-tooltip="tooltip" data-target="#myModal3<?php echo $post->r_id;?>" onclick="assignID('<?php  echo $post->r_id; ?>')"><span class="glyphicon glyphicon-plus" style="color:orange"></span></a>
                                
                                <input type="submit" name="" class="btn btn-primary pull-right" value="Save Changes">
                                
                            </div>

                            </div>
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
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateCallSummary1">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="date">Date: </label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input id="datepicker" class="form-control datepicker" data-date-format="dd-mm-yyyy" data-date-viewmode="years" value="<?php echo date('Y-m-d');  ?>" style="color: black"  name="date" readonly />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="summary1">Enter Call Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="summary1" id="summary1"></textarea>
                                                                        </div>
                                                                        <input type="hidden" name="call_count" id="call_count" value="<?php echo $post->call_count; ?>" />
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
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
                                                    
                                                    <form class="form-horizontal" id="smssummaryform" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateSmsSummary1">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Number:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post->Contactno; ?>" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="date">Date: </label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input id="datepicker" class="form-control datepicker" data-date-format="dd-mm-yyyy" data-date-viewmode="years" value="<?php echo date('Y-m-d');  ?>" style="color: black"  name="date" readonly />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="sms1">Enter SMS content:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="sms1" id="sms1"></textarea>
                                                                            <input type="hidden" name="sms_count" id="sms_count" value="<?php echo $post->sms_count; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                <button type="button" id="save" class="btn btn-primary" onclick="check_sms('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Send Text Message</button>
                                                        </div>   

                                                                           
                                                     <script>           
                                                                            function check_sms(email,r_id) {
                                                                              //  $('#loading_image').show();
                                                                                var recipient = $('#contactno').val();
                                                                                var message = $('#sms1').val();

                                                                                // alert(recipient);
                                                                                // alert(message);

                                                                                //alert(recipient);
                                                                                //alert(message);
                                                                                 
                                                                                if ( recipient!=="") {
                                                                                    if(message!==""){



$.ajax({             
                     type:"post",
                     url : '<?php echo base_url();?>index.php/sms/Sendsms_summary/send/',
                     data : {recipient:recipient,text:message},
                     success: function(data) {

              document.getElementById("smssummaryform").submit();

                        //$('#loading_image').hide();
                             alert("SMS sent successfully");
                            

                     },
                     error: function(jqXHR){
                      alert(jqXHR.responseText);
                        //jqXHR.responseText
                     }
                 });
               

                                                                                        // $.ajax({
                                                                                        //     type: "get",
                                                                                        //     url: '<?php echo base_url();?>index.php/sms/Sendsms_summary/send/'+recipient,message,
                                                                                        //     //+"/"+message,
                                                                                           
                                                                                        //     success: function (msg) {
                                                                                        //         $('#loading_image').hide();
                                                                                        //         alert("SMS sent successfully");
                                                                                        //     },
                                                                                        //     error: function (error) {
                                                                                        //         alert("Something went wrong");
                                                                                        //     }
                                                                                        // }); 
                                                                                                    

                                                                                    }else{
                                                                                        alert("Please fill the required field");
                                                                                    } 
                                                                                }else{
                                                                                    alert("Choose either a campaign or a recipient \n Note: Cannot choose both");
                                                                                }


                                           }
                                                                       
                                                                       </script>                            
                                                    
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
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateEmailSummary1">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="contactno">Enter Email:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input type="text" class="form-control" name="contactno" id="contactno" value="<?php echo $post->Email; ?>" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="date">Date: </label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input id="datepicker" class="form-control datepicker" data-date-format="dd-mm-yyyy" data-date-viewmode="years" value="<?php echo date('Y-m-d');  ?>" style="color: black"  name="date" readonly />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="email1">Enter Email body:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="email1" id="email1"></textarea>
                                                                            <input type="hidden" name="email_count" id="email_count" value="<?php echo $post->email_count; ?>" />
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary" >Send Email</button>
                                                        </div>            
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>

                                <!-- POPUP for other summary -->
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
                                                    
                                                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Summary_controller/updateOtherSummary1">

                                                        <input type="text" name="regid" id="regid" value="<?php echo $post->r_id; ?>" hidden="hidden" />

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="date">Date: </label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <input id="datepicker" class="form-control datepicker" data-date-format="dd-mm-yyyy" data-date-viewmode="years" value="<?php echo date('Y-m-d');  ?>" style="color: black"  name="date" readonly />
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 col-xs-12 control-label" for="other">Enter Summary:</label>
                                                                        <div class="col-md-8 col-xs-12">     
                                                                            
                                                                            <textarea class="form-control" rows="5" name="other" id="other"></textarea>
                                                                        </div>
                                                                    </div>
                                                                
                                                        <div class="modal-footer">
                                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                <button type="submit" id="save" class="btn btn-primary">Save changes</button>
                                                        </div>                               
                                                    
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div> 

                            <?php  }  ?>

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
        <!-- JQUERY -->
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>  -->               
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


        



    </body>
</html>
<script type="text/javascript">
function removetag(rid,tagid){

$.ajax({             
                     type:"post",
                     url : '<?php echo base_url();?>index.php/Tag_Controller/removeTag/',
                     data : {rid:rid,tagid:tagid},
                     success: function(searchresult) {

                    //       redirect("index.php/EditRecords_controller/index/"+rid);
                    window.location="<?php echo base_url()?>index.php/EditRecords_controller/index/"+rid;




                     },
                     error: function(jqXHR){
                      alert(jqXHR.responseText);
                        //jqXHR.responseText
                     }
                 });
               


}

function addnewtag(userID){
    var newtag = document.getElementById("tag").value;

        if(newtag!=""){

$.ajax({             
                     type:"post",
                     url : '<?php echo base_url();?>index.php/Tag_Controller/addnewTag/',
                     data : {newtag:newtag,userID:userID},
                     success: function(searchresult) {

                             window.location="<?php echo base_url()?>index.php/EditRecords_controller/index/"+userID;

                            

                     },
                     error: function(jqXHR){
                      alert(jqXHR.responseText);
                        //jqXHR.responseText
                     }
                 });
               



            // $.ajax({

            //     type:"get",
            //     url : '<?php echo base_url();?>index.php/Tag_Controller/searchTag/'+searchtag,
            //     success: function (searchresult) {


            //         $('#tagdiv').html(searchresult);
 
            //     }
            // })


    }else{
        alert("Enter the tag input");
    }



}


    function tagsinput(userID){

 var searchtag = document.getElementById("tag").value;


    $('#tagdiv').html("");
     // alert(skey);


    if(searchtag!=""){

$.ajax({             
                     type:"post",
                     url : '<?php echo base_url();?>index.php/Tag_Controller/searchTag/',
                     data : {skey:searchtag,userID:userID},
                     success: function(searchresult) {

                            $('#tagdiv').html(searchresult);
                            

                     },
                     error: function(jqXHR){
                      alert(jqXHR.responseText);
                        //jqXHR.responseText
                     }
                 });
               



            // $.ajax({

            //     type:"get",
            //     url : '<?php echo base_url();?>index.php/Tag_Controller/searchTag/'+searchtag,
            //     success: function (searchresult) {


            //         $('#tagdiv').html(searchresult);
 
            //     }
            // })


    }


    }
</script>

<script type="text/javascript">


    function getDegrees() {
       
         $('textarea#tt').html("Please wait..");
        var  val1 = Number($("#res1 option:selected").val());
        var  val2 = Number($("#res2 option:selected").val());
        var val3 = Number($("#res3 option:selected").val());
        var olval =$('input[name="ol"]:checked').val();

        if(olval=="Yes" || olval=="No"){

            var tot = val1+val2+val3;
           
            if(tot>260 && olval=="Yes"){
                var id = 1;
            }else if(tot>=240 && olval=="Yes" ){
                var id = 2;
            }else if(tot>=120 && olval=="Yes"){
                var id=3;
            }else{
                var id=4;
            }
            

             $.ajax({
     
                type:"get",
                url : '<?php echo base_url();?>index.php/EditRecords_controller/geteligbledata/'+id,
                //url : 'view_register'+id,
                success: function (data) {

                    $('textarea#tt').html("");
                    $('textarea#tt').html(data);

                }
            })



        }else{

            $('textarea#tt').html("Select O/L results");

        }

            


}
</script>

<script>
    //disable selecting past dates
    var dateToday = new Date();

    $('#datepicker').datepicker({                                     
        'startDate': dateToday
    });
</script>


<!-- Validation -->
<script type="text/javascript">
$(function(){
    $('#error_invalidEmail').hide();
    //$('#error_invalidMobile').hide();
    $('#error_invalidFirstname').hide();
    $('#error_invalidLastname').hide();

    var error_email = false;
    var error_mobile = false;
    var error_firstname = false;
    var error_lastname = false;

    $("#email").focusout(function(){
        validateEmail(this.value);
    });
    // $("#contactno").focusout(function(){
    //     validateMobile(this.value);
    // });
    $("#fname").focusout(function(){
        validateFirstname(this.value);
    });
    $("#lname").focusout(function(){
        validateLastname(this.value);
    });

    //Check if email is valid
    function validateEmail(sEmail) {
      var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

      if(!sEmail.match(reEmail)) {
        $("#error_invalidEmail").html("Please enter a valid email");
        $("#error_invalidEmail").show();
        document.getElementById("email").style.borderColor = 'red';
        error_email =  true;
      }else{
        $("#error_invalidEmail").hide();
        document.getElementById("email").style.borderColor = "";
      }
      //return true;
    }

    //Check if mobile number is valid
    // function validateMobile(inputtxt)
    // {
    //     var phoneno = /^\+?([0-9]{3})\)?[- ]?([0-9]{3})[- ]?([0-9]{4})$/;
    //     if(inputtxt.match(phoneno))
    //     {
    //         $("#error_invalidMobile").hide();
    //         document.getElementById("contactno").style.borderColor = "";
    //     }
    //     else
    //     {
    //         $("#error_invalidMobile").html("Invalid Phone Number");
    //         $("#error_invalidMobile").show();
    //         document.getElementById("contactno").style.borderColor = 'red';
    //         error_mobile =  true;
    //     }
    // }

    //Check if first name is valid
    function validateFirstname(input) {
      var name = /^[A-Za-z\s]+$/;

      if(!input.match(name)) {
        $("#error_invalidFirstname").html("First name can only contain letters");
        $("#error_invalidFirstname").show();
        document.getElementById("fname").style.borderColor = 'red';
        error_firstname =  true;
      }else{
        $("#error_invalidFirstname").hide();
        document.getElementById("fname").style.borderColor = "";
      }
      //return true;
    }

    //Check if last name is valid
    function validateLastname(input) {
      var name = /^[A-Za-z\s]+$/;

      if(!input.match(name)) {
        $("#error_invalidLastname").html("Last name can only contain letters");
        $("#error_invalidLastname").show();
        document.getElementById("lname").style.borderColor = 'red';
        error_lastname =  true;
      }else{
        $("#error_invalidLastname").hide();
        document.getElementById("lname").style.borderColor = "";
      }
      //return true;
    }

    $("#registerForm").submit(function(){
        error_email = false;
        error_mobile = false;
        error_firstname = false;
        error_lastname = false;

        validateEmail();
        validateLastname();
        validateFirstname();
        validateMobile();

        if(error_email==false && error_mobile==false && error_firstname==false && error_lastname==false){
            return true;
        } else {
            return false;
        }
    });

});


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



<script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
</script>

<!-- Start of alerts -->
<?php
     if(isset($_SESSION["alert"])){

                ?>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
        <!-- EOF CSS INCLUDE --> 
      <!-- JS INCLUDE --> 
                <script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>

<?php
  echo "<script>alert(".$_SESSION["alert"].")</script>";
    
      if( $_SESSION["alert"]=="insertsuccess"){

            
?>
<script type="text/javascript">
    swal("Submitted!", "Entry submitted succesfully!", "success");
      
</script>

          <?php
}elseif ($_SESSION["alert"]=="notsuccess") {
            ?>
            <script type="text/javascript">
          swal(
  'Oops...',
  'Something went wrong!',
  'error'
);
          </script>
          <?php
        }
unset($_SESSION['alert']);
            }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
        <!-- EOF CSS INCLUDE --> 
      <!-- JS INCLUDE --> 
<script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>
<!-- End of alerts -->