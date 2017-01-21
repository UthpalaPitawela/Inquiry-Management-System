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
                        <a href="#"><span class="fa fa-home"></span> <span class="xn-text">Home</span></a>                        
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
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->    
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
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
            <!-- ++++++++++++++++++++++++ Tabbed page  ++++++++++++++++++++++ -->
                            <form class="form-horizontal">
                                                            
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist">
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
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Info</h3>                               
                                </div>

                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
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
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
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
                                                <td style="text-align: center"><?php echo $post->Grade1; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
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
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
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
                                                <td style="text-align: center"><?php echo $post->Grade1; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
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
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="60" style="text-align: center">OL</th>
                                                <th width="60" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Level</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="100" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>
                                        <div id="followed">
                                    <?php
                                    if($posts3) {foreach($posts3 as $post){ ?>

                                        <tbody id='table'>
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><?php echo $post->Fname; ?></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Intake; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center">
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="complete('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Completed</button>
                                                </td>
                                            </tr>
                            
                                        </tbody>

                                        <?php }} ?>
                                        </div>
                                    </table>  
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                                         
                                            
                                        </div>    

                                        <!-- 'Completed' tab -->                                    
                                        <div class="tab-pane" id="tab-third">
                                                                                        
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Student Info</h3>                                    
                                    </div>
                                
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="100" style="text-align: center">First Name</th>
                                                <th width="100" style="text-align: center">Last Name</th>
                                                <th width="100" style="text-align: center">OL</th>
                                                <th width="100" style="text-align: center">AL</th>
                                                <th width="100" style="text-align: center">Contact No.</th>
                                                <th width="200" style="text-align: center">Email</th>
                                                <th width="100" style="text-align: center">Potential Date</th>
                                                <th width="200" style="text-align: center">Actions</th>
                                            </tr>
                                        </thead>
                                        <div id="completed">
                                    <?php
                                    if($posts4) {foreach($posts4 as $post){ ?>

                                        <tbody id='table'>
                                            <tr id="<?php  echo $post->r_id; ?>">
                                                <td style="text-align: center"><?php echo $post->Fname; ?></td>
                                                <td style="text-align: center"><?php echo $post->Lname; ?></td>
                                                <td style="text-align: center"><?php echo $post->OL; ?></td>
                                                <td style="text-align: center"><?php echo $post->Grade1; ?></td>
                                                <td style="text-align: center"><?php echo $post->Contactno; ?></td>
                                                <td style="text-align: center"><?php echo $post->Email; ?></td>
                                                <td style="text-align: center"><?php echo $post->Pdate; ?></td>
                                                <td style="text-align: center">
                                                <button type="button" class="btn btn-success btn-rounded btn-sm" onclick="registered('<?php echo $post->Email; ?>','<?php echo $post->r_id; ?>')">Registered</button>
                                                </td>
                                            </tr>
                            
                                        </tbody>

                                        <?php }} ?>
                                        </div>
                                    </table>  
                                </div>
                            </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                                            
                                        </div>
                                    </div>
                                   
                                </div>                                
                            
                            </form>
                            
                        </div>
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

        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?> public/js/plugins/tableexport/jspdf/libs/base64.js"></script> 

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

        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






