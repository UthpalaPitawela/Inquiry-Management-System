<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
         <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->       

<style type="text/css">
    input[type='file'] {
  opacity:0    
}
</style>
<script type="text/javascript">
 function inputfileFunction() {
    document.getElementById('filename').click();


}


 function readURL(input,imgtg) {
           
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+imgtg).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
    
            document.getElementById("submitbutton").style.display = 'block';            
        }

</script>

       
<script>
// changing attributes of the profile
function TP2edit(){

   document.getElementById("telephone2").disabled = false;
   document.getElementById("submitbutton").style.display = 'block';
}

function Passwordedit(){

   document.getElementById("passwordeditbox").style.display = 'block';
   document.getElementById("submitbutton").style.display = 'block';
}

</script>




<!-- checking file type -->
<script type="text/javascript">
    function checkpropic() {

        var fileElement = document.getElementById("filename");
        var fileExtension = "";
  

        if ($('#filename').get(0).files.length === 0) {
            return checktp2();
        }else{

            if (fileElement.value.lastIndexOf(".") > 0) {
// if the selected file have a file type assigning file type to variable fileExtension   
            fileExtension = fileElement.value.substring(fileElement.value.lastIndexOf(".") + 1, fileElement.value.length);
        }
        var ex=fileExtension.toLowerCase();
// validating file type
        
        switch(ex){
          case "png":return checkSizepropic();break;
          case "jpg":return checkSizepropic();break;
          case "jpeg":return checkSizepropic();break;
          
          default: document.getElementById('pText').innerHTML = "Invalid file type. You can select only png,jpg or jpeg files";
          
              document.getElementById("message-box-danger").style.display = 'block';

            return false;break;
        }


        }


        
    }
// checking file assignment
function checkSizepropic(){
            var oFile = document.getElementById("filename").files[0]; 

            if (oFile.size > 2097152) // 2 mb for bytes.
            {
                document.getElementById('pText').innerHTML = "Image size too large. Select an image of size atmost 2Mb.";
          
                document.getElementById("message-box-danger").style.display = 'block';
                return false;
            }else{
                  
               return true;
               }

}




// checking text area
function checktp2(){

  var tpnumber = $.trim($('#telephone2').val());
 
   if(tpnumber.length===0)
   {
        document.getElementById('pText').innerHTML = "To submit you have to either enter telephone number or upload profile picture ";
          
                document.getElementById("message-box-danger").style.display = 'block';
                return false;

   }
   else
   {
          return true;
   }





   
}

// function Confirmsubmit{

//         // document.getElementById('filename').click();

//          document.getElementById("message-box-info").style.display = 'block';
//          return false;


// }
     // function notyConfirm(){

     //                    var retbool=false;
     //                noty({
     //                    text: 'Are you sure you want to submit?',
     //                    layout: 'topRight',
     //                    buttons: [
     //                            {addClass: 'btn btn-success btn-clean', text: 'Ok', onClick: function($noty) {
     //                                   retbool= true;
                                   
     //                                $noty.close();
     //                             }
     //                            },
     //                            {addClass: 'btn btn-danger btn-clean', text: 'Cancel', onClick: function($noty) {
     //                                retbool=false;
     //                                $noty.close();
                                    
     //                                }
     //                            }
     //                        ]
     //                })                                                    
     //                return retbool;
     //            }                                            
           
</script>






        
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <div class="page-container" >
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/home') ?>">Edulink</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>



<?php

$name=$_SESSION["first_username"];
//$_SESSION['name'];
$propic=$_SESSION["propic"];
?>





<li class="xn-profile">
                       
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url($propic);?>" alt="No image">
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name; ?></div>
                                <div class="profile-data-title">Student</div>
                            </div>
                           
                        </div>                                                                        
                    </li>

















                    <li class="xn-title">Navigation</li>
                    
                       

<li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/home') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Home</span> </a>
  </li>
  <li  class="active">
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/student_profile') ?>"><span class="fa fa-user"></span>  <span class="xn-text"> Profile</span> </a>
  </li>
  <li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/uploadresults') ?>"><span class="fa fa-floppy-o"></span>  <span class="xn-text"> Upload results </span> </a>
  </li>
  <li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/contact') ?>"><span class="fa fa-envelope"></span>  <span class="xn-text"> Contact</span> </a>
  </li>
                      <li class="xn-icon-button pull-right">
                        <a href="<?php echo base_url();?>index.php/Login_Controller/logout" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> <span class="xn-text"> Logout</span></a>                        
                    </li> 















                    </li>                                        
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li style="color:white; padding-top: 16px;" >Logged in as  <?php echo $name; ?> </li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Edulink</a></li>                    
                    <li class="active">Profile </li>
                </ul>
                <!-- END BREADCRUMB -->               



                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Hello <?php echo $name; ?> Welcome to Edulink</h2>
                </div>                   
                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-warning">
                                        <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title"><strong>Profile</strong></h3>
                                    
                                </div>
                        
                        
                        <form class="form-horizontal" enctype="multipart/form-data" onsubmit="return checkpropic();" action="<?php echo base_url("index.php/Update_Profile/update_Data")?>" method="POST">
                           


                                <div class="panel-body">                                                                        
                                    

<?php


                                    if ($profile_data->num_rows() > 0) {
                                        foreach ($profile_data ->result_array() as $row3) {

?>


                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">First Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" class="form-control" disabled value="<?php echo $row3['firstname'];?>"/ >
                                            </div>                                            

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Last Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input type="text" class="form-control" disabled value="<?php echo $row3['lastname'];?>"/>
                                            </div>                                            
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Password</label><button class="btn btn-primary" onclick="Passwordedit();" type="button" ><span class="fa fa-pencil"></span> Edit</button>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" id=password class="form-control" disabled value="<?php echo $row3['password'];?>" />
                                            </div>            
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Birthday</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control datepicker" disabled value="<?php echo $row3['dob'];?>"">                                            
                                            </div>
                                            
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                <input type="email" class="form-control" disabled value="<?php echo $row3['email'];?>"/>
                                            </div>                                            
                                           
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Telephone No1</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" class="form-control" id="primarytp" disabled value="<?php echo $row3['tpnumber'];?>"/>
                                            </div>                                            
                                           
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Telephone No2</label><button class="btn btn-primary" onclick="TP2edit();" type="button" ><span class="fa fa-pencil"></span> Edit</button>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                <input type="text" id="telephone2" name="tpnumber2" class="form-control" disabled value="<?php echo $row3['tpnumber2'];?>"/>
                                            </div>                                            
                                           
                                        </div>
                                    </div>
                                                                        
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Profile picture</label>
                                        <span class="help-block">Click to change profile picture</span>
                                        <div class="col-md-6 col-xs-12">                                                                       
                                <button type="button" class="btn btn-default" id="propicbutton" onclick="inputfileFunction()" ><span class="fa fa-camera"></span></button>                                                                 
                                            <input type="file" class="" name="filename" id="filename" title="" onchange=" readURL(this,'proimg');"/>
                                            

                                <div class="profile" style="width:30%; height:150px; ">
                                <img id=proimg src="<?php echo base_url($row3['propic']);?>" style="width:100%; height:120px; " alt="No image">
                                </div>










                                        </div>
                                    </div>
                                    

                                </div>
                                <div class="panel-footer">
                                    
                                    <button class="btn btn-primary pull-right" id="submitbutton" style="display:none;" onsubmit="">Submit</button>





<?php


}

}else{
?>
    <h3 class="panel-title"><strong>No Data</strong></h3>
<?php
}
?>





                                    
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

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('index.php/Login_Controller/logout') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->






        <!-- danger -->
        <div class="message-box message-box-danger animated fadeIn" id="message-box-danger" style="display: none;">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Danger</div>
                    <div class="mb-content">
                        <p id=pText ></p>
                    </div>
                    <div class="mb-footer">
                        <button type="button" class="btn btn-default btn-lg pull-right mb-control-close" onclick="    document.getElementById('message-box-danger').style.display = 'none';" >Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end danger -->


<!-- password changing box -->
<div class="message-box animated fadeIn open" id="passwordeditbox" style="display: none;">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-unlock-alt"></span> Password <strong>Change</strong></div>
                    <div class="mb-content">


                    <form class="form-horizontal" enctype="multipart/form-data" onsubmit="return submitpasswords()" action="<?php echo base_url("index.php/Update_Profile/update_Password")?>" method="POST">

                    <input type="text" name="tpforpassword" id=tpforpassword value='' hidden="hidden" >

<script>

document.getElementById("tpforpassword").value= document.getElementById("primarytp").value;
</script>


                        
                   <div class="form-group" id="divold">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Old Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span id=old class="fa fa-unlock-alt"></span></span>
                                                <input type="password" id=old_password name="old_password" class="form-control" placeholder="Type old password" onchange="old_password_check();" value="" onkeydown="disablesubmit()"  />
                                            </div>            
                                            
                                        </div>
                                    </div>
 

                   <div class="form-group ">                                        
                                        <label class="col-md-3 col-xs-12 control-label">New Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" id=passwordnew name="new_password" class="form-control" placeholder="Type new password"  value="" oninput="checktwopasswords()" onkeyup="checktwopasswords()">
                                               
                                            </div>            
                                            
                                        </div>
                                    </div>




                   <div class="form-group has-success" id="divretype">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Retype New Password </label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                
                                                <span class="input-group-addon"><span id=spanretype class="fa fa-unlock-alt  "></span></span>
                                                <input type="password" id=passwordnewretype class="form-control" placeholder="Retype new password"  value="" oninput="checktwopasswords()" onkeyup="checktwopasswords()">

                                              </div>            
                                              
                                        </div>
                                    </div> 

                          <div class="mb-footer">

                        <input name="changepasswordbutton" disabled="disabled" class="btn btn-default btn-lg pull-right pull up " id="submitbuttonpassword" type="submit" style="display: block;" value="Submit" >
                        <!-- Submit</button>
onsubmit="submitpasswords();"
 -->

                        <button class="btn btn-default btn-lg pull-right pull up mb-control-close"onclick="    document.getElementById('passwordeditbox').style.display = 'none';" >Close</button>
                    </div>
              



                    </form>                                  

                    </div>
                </div>
            </div>
        </div>














        
        <!-- END Message Boxes -->
        

            <!-- THIS PAGE PLUGINS -->






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
 










<script type="text/javascript">

function submitpasswords(){

  var twopasswords=checktwopasswords();
  if(twopasswords){
    var np=document.getElementById("passwordnew").value;
   
    return true;
  }else{

      sweetAlert("Oops...", "To change password, Both new password and retype password must be equal!", "error");
      return false;
  }

}


</script>

<?php
     if(isset($_SESSION["alert"])){

                ?>
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/theme-default.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href= "<?php echo base_url('public/css/fontawesome/font-awesome.min.css'); ?> "/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <!-- JS INCLUDE --> 
                <script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>

<?php

      if( $_SESSION["alert"]=="success"){

      
            
?>
<script type="text/javascript">
    swal("Password Set!", "New Password is set in your account!", "success");
      
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


<script type="text/javascript">

  function checktwopasswords(){
//     $('#submitbutton').prop('disabled',false);
  //   document.getElementById("submitbutton").disabled=false;
    var passwordnew=document.getElementById("passwordnew").value;
    //var passnewinput=document.getElementById("passwordnew")
    var passwordnewretype=document.getElementById("passwordnewretype").value;
    var spanretype=document.getElementById("spanretype")
    var divretype=document.getElementById("divretype")

    if(passwordnewretype==passwordnew){
      if(passwordnewretype==""){
       //document.getElementById("submitbuttonpassword").disabled=true;
        
        spanretype.className="fa fa-unlock-alt";
        divretype.className="form-group has-success"
        
        return false;
      }else{

        //removeAttr('disabled')
          // document.getElementById("submitbutton").disabled=false;
              spanretype.className="fa fa-check";
              divretype.className="form-group has-success ";
              
              return true;


      }

    }else{
      // document.getElementById("submitbuttonpassword").disabled=true;
      spanretype.className="fa fa-times";
      divretype.className="form-group has-error ";
      
                     
      return false;   

    }

  }
</script>
















<?php

      include 'imports.php';



?>

<script type="text/javascript">

function disablesubmit(){

   document.getElementById("submitbuttonpassword").disabled=true;

}

// function activatesubmit(){

//   var newtwo=checktwopasswords();
//   var oldp=old_password_check();

//   if(newtwo==true && oldp==true){


//   }else{
//     document.getElementById("submitbuttonpassword").disabled=true;
//   }

// }

  function old_password_check(){


 //disabled=true;

 var primarytp=document.getElementById("primarytp").value;
 var old_password=document.getElementById("old_password").value;

  var spanold=document.getElementById("old")
    var divold=document.getElementById("divold")
                 $.ajax({             
                     type:"post",
                     url : '<?php echo base_url();?>index.php/Update_Profile/check_Old_Password/',
                     data : {tp:primarytp,password:old_password},
                     success: function(data) {


                     respond=data.trim();

                     if(old_password==""){

                        spanold.className="fa fa-unlock-alt";
        divold.className="form-group"
               document.getElementById("submitbuttonpassword").disabled=true;
               return false;

                     }else{
                       // alert(respond);
                       if(respond=="True"){



                         spanold.className="fa fa-check";
        divold.className="form-group has-success"
        document.getElementById("submitbuttonpassword").disabled=false;
                                           
return true;
                         }
                         else{
                              spanold.className="fa fa-times";
      divold.className="form-group has-error ";
             document.getElementById("submitbuttonpassword").disabled=true;
            return false;
                         }

                         }
                            

                     },
                     error: function(jqXHR){
                        alert("Something Wrong");
                        //jqXHR.responseText
                     }
                 });
               
        }
        

</script>

  <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/actions.js"></script>   

     



    </body>
</html>



