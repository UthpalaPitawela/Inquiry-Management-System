<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
         <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <link rel="icon" href="<?php echo base_url('public/Assets/EDULINK-Logo1.ico'); ?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
                 <style type="text/css">
                     #loading {width: 100%;height: 100%;margin-top: 10%;left: 40%;position: fixed;display: none; z-index: 99}

               </style>
          
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
                                <div class="profile-data-name"><?php echo $name;  ?></div>
                                <div class="profile-data-title">Admission Officer</div>
                            </div>
                           
                        </div>                                                                        
                    </li>
                   
                  

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/Page_Controller/loadingpages/admission_officer_student_list"><span class="fa fa-users"></span> <span class="xn-text">Student Profiles</span></a>
                        
                    </li>  

                     <li>
                        <a href="<?php echo base_url();?>index.php/Admissions_controller/admissionsofficeradmissions"><span class="fa fa-graduation-cap"></span> <span class="xn-text">Admissions</span></a>
                        
                    </li>                
                    
                    <li>
                        <a href="<?php echo base_url();?>index.php/ManageInquiries_controller/completedforadmissionofficer"><span class="fa fa-phone"></span> <span class="xn-text">Completed Inquiries</span></a>
                        
                    </li>                
                
                  

                 
                    
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content" >
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                  
                    <!-- SEARCH -->
                    <!-- END SEARCH -->

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
     <td><a href="<?php echo base_url();?>index.php/Student_Data_Controller/loadingdetails/<?php echo $tpnumber;?>"><span class="fa fa-user"></span> View Profile</a></td>
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
                            <a href="<?php echo base_url();?>index.php/Login_Controller/logout" class="btn btn-danger btn-lg">Yes</a>
                            <button type= "button" class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of message box-->
        
     <?php

      include 'imports.php'
      ?>


      <script type="text/javascript">

var myDiv = document.getElementById("loading");
function selectStudent(s_Id){

 show();
var ss=s_Id;

$('#studiv').load("<?php echo site_url();?>Student_Data_Controller/loadingdetails/"+ss);
 


   // $.ajax({
   //     type: 'POST',
   //     url: "<?php echo site_url(); ?>/Student_Data_Controller/loadingdetails/"+ss,
   //      dataType: 'html',
   //      success: function (data) {
   //        $('#studiv').innerHTML = data;
   //      }
   //  });






}






show = function(){

        myDiv.style.display = "block";
        setTimeout(hide, 3000); // 5 seconds
      }

      hide = function(){
        myDiv.style.display = "none";
      }

     </script>

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
                url : '<?php echo base_url();?>index.php/Student_Data_Controller/searchStudent/'+skey,
                success: function (searchresult) {


                    $('#studentdiv').html(searchresult);
 
                }
            })


    }



}

     


</script>














    </body>
</html>
