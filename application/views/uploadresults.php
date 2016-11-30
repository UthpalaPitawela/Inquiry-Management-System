<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
 
       <link rel="icon" href="<?php echo base_url('public/Assets/EDULINK-Logo1.ico'); ?>" type="image/x-icon" />
       
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
      
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/boostrap/css/bootstrap.css'); ?>"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/theme-default.css'); ?>"> 
       
        <!-- EOF CSS INCLUDE -->











<script type="text/javascript">


 function checkimage() {

//alert(this.files[0].size/1024/1024);


var retval=true;
for (i = 1; i < 5; i++) { 
    object="addimage"+i;
    








        var fileElement = document.getElementById(object);
        var fileExtension = "";
  

        if ($('#'+object).get(0).files.length === 0) {
            
            retval=true;
        }else{

            if (fileElement.value.lastIndexOf(".") > 0) {
            fileExtension = fileElement.value.substring(fileElement.value.lastIndexOf(".") + 1, fileElement.value.length);
            }
        var ex=fileExtension.toLowerCase();
        switch(ex){

          case "gif":checkSizeAssignment(object,i);break;
          case "png":checkSizeAssignment(object,i);break;
          case "jpg":checkSizeAssignment(object,i);break;
          case "jpeg": checkSizeAssignment(object,i);break;
          case "bmp":checkSizeAssignment(object,i);break;
          case "pdf":checkSizeAssignment(object,i);break;
          


          default:alert("You must select a valid file type for input no (file type must be pdf) "+i);
            retval= false;break;
        }


        }


        
    }
    return retval;
}

function checkSizeAssignment(upimage,i){
            var oFile = document.getElementById(upimage).files[0]; 

            if (oFile.size > 2097152) // 2 mb for bytes.
            {
                alert("Each image or file size must under 2 Mb.Image number "+i+" is higher than 2 MB.");
                retval=false;
            }

}


</script>











































    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container" style="height: 662px; ">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo base_url('index.php/page_controller/loadingpages/home') ?>">Edulink</a>
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
                                <img src='<?php echo base_url($propic); ?>' alt="No image">
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $name; ?></div>
                                <div class="profile-data-title">Student</div>
                            </div>
                           
                        </div>                                                                        
                    </li>

















                    <li class="xn-title">Navigation</li>
                    
                       


<li>
  <a href="<?php echo base_url('index.php/page_controller/loadingpages/home') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Home</span> </a>
  </li>
  <li>
  <a href="<?php echo site_url('page_controller/loadingpages/student_profile') ?>"><span class="fa fa-user"></span>  <span class="xn-text"> Profile</span> </a>
  </li>
  <li class="active">
  <a href="<?php echo site_url('page_controller/loadingpages/uploadresults') ?>"><span class="fa fa-floppy-o"></span>  <span class="xn-text"> Upload results </span> </a>
  </li>
  <li>
  <a href="<?php echo site_url('page_controller/loadingpages/contact') ?>"><span class="fa fa-envelope"></span>  <span class="xn-text"> Contact</span> </a>
  </li>
                      <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> <span class="xn-text"> Logout</span></a>                        
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
                                        <li style="color:white; padding-top: 16px;" >Loged in as  <?php echo $name?></li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Edulink</a></li>                    
                    <li class="active">Upload Results</li>
                </ul>
                <!-- END BREADCRUMB -->                




                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Results Uploading</h2>
                </div>                   
                




                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <div class="panel-body">


<script type="text/javascript">

        function readURL(input,imgtg) {
           
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+imgtg).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


</script>




<?php
//$nn=(object)$news;


if ($current_results->num_rows() > 0) {
foreach ($current_results ->result_array() as $row3) {
//$row=$row->result();

 $im1=$row3['olimage1'];
    $im2=$row3['olimage2'];
    $im3=$row3['alimage1'];
    $im4=$row3['alimage2'];
    $file1=$row3['other'];


?>



<form enctype="multipart/form-data" action="<?php echo site_url("upload_result/update_Result")?>" method="POST" onsubmit="return checkimage();">



<table>
    <tr>
        
    <td>
          <div style="margin-left:10%; margin-top: 2%; float:left; ">
    <img for="file1" src=' <?php echo base_url($row3['olimage1']); ?>' id="image1" style=" " class="img-rounded" alt="O/L result image 1" width="304" height="236"  onclick="$('#addimage1').click();">
    <br>
    <input name="file1" type="file" id="addimage1" class="btn btn-info" style="width:303px;" onchange=" readURL(this,'image1');">
</div>
        
    </td>

    <td>
        
        <div style="margin-left:12%; margin-top: 2%; float: left;">
    <img src='<?php echo base_url($row3['olimage2']); ?>' id="image2" style=" "  class="img-rounded" alt="O/L result image 2" width="304" height="236">
    <br>
    <input name="file2" type="file" id="addimage2" class="btn btn-info" style="width:303px; " onchange=" readURL(this,'image2');">
</div>


    </td>

    <td>
        
        <div style="margin-left:12%; margin-top:2%; float:left; ">
    <img src='<?php echo base_url($row3['alimage1']); ?>' style="" id="image3" class="img-rounded" alt="A/L result image 1" width="304" height="236">
    <br>
    <input name="file3" type="file" id="addimage3" class="btn btn-info" style="width:303px;" onchange=" readURL(this,'image3');">
</div>

    </td>
    </tr>


    <tr>
        <td>
            
<div style="margin-left: 12%; margin-top:2%;float:left;">
    <img src='<?php echo base_url($row3['alimage2']); ?>' style="" id="image4" class="img-rounded" alt="A/L result image 2" width="304" height="236">
    <br>
    <input name="file4" type="file" id="addimage4" class="btn btn-info" style="float:bottom;width:303px;" onchange="readURL(this,'image4');">
</div>            
        </td>
    </tr>
    </table>
            
            <div style="margin-left: 2%; margin-top:10%;float:bottom; ">
  <input name="file5" type="file" id="pdf" style="width:303px;" class="btn btn-info" style="" onchange="">
</div>
<?php 

         if($row3['other']!="nolink"){
            ?>

 <div style="margin-top: 2%;margin-left: 5%; height:40vw;border:solid; width: 90%;" onload="this.style.height=this.contentDocument.body.scrollHeight +'px'; href="<?php echo base_url($row3['other']); ?>">
              
                  <object data="<?php echo base_url($row3['other']); ?> " type="application/pdf" width="100%" height="100%" >
                  alt : <a href="<?php echo base_url($row3['other']); ?> ">No other files have been uploaded</a>
                  </object>


            </div>
            <?php
          }else{
            echo "No other files have been uploaded";
          }
          ?>






    
   <br><br><br>
      
    <button style="margin-top: -3.2%;margin-left: 85%; display:block; float:left;" class="btn btn-info" type="button" id="deleteresult" name="deleteresults"  onclick="window.location='<?php echo site_url("upload_result/delete_Result");?>'" > Delete </button>


<input style="margin-top: -3.2%;margin-left: 91%; display:block;" class="btn btn-info" type="submit" id="resultsubmit" name="submitresults"  value="Update">
 




</form>



<?php
}
}else{
  $old=0;



   $im1="nolink";
    $im2="nolink";
    $im3="nolink";
    $im4="nolink";
    $file1="nolink";


  ?><h1><?php echo "No result"; ?> </h1>

<h2>You can Insert your files by selecting new files and click Post</h2><br>

 



<form enctype="multipart/form-data" style="" action="<?php echo site_url("upload_result/insert_Result")?>"  method="POST" onsubmit="return checkimage();">

<table>
    <tr>
        <td>
                  <div style="margin-left:12%; margin-top: 2%; float:left; ">


    <img for="file1" src=""  id="image1" class="img-rounded" alt="O/L result image 1" style=" width:304px !important; height:236px !important;">
    <br>
    <input name="file1" type="file" id="addimage1" class="btn btn-info" style=" width:303px; float: left;" onchange=" readURL(this,'image1'); ">


</div>
            
        </td>


        <td>
            
            <div style="margin-left:15%; margin-top: 2%; float: left; ">
    <img src="" class="img-rounded" alt="O/L result image 2" id="image2" width="304" height="236">
    <br>
    <input name="file2" type="file" id="addimage2" style="width:303px; float: left;" class="btn btn-info" onchange="readURL(this,'image2');">
    </div>


        </td>


        <td>
            

<div style="margin-left:15%; margin-top:2%; float:left; ">
    <img src="" class="img-rounded" alt="A/L result image 1" id="image3" width="304" height="236">
    <br>
    <input name="file3" type="file" id="addimage3" style="width:303px;" class="btn btn-info" onchange="readURL(this,'image3');">
</div>

            
        </td>
    </tr>

    <tr>
        
        <td>
            
            <div style="margin-left: 12%; margin-top:2%; float:left; ">
    <img src="" class="img-rounded" alt="A/L result image 2" width="304" height="236" id="image4">
    <br>
    <input name="file4" type="file" id="addimage4" style="width:303px;" class="btn btn-info" onchange="readURL(this,'image4');">
</div>


        </td>
    </tr>
<tr>

    <td>
        


<div style="margin-left: 12%; margin-top:10%;float:bottom;">

 <?php 
            echo "No other files have been uploaded";

          ?>
          


            
 <input name="file5" type="file" id="addpdf" style="width: 303px;" class="btn btn-info" onchange="">

          </div>

    </td>
</tr>


<tr>
    <td>
        
        <input style="margin-left:12%; margin-top: 15%; float:left; " class="btn btn-info" type="submit" id="newssubmit" name="submitresults" value="Post" >

    </td>
</tr>






</table>

</form>

<?php

}
?>















































                                   
                                </div>
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
                            <a href="<?php echo site_url('login_controller../../../') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
       
             <?php

      include 'imports.php'
      ?>

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>


































































































<?php

 

?>