
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


          
        <!-- EOF CSS INCLUDE -->                                    
    </head>
              <?php
$name=$_SESSION["first_username"];
$propic=$_SESSION["propic"];
$status = $_SESSION["status"];

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
                    <li class="xn-title">Navigation</li>
                                 
                
                  

                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/Page_Controller/loadingpages/admission_officer_student_list"><span class="fa fa-users"></span> <span class="xn-text">Student Profiles</span></a>
                        
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


                <div class="page-content-wrap"  id='studiv' >
                    


 


                </div>
                <div class="page-content-wrap"  >
                              
                



                <div class="page-content-wrap"  id='studiv' >
                    












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
                                        <p><small>Mobile</small><br><?php echo $row3['tpnumber'];?></p>
                                        <p><small>Mobile</small><br><?php echo $row3['tpnumber2'];?></p>
                                        <p><small>Email</small><br><?php echo $row3['email'];?></p>
                                                                          
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                 </div>







<?php
 if ($current_results->num_rows() > 0) {
foreach ($current_results ->result_array() as $row2) {



if($row2['other']!='nolink'){


?>




<div class="panel-body col-md-8">
                                    
                                   
        <p><strong> Student's other details attached</strong></p>
       











        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "document.getElementById('newslight').style.display='block';document.getElementById('newsfade').style.display='block'" ><span>View PDF</span></button>
    
    
    
    


<!-- div for black over lay -->
<div id="newsfade" class="black_overlay"></div>


<!-- div for white area of adding a news -->
<div id="newslight" class="white_content">





 <div style=" height:32.5vw;" onload="this.style.height=this.contentDocument.body.scrollHeight +'px'; href="<?php echo base_url($row2['other']); ?>">
              
                  <object data="<?php echo base_url($row2['other'])?>" type="application/pdf" width="100%" height="100%" >
                  alt : <a href="<?php echo base_url($row2['other'])?>">No other files have been uploaded</a>
                  </object>


            </div>
<br>
<br>

<a class="btn btn-primary view-pdf col-md-2 pull-right" href = "javascript:void(0)" onclick = "document.getElementById('newslight').style.display='none';document.getElementById('newsfade').style.display='none'">Close</a>

</div>


























</div>




<?php
}
?>





<!-- 
<div class="content-frame-body content-frame-body-left " >
                        
     -->                    
                        <div class="gallery" id="links">
                             
                            <a class="gallery-item" style="height:200px;width:200px;" href="<?php echo base_url($row2['olimage1'])?>" title="O/L Certificate Image 1" data-gallery="">
                                <div class="image">                              
                                    <img style="height:200px;width:200px;" src="<?php echo base_url($row2['olimage1'])?>" alt="O/L Certificate Image 1">                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><div class="icheckbox_minimal-grey" style="position: relative;"><input type="checkbox" class="icheckbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>O/L Certificate Image 1</strong>
                                  
                                </div>                                
                            </a>

                            <a class="gallery-item" style="height:200px;width:200px;" href="<?php echo base_url($row2['olimage2'])?>" title="O/L Certificate Image 2" data-gallery="">
                                <div class="image">
                                    <img style="height:200px;width:200px;" src="<?php echo base_url($row2['olimage2'])?>" alt="O/L Certificate Image 2">    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><div class="icheckbox_minimal-grey" style="position: relative;"><input type="checkbox" class="icheckbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>O/L Certificate Image 2</strong>
                          
                                </div>                                
                            </a>                            

                            <a class="gallery-item" style="height:200px;width:200px;" href="<?php echo base_url($row2['alimage1'])?>" title="A/L Certificate Image 1" data-gallery="">
                                <div class="image">
                                    <img style="height:200px;width:200px;" src="<?php echo base_url($row2['alimage1'])?>" alt="A/L Certificate Image 1">                                        
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><div class="icheckbox_minimal-grey" style="position: relative;"><input type="checkbox" class="icheckbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>A/L Certificate Image 1</strong>
                                  
                                </div>                                
                            </a>

                            <a class="gallery-item" style="height:200px;width:200px;" href="<?php echo base_url($row2['alimage2'])?>" title="A/L Certificate Image 2" data-gallery="">
                                <div class="image">
                                    <img style="height:200px;width:200px;" src="<?php echo base_url($row2['olimage2'])?>" alt="A/L Certificate Image 2">    
                                    <ul class="gallery-item-controls">
                                        <li><label class="check"><div class="icheckbox_minimal-grey" style="position: relative;"><input type="checkbox" class="icheckbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></label></li>
                                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                    </ul>                                                                    
                                </div>
                                <div class="meta">
                                    <strong>A/L Certificate Image 2</strong>
                     
                                </div>                                
                            </a>                            
                             
                        </div>
                             
                     
               <!--      </div>
 -->
           
       
        
        <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>      
        <!-- END BLUEIMP GALLERY -->
        
     
        <script>            
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement;
                var link = target.src ? target.parentNode : target;
                var options = {index: link, event: event,onclosed: function(){
                        setTimeout(function(){
                            $("body").css("overflow","");
                        },200);                        
                    }};
                var links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>        
        
   





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



                    <div class="panel panel-default" style="margin-top: 50px;">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Student List</h3>
                                    <ul class="panel-controls">


                                    <li>
                                    <div class="panel-body">
                                    <div class="col-md-6">
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
                                               <?php
                                                $email=$studentrow['email'];
                                                $email=urlencode($email);


                                               ?>
     <td><a href="<?php echo base_url();?>index.php/Student_Data_Controller/loadingdetails/<?php echo $email;?>"><span class="fa fa-user"></span> View Profile</a></td>
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
                            <a href="<?php echo base_url();?>index.php/Login_Controller/logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
     <?php

      include 'imports.php';
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
