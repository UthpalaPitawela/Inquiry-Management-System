<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edulink</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
       <link rel="icon" href="<?php echo base_url('public/Assets/EDULINK-Logo1.ico'); ?>" type="image/x-icon" />
       
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
      
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/boostrap/css/bootstrap.css'); ?>"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/theme-default.css'); ?>"> 
       
        <!-- EOF CSS INCLUDE -->











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
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Edulink</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                                                                      
                    <li class="xn-title">Navigation</li>
                    <li>
                       



  <a href="<?php echo site_url('page_controller/loadingpages/home') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Home</span> </a>
  <a href="profile.php"><span class="fa fa-desktop"></span>  <span class="xn-text"> Profile</span> </a>
  <a href="<?php echo site_url('page_controller/loadingpages/uploadresults') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Upload results </span> </a>
  <a href="<?php echo site_url('page_controller/loadingpages/contact') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Contact</span> </a>
  <a href="<?php echo site_url('page_controller/loadingpages/logout') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Logout</span> </a>


















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
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Edulink</a></li>                    
                    <li class="active">Upload Results</li>
                </ul>
                <!-- END BREADCRUMB -->                


<?php
$name="R.M.R Wanigasekara";
//$_SESSION['name'];
?>


                
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

$tr=true;
//current_results->num_rows() > 0
if ($tr) {
//foreach ($current_results ->result_array() as $row3) {
//$row=$row->result();
?>





<form enctype="multipart/form-data" action="" method="post" onsubmit="return checkimage();">

  <div style="float:left !important;">
    <img for="file1" src='<?php echo $row3['olimage1'];?>' style="" id="image1" class="img-rounded" alt="O/L result image 1" width="304" height="236" onclick="$('#addimage1').click();">
    <br>
    <input name="file1" type="file" id="addimage1"  onchange="readURL(this,'image1');">

</div>

<div style="float:left !important;">
    <img src='<?php echo $row3['olimage2'];?>' id="image2" class="img-rounded" alt="O/L result image 2" width="304" height="236">
    <br>
    <input name="file2" type="file" id="addimage2" style="float:left !important;" onchange="readURL(this,'image2');">
</div>

<div style="float:left !important;">
    <img src='<?php echo $row3['alimage1'];?>' id="image3" class="img-rounded" alt="A/L result image 1" width="304" height="236">
    <br>
    <input name="file3" type="file" id="addimage3" style="float:left !important;" onchange="readURL(this,'image3');">
</div>

<div>
    <img src='<?php echo $row3['alimage2'];?>' id="image4" class="img-rounded" alt="A/L result image 2" width="304" height="236">
    <br>
    <input name="file4" type="file" id="addimage4" style="float:bottom !important;" onchange="readURL(this,'image4');">
</div><br><br>
<div>
  <input name="file5" type="file" id="pdf" style="float:bottom !important;" onchange="">
</div>
<?php 

         if($row3['other']!="nolink"){
            ?>

 <div style="width:95%;margin-left: 2%; height:40vw;border:solid;float:bottom;" onload="this.style.height=this.contentDocument.body.scrollHeight +'px'; href="<?php echo $row3['other']; ?>">
              
                  <object data=" <?php echo $row3['other']; ?> " type="application/pdf" width="100%" height="100%" >
                  alt : <a href="<?php echo $row3['other']; ?> ">No other files have been uploaded</a>
                  </object>


            </div>
            <?php
          }else{
            echo "No other files have been uploaded";
          }
          ?>


    
   <br><br><br>
      
    <input style="margin-top: -3.2%;margin-left: 85%; display:block; float:left;" class="button btn-1"  type="submit" id="deleteresult" name="deleteresults" value="Delete" >


<input style="margin-top: -3.2%;margin-left: 91%; display:block;" class="button btn-1" type="submit" id="resultsubmit" name="submitresults" value="Update" >


 




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

 



<form enctype="multipart/form-data" action="" method="post" onsubmit="return checkimage();">

  <div style="float:left !important;">


    <img for="file1" src="<?php echo base_url('public/Assets/im/1.png'); ?>"  id="image1" class="img-rounded" alt="O/L result image 1" style="width:304px !important; height:236px !important;">
    <br>
    <input name="file1" type="file" id="addimage1" class="btn btn-info" onchange="readURL(this,'image1');">

</div>

<div style="float:left !important;">
    <img src="<?php echo base_url('public/Assets/im/2.jpg'); ?>" class="img-rounded" alt="O/L result image 2" id="image2" width="304" height="236">
    <br>
    <input name="file2" type="file" id="addimage2" style="float:left !important; margin-right: 1.5%;margin-left: 1%;" class="btn btn-info" onchange="readURL(this,'image2');">
</div>

<div style="float:left !important;">
    <img src="<?php echo base_url('public/Assets/im/3.jpg'); ?>" class="img-rounded" alt="A/L result image 1" id="image3" width="304" height="236">
    <br>
    <input name="file3" type="file" id="addimage3" style="float:left !important; margin-right: 1%;" class="btn btn-info" onchange="readURL(this,'image3');">
</div>

<div>
    <img src="<?php echo base_url('public/Assets/im/4.jpg'); ?>" class="img-rounded" alt="A/L result image 2" width="304" height="236" id="image4">
    <br>
    <input name="file4" type="file" id="addimage4" style="float:bottom !important; margin-right: 1%;" class="btn btn-info" onchange="readURL(this,'image4');">
</div>
<br><br>
 <?php 
            echo "No other files have been uploaded";

          ?>
          <div>
            
 <input name="file5" type="file" id="addpdf" style="float:bottom !important;margin-right: 1%;" class="btn btn-info" onchange="">

          </div>
  
    <br>
      
   
<input class="btn btn-info" type="submit" id="newssubmit" name="submitresults" value="Post" >


 




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
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->

        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>




































































































 
