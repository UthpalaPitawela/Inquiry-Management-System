
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
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form action="<?php echo base_url('index.php/Login_Controller/validate_user');?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                        </div>
                    </div>
                    <div class="form-group">
                      
                        <div class="col-md-6">
                            <a href="" class="btn btn-link btn-block" data-toggle="modal" data-target="#myModal">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Log In</button><br>
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
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    <form action="<?php echo base_url('index.php/Email/ForgotPassword_Controller/sendPassword');?>" method="post">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forgot Password</h4>
        </div>
        <div class="modal-body">
            <div class="row">
            
            <div class="col-md-6">
                <label>Enter email address:</label><br>
               
            </div>
            <div class="col-md-6">
                <textarea class="form-control" rows="1" name="summary1" id="summary1"></textarea>
            </div>
         
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" id="save" class="btn btn-primary">Send Password</button>
        </div>

      </div>
      </form>
      
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
    if( $_SESSION["alert2"]=="insertsuccess"){       
?>
<script type="text/javascript">
    swal("", "Email is sent to reset the password!", "success");
      
</script>



<?php
}elseif ($_SESSION["alert2"]=="error") {
?>
    <script type="text/javascript">
    swal(
      '',
      'You are not an authorized user!',
      'error'
    );
    </script>
<?php
}elseif($_SESSION["alert2"] == "notsuccess"){
?>
<script type="text/javascript">
    swal(
      '',
      'Failed to send the mail!',
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




