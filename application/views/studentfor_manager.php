<?php
if (time() - $_SESSION['start'] > 1800) {
            session_destroy();
            
            ?>
            <script type="text/javascript">
                window.location="<?php echo base_url()?>index.php/Login_Controller/session_timeout_direct/";
            </script>
            <?php

        }
        else{
            $_SESSION['start']=time();

        }
          ?>

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
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <!-- JS INCLUDE --> 

   <style type="text/css">
   #newslight {
        display: none;
        position: fixed;
        top: 8%;
        left: 25%;
        width: 50%;
        height: 84%;
        padding: 16px;
        border: 5px solid black;
        background-color: white;
        z-index:102;
        overflow: auto;

    }


  #newsfade{
        display: none;
        position: fixed;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        background-color: black;
        z-index:101;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }


</style>


    </head>
    <body>

    <?php

    $name = $_SESSION["first_username"];
    $propic = $_SESSION["propic"];
    $status = $_SESSION["status"];
    //$role = $_SESSION["status"];
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
                                <div class="profile-data-title">
                                    <?php if($status==0){echo 'Manager';}
                                elseif($status==2){echo 'Admissions Officer';}
                                elseif($status==3){echo 'Counsellor';}   ?>
                                </div>
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
                            <li><a href="<?php echo base_url();?>index.php/User"><span class="fa fa-pencil"></span> Data Entry</a></li>
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

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/AddStudentAcc_controller"><span class="fa fa-user"></span> <span class="xn-text">Student Profiles</span></a>   
                    </li>

                    
                    <?php if($status==0){ ?>
                    <li class="xn-title">Administration</li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Database"><span class="fa fa-database"></span> <span class="xn-text">Databases</span></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>index.php/Campaign_Controller/index"><span class="fa fa-th-list"></span> <span class="xn-text">Campaigns</span></a>
                    </li>
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
                        <a href="<?php echo base_url();?>index.php/Login_Controller/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT --> 

                    <li class="pull-right" style="color:grey; padding-top: 16px; padding-right: 20px" >Logged in as <?php echo $name; ?> </li>

                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                                      
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Student Profiles</a></li>

                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <div class = "col-md-12">
                                     
                    <div class="panel panel-default">

                                        <div class="page-content-wrap"  id='studiv' >
                    
<br>

<?php
 if ($profile_data->num_rows() > 0) {
foreach ($profile_data ->result_array() as $row3) {
?>
<div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default" >
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url($row3['propic']);?>" alt="<?php echo $row3['firstname']."'s image";?>">
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name"><?php echo $row3['firstname']."  ".$row3['lastname'];?></div>
                                        <div class="profile-data-title">Details</div>
                                    </div>
                                    <div class="profile-controls">
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Primary Mobile</small><br><?php echo $row3['tpnumber'];?></p>
                                        <p><small>Mobile</small><br><?php echo $row3['tpnumber2'];?></p>
                                        <p><small>Email</small><br><?php echo $row3['email'];?></p>
                                                                          
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                 </div>




<?php
 if ($current_results->num_rows() > 0) {
foreach ($current_results ->result_array() as $row3) {


$f1= base_url($row3['pdf1']);
$f2= base_url($row3['pdf2']);
$f3= base_url($row3['pdf3']);
$f4= base_url($row3['pdf4']);
$f5= base_url($row3['pdf5']);
$f6= base_url($row3['pdf6']);
$f7= base_url($row3['pdf7']);
$f8= base_url($row3['pdf8']);
$f9= base_url($row3['pdf9']);
$f10= base_url($row3['pdf10']); 

?>


<div class="col-md-8 pull-right">



<input type="text" hidden="" value="<?php echo $f1; ?>" id="f1" name="">
<input type="text" hidden="" value="<?php echo $f2; ?>" id="f2" name="">
<input type="text" hidden="" value="<?php echo $f3; ?>" id="f3" name="">
<input type="text" hidden="" value="<?php echo $f4; ?>" id="f4" name="">
<input type="text" hidden="" value="<?php echo $f5; ?>" id="f5" name="">
<input type="text" hidden="" value="<?php echo $f6; ?>" id="f6" name="">
<input type="text" hidden="" value="<?php echo $f7; ?>" id="f7" name="">
<input type="text" hidden="" value="<?php echo $f8; ?>" id="f8" name="">
<input type="text" hidden="" value="<?php echo $f9; ?>" id="f9" name="">
<input type="text" hidden="" value="<?php echo $f10; ?>" id="f10" name="">
<table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>File Name</th>
                                                <th>Open File</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input name="name1" readonly type="text" id="name1" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name1']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                <?php
                                                if($row3['pdf1']!='nolink'){?>
<button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f1')" ><span>View PDF</span></button>
<?php
}else{
  echo "No File";
}
?>

</td>
                                                </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input name="name2" readonly type="text" id="name2" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name2']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf2']!='nolink'){?>
<button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f2')" ><span>View PDF</span></button>
<?php
}else{
  echo "No File";
}
?>

</td>
                                                 </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><input name="name3" readonly type="text" id="name3" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name3']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf3']!='nolink'){?>
<button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f3')" ><span>View PDF</span></button>
<?php
}else{
  echo "No File";
}
?>

</td>
                                               </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><input name="name4" readonly type="text" id="name4" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name4']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf4']!='nolink'){?>
        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f4')" ><span>View PDF</span></button>
<?php
}else{
  echo "No File";
}
?>
                                                </td>
                                               </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><input name="name5" readonly type="text" id="name5" style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name5']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf5']!='nolink'){?>

        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f5')" ><span>View PDF</span></button>

<?php
}else{
  echo "No File";
}
?>

                                                </td>
                                               </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><input name="name6" readonly type="text" id="name6" placeholder="Enter Name of File" value=" <?php echo ($row3['name6']); ?> " style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf6']!='nolink'){?>
        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f6')" ><span>View PDF</span></button>

<?php
}else{
  echo "No File";
}
?>

                                                </td>
                                                </tr>
                                            <tr>
                                                <td>7</td>
                                                <td><input name="name7" readonly type="text" id="name7" placeholder="Enter Name of File" value="<?php echo ($row3['name7']); ?>" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf7']!='nolink'){?>
        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f7')" ><span>View PDF</span></button>
<?php
}else{
  echo "No File";
}
?>


                                                </td>
                                                </tr>
                                            <tr>
                                                <td>8</td>
                                                <td><input name="name8" readonly type="text" id="name8"  style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name8']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                  <?php
                                                if($row3['pdf8']!='nolink'){?>
        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f8')" ><span>View PDF</span></button>
<?php
}else{
  echo "No File";
}
?>


                                                </td>
                                                </tr>
                                            <tr>
                                                <td>9</td>
                                                <td><input name="name9" readonly type="text" id="name9" style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name9']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf9']!='nolink'){?>
        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f9')" ><span>View PDF</span></button>
<?php
}else{
  echo "No File";
}
?>
                                                </td>
                                                </tr>
                                            <tr>
                                                <td>10</td>
                                                <td><input name="name10" readonly type="text" id="name10" style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name10']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                <td>
                                                                                                <?php
                                                if($row3['pdf10']!='nolink'){?>
        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "showPDF('f10')" ><span>View PDF</span></button>
        <?php
      }else{
  echo "No File";
}
      ?>
                                            

                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>




<script type="text/javascript">

function showPDF(fil){

var urloffile=document.getElementById(fil).value;

  document.getElementById("pdfviwer").setAttribute('data', urloffile);
  document.getElementById('newslight').style.display='block';
  document.getElementById('newsfade').style.display='block';

}

</script>












<!--  <input style="" class="btn btn-info pull-right" type="button" onclick=" confirm();" id="newssubmit" name="submitresults" value="Submit" >
 -->

 <div id="newsfade" class="black_overlay"></div>


<!-- div for white area of adding a news -->
<div id="newslight" class="white_content">





 <div style=" height:32.5vw;" onload="this.style.height=this.contentDocument.body.scrollHeight +'px'; href="<?php //echo base_url($row2['other']); ?>">
              
                  <object id="pdfviwer" data="" type="application/pdf" width="100%" height="100%" >
                  alt : <a href="<?php //echo base_url($row2['other'])?>">No other files have been uploaded</a>
                  </object>


            </div>
<br>
<br>

<a class="btn btn-primary view-pdf col-md-2 pull-right" href = "javascript:void(0)" onclick = "document.getElementById('newslight').style.display='none';document.getElementById('newsfade').style.display='none'">Close</a>

</div>



<div  style="margin-top: 150px;">
 </div>
      




</div>


    <?php
}
}else{
     echo "<h4><strong>Results verification details - Not available</strong></h4>";
}






?>

<?php


}
}else{
    echo "No data Available";
}



?>

 
</div>                    

                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Student List</h3>
                                    <ul class="panel-controls">

                                    <li>
                                    <div class="panel-body">
                                    <div class="col-md-12">
                                    <div class="input-group push-down-10">
                                                <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                                 <input type="text" name="search" class="form-control" id="searchid" onkeyup="getStudent()" placeholder="Search Student..."/>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                      <div id="studentdiv">

                            No Result
                                
                            </div>
                                    </div>
                                    </div>
                                    </li>

                                        <li class="pull-right"><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li class="pull-right"><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="pull-right"><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>ID</th>
                                                <th>Primary TP number</th>
                                                <th>Profile</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

<?php


                                    if ($admissionstudent->num_rows() > 0) {
foreach ($admissionstudent ->result_array() as $studentrow) {

?>

                                            <tr>
                                            <form action="">
                                                <td><?php echo $studentrow['firstname']."  ".$studentrow['lastname'];?></td>
                                                <td><?php echo $studentrow['email'];?></td>
                                                <td><?php echo $studentrow['user_name'];?></td>
                                                 <td><?php echo $studentrow['tpnumber'];?></td>
                                               <?php
                                                $tpnumber=$studentrow['tpnumber'];
                                                $tpnumber=urlencode($tpnumber);

                                               ?>
     <td><a href="<?php echo base_url();?>index.php/Student_Data_Controller/loadingdetailsformanager/<?php echo $tpnumber;?>"><span class="fa fa-user"></span> View Profile</a></td>
                                                </form>
                                            </tr>

<?php
}
}else{
    ?><h2>No Data</h2><?php
}
?>
                                        </tbody>
                                    </table>
                                </div>
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
        
        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>    

        <script>
        $('.mb-control').click(function(e){
            e.preventDefault()
        })
        
        </script>    



        <script type="text/javascript">
    


function getStudent(){

    var skey = document.getElementById("searchid").value;


    $('#studentdiv').html("");
     // alert(skey);

    if(skey!=""){

            $.ajax({

                type:"get",
                url : '<?php echo base_url();?>index.php/Student_Data_Controller/searchStudentformanager/'+skey,
                success: function (searchresult) {


                    $('#studentdiv').html(searchresult);
 
                }
            })


    }



}


</script>


  <?php

      include 'imports.php';
      ?>



        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






