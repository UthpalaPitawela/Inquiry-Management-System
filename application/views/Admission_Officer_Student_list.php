<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url('public/Assets/EDULINK-Logo1.ico'); ?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
                 <style type="text/css">
                     #loading {width: 100%;height: 100%;top: 40%;left: 40%;position: fixed;display: none; z-index: 99}

/*#loading-image {position: absolute;top: 40%;left: 45%;z-index: 100} 
  */               </style>
          
        <!-- EOF CSS INCLUDE -->                                    
    </head>
              <?php
$name=$_SESSION["first_username"];
$propic=$_SESSION["propic"];

          ?>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Edulink IMS</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url($propic);?>" alt="<?php echo $name." 's image";  ?>"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url($propic);?>" alt="<?php echo $name." 's image";  ?>"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Name</div>
                                <div class="profile-data-title">Designation</div>
                            </div>
                           
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="">
                        <a href="<?php echo base_url();?>index.php/page_controller/loadingpages/admission_officer"><span class="fa fa-desktop"></span> <span class="xn-text">Home</span></a>                        
                    </li>                    
                
                  

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/page_controller/loadingpages/admission_officer_student_list"><span class="fa fa-users"></span> <span class="xn-text">Student Profiles</span></a>
                        
                    </li>                
                
                  

                 
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content" >
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search Student..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
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
                    <li class="active"></li>
                </ul>
                <!-- END BREADCRUMB -->                       
                <div>
                <!-- PAGE CONTENT WRAPPER -->

                <!--loading div-->
                <div id="loading">
<img id="loading-image" src="<?php echo base_url();?>public/img/waiting.gif" alt="Loading..." />
</div> 


                <div class="page-content-wrap"  id='studiv' >
                    


 


                </div>
                <div class="page-content-wrap"  >
                              
                    






















                    <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Student List</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>ID</th>
                                                <th>Profile</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

<?php


                                    if ($admissionstudent->num_rows() > 0) {
foreach ($admissionstudent ->result_array() as $studentrow) {

?>

                                            <tr>
                                            <form>
                                                <td><?php echo $studentrow['first_name']."  ".$studentrow['last_name'];?></td>
                                                <td><?php echo $studentrow['email'];?></td>
                                                <td><?php echo $studentrow['u_id'];?></td>
                                                <td><a href="javascript:selectStudent('<?php echo $studentrow['u_id'];?>')"><span class="fa fa-user"></span> View Profile</a></td>
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
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

      <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout" style="z-index: 1001 !important;">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo site_url('login_controller../../../') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
     <?php

      include 'imports.php'
      ?>


      <script type="text/javascript">

var myDiv = document.getElementById("loading");
function selectStudent(s_Id){

 show();
var ss=s_Id;

$('#studiv').load("<?php echo site_url(); ?>/Student_Data_Controller/loadingdetails/"+ss);
 



  //  $.ajax({
    //    type: 'POST',
      //  url: "<?php //echo site_url(); ?>/Student_Data_Controller/loadingdetails/"+ss,
        //dataType: 'html',
        //success: function (data) {
          // $('#studiv').innerHTML = data;
        //}
    //});






}




show = function(){

        myDiv.style.display = "block";
        setTimeout(hide, 3000); // 5 seconds
      }

      hide = function(){
        myDiv.style.display = "none";
      }

   



 






     </script>
        







    </body>
</html>
