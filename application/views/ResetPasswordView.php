<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Edulink IMS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
          
       <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />
      <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <!-- <link rel="stylesheet" type="text/css" id="theme" href="application/css/theme-default.css"/> --> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/theme-default.css'); ?>">
        <link href="<?php echo base_url('public/alert/css/alert.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('public/alert/themes/default/theme.css');?>" rel="stylesheet" />
        <script src="<?php echo base_url('public/alert/js/alert.js');?>"></script> 

        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
               
                <div class="login-body">
                    <div class="login-title"><strong>Reset Password</strong></div>
                    <form action="<?php echo base_url('index.php/ResetPassword_Controller/changePassword/'.$userid);?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="New Password" name="newPwd" required />
                             <?php echo form_error('newPwd');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="newConfirmPwd" required />
                           
                             <?php echo form_error('newConfirmPwd');?>
                        </div>
                    </div>
                    <div class="form-group">
                      
                        <div class="col-md-6">
                           
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Save</button><br>
                             <!-- <a href="#">Sign Up</a> -->
                        </div>

                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; Edulink
                    </div>
                   
                </div>
            </div>
            
        </div>
    
      

        
    </body>
   <style>
        body.modal-open div.modal-backdrop { 
            z-index: -1;
    </style> 

    
    
}
    
</html>

<?php
     if(isset($_SESSION["alert2"])){

?>
        
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
<script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>

<?php
    if( $_SESSION["alert2"]=="success"){       
?>
<script type="text/javascript">
    swal("Submitted!", "Password reset successfully!", "success");
      
</script>

<?php
}elseif ($_SESSION["alert2"]=="unsuccess") {
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
unset($_SESSION['alert2']);
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">
<script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>

<?php
include 'imports.php';
?>







