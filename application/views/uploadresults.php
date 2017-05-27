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
        <title>Edulink</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
 
       <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />
       
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
      
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/boostrap/css/bootstrap.css'); ?>"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/theme-default.css'); ?>"> 
       
        <!-- EOF CSS INCLUDE -->




   <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert2/sweetalert2.css'); ?>">
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/jquery/jquery.min.js"></script>
        <!-- JS INCLUDE --> 
                <script src="<?php echo base_url('public/sweetalert2/sweetalert2.min.js'); ?>"></script>


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


<script type="text/javascript">



function confirmdelete(){

    //alert("a");

     swal({
        title: "Are you sure?",
        text: "Your all submitted files will be deleted!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, I am sure!',
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: true,
        closeOnCancel: false
    },
    function(isConfirm) {
        if (isConfirm) {

            window.location='<?php echo base_url("index.php/Upload_result/delete_Result");?>';

            // swal({
            //     title: 'Shortlisted!',
            //     text: 'Candidates are successfully shortlisted!',
            //     type: 'success'
            // }, function() {
            //     form.submit();
            // });

        } else {
        
swal({
  title: 'Cancelled!',
  text: 'Did not deleted.',
  timer: 1000
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      console.log('This will closed by the timer')
    }
  }
);


        }
    });

}
 function confirm() {

 swal({
        title: "Are you sure?",
        text: "Your selected files will be submitted!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, I am sure!',
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: true,
        closeOnCancel: false
    },
    function(isConfirm) {
        if (isConfirm) {

            var subval= checkimage();
            //alert(subval);
            if(subval==true){
              //  alert("awe");
                document.getElementById("emptyform").submit();

            }else{

                         swal(
  'Oops...',
  'Something went wrong!',
  'error'
)
            }
            // swal({
            //     title: 'Shortlisted!',
            //     text: 'Candidates are successfully shortlisted!',
            //     type: 'success'
            // }, function() {
            //     form.submit();
            // });

        } else {
           
            swal({
  title: 'Cancelled!',
  text: 'You did not submit',
  timer: 1000
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      console.log('This will closed by the timer')
    }
  }
);


        }
    });
}


function confirm2() {

 swal({
        title: "Are you sure?",
        text: "Your selected files will be submitted!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, I am sure!',
        cancelButtonText: "No, cancel it!",
        closeOnConfirm: true,
        closeOnCancel: false
    },
    function(isConfirm) {
        if (isConfirm) {

            var subval= checkimage();
            //alert(subval);
            if(subval==true){
              //  alert("awe");
                document.getElementById("dataform").submit();

            }else{

                           swal(
  'Oops...',
  'Something went wrong!',
  'error'
)
            }
            // swal({
            //     title: 'Shortlisted!',
            //     text: 'Candidates are successfully shortlisted!',
            //     type: 'success'
            // }, function() {
            //     form.submit();
            // });

        } else {
         
            swal({
  title: 'Cancelled!',
  text: 'You did not submit',
  timer: 1000
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      console.log('This will closed by the timer')
    }
  }
);            
        }
    });
}


 function checkimage() {

  // alert("dd");

//alert(this.files[0].size/1024/1024);


var retval=true;
for (i = 1; i < 11; i++) { 
    object="pdf"+i;
    








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

          case "pdf":retval= checkSizeAssignment(object,i);break;
         
          
   default: document.getElementById('pText').innerHTML = "Invalid file type for file "+i+". You can select only pdf";
          
              document.getElementById("message-box-danger").style.display = 'block';

            return false;break;
       


        }


        }

if(retval==false){
    return retval;
}
        
    }



    return retval;
    
}

function checkSizeAssignment(upimage,i){
            var oFile = document.getElementById(upimage).files[0]; 


            if (oFile.size > 10485760) // 5 mb for bytes.
            {

                document.getElementById('pText').innerHTML = "PDF "+i+" size is too large. Select an image of size atmost 5Mb.";
          
                document.getElementById("message-box-danger").style.display = 'block';
                return false;
                
            }else{
                  
               return true;
               }


}


</script>











































    </head>
    <body>
        <!-- START PAGE CONTAINER -->
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
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/home') ?>"><span class="fa fa-desktop"></span>  <span class="xn-text"> Home</span> </a>
  </li>
  <li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/student_profile') ?>"><span class="fa fa-user"></span>  <span class="xn-text"> Profile</span> </a>
  </li>
  <li class="active">
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/uploadresults') ?>"><span class="fa fa-floppy-o"></span>  <span class="xn-text"> Upload results </span> </a>
  </li>
  <li>
  <a href="<?php echo base_url('index.php/Page_Controller/loadingpages/contact') ?>"><span class="fa fa-envelope"></span>  <span class="xn-text"> Contact</span> </a>
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
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Upload Results</h2>
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

        function readURL(input,imgtg,anchor) {
           
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+imgtg).attr('src', e.target.result);
                    $('#'+anchor).attr('href', e.target.result);
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

 // $im1=$row3['olimage1'];
 //    $im2=$row3['olimage2'];
 //    $im3=$row3['alimage1'];
 //    $im4=$row3['alimage2'];
 //    $file1=$row3['other'];
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



<form enctype="multipart/form-data" id="dataform" action="<?php echo base_url("index.php/Upload_result/update_Result")?>" method="POST" >
<!-- onsubmit="return checkimage();return" -->
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
                                                <th>Add File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input name="name1" type="text" id="name1" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name1']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file1" type="file" id="pdf1" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input name="name2" type="text" id="name2" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name2']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file2" type="file" id="pdf2" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><input name="name3" type="text" id="name3" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name3']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file3" type="file" id="pdf3" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><input name="name4" type="text" id="name4" style="width:90%; margin-bottom: 2px;" value="<?php echo ($row3['name4']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file4" type="file" id="pdf4" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style=""  onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><input name="name5" type="text" id="name5" style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name5']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file5" type="file" id="pdf5" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><input name="name6" type="text" id="name6" placeholder="Enter Name of File" value=" <?php echo ($row3['name6']); ?> " style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" onchange=""></td>
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
                                                <td><input name="file6" type="file" id="pdf6" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td><input name="name7" type="text" id="name7" placeholder="Enter Name of File" value="<?php echo ($row3['name7']); ?>" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" onchange=""></td>
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
                                                <td><input name="file7" type="file" id="pdf7" style="width:200px; margin-bottom: 2px;"  class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td><input name="name8" type="text" id="name8"  style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name8']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file8" type="file" id="pdf8" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td><input name="name9" type="text" id="name9" style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name9']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file9" type="file" id="pdf9" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td><input name="name10" type="text" id="name10" style="width:90%; margin-bottom: 2px;" value=" <?php echo ($row3['name10']); ?>" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
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
                                                <td><input name="file10" type="file" id="pdf10" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
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
    <button class="btn btn-primary pull-right" type="button" id="deleteresult" name="deleteresults"  onclick="confirmdelete();" > Delete All</button>


<input  class="btn btn-primary pull-right" type="button" onclick="confirm2();" id="resultsubmit" name="submitresults"  value="Update">
 </div>
      




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

<h2>You can Insert your files by selecting new files and click Submit</h2><br>

 



<form enctype="multipart/form-data" style="" id="emptyform" action="<?php echo base_url("index.php/Upload_result/insert_Result")?>"  method="POST">

<!--  onsubmit="return checkimage();" -->
<table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>File Name</th>
                                               
                                                <th>Add File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input name="name1" type="text" id="name1" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file1" type="file" id="pdf1" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input name="name2" type="text" id="name2" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file2" type="file" id="pdf2" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><input name="name3" type="text" id="name3" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file3" type="file" id="pdf3" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><input name="name4" type="text" id="name4" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file4" type="file" id="pdf4" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style=""  onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><input name="name5" type="text" id="name5" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file5" type="file" id="pdf5" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><input name="name6" type="text" id="name6" placeholder="Enter Name of File" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" onchange=""></td>
                                                
                                                <td><input name="file6" type="file" id="pdf6" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td><input name="name7" type="text" id="name7" placeholder="Enter Name of File" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" onchange=""></td>
                                                
                                                <td><input name="file7" type="file" id="pdf7" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td><input name="name8" type="text" id="name8"  style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file8" type="file" id="pdf8" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td><input name="name9" type="text" id="name9" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file9" type="file" id="pdf9" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td><input name="name10" type="text" id="name10" style="width:90%; margin-bottom: 2px;" class="btn btn-default" style="" placeholder="Enter Name of File" onchange=""></td>
                                                
                                                <td><input name="file10" type="file" id="pdf10" style="width:200px; margin-bottom: 2px;" class="btn btn-info" style="" onchange=""></td>
                                            </tr>
                                        </tbody>
                                    </table>


 <input style="" class="btn btn-info pull-right" type="button" onclick=" confirm();" id="newssubmit" name="submitresults" value="Submit" >



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


        <!-- START PRELOADS -->
       
             <?php

      include 'imports.php'
      ?>

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    
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

      if( $_SESSION["alert"]=="insertsuccess"){

      
            
?>
<script type="text/javascript">
    swal("Submitted!", "Inserted data were submitted!", "success");
      
</script>

          <?php
        }elseif( $_SESSION["alert"]=="deletesuccess"){

      
            
?>
<script type="text/javascript">
    swal("Successfully Deleted!", "All the result data ware deleted!", "success");
      
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





    </body>

</html>


































































































<?php

 

?>