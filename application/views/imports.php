  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/bootstrap/css/bootstrap.css"> 
       
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/theme-default.css">

       
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/sweetalert-master/dist/sweetalert.css'); ?>">

 <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/jquery/jquery-ui.min.js"></script>
             <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/noty/jquery.noty.js'></script>
       
         <!-- START PLUGINS -->
        
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap.min.js"></script>           <script src="<?php echo base_url('public/sweetalert-master/dist/sweetalert.min.js'); ?>"></script>

        <!-- END PLUGINS -->
          <!-- START THIS PAGE PLUGINS calendar-->        
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/fullcalendar/fullcalendar.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->         

        <!-- START PLUGINS progress bars -->
        
              
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/morris/raphael-min.js"></script>
       <!-- <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/morris/morris.min.js"></script>       
        --><script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->    

        <!-- START THIS PAGE PLUGINS  targets-->        
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->    

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/actions.js"></script>
      <!--  
        <script type="text/javascript" src="<?php echo base_url();?>public/js/demo_dashboard.js"></script>
-->
         



        <!-- END PRELOADS -->              
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
      
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/summernote/summernote.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap-select.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>public/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
         


            <!-- THIS PAGE PLUGINS -->
        
            <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/noty/layouts/topCenter.js'></script>
            <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/noty/layouts/topLeft.js'></script>
            <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/noty/layouts/topRight.js'></script>            
            
            <script type='text/javascript' src='<?php echo base_url();?>public/js/plugins/noty/themes/default.js'></script>
            <script type="text/javascript">                                            
            /*<script type="text/javascript">   */                                         
                function notyConfirm(){
                    noty({
                        text: 'Do you want to continue?',
                        layout: 'topRight',
                        buttons: [
                                {addClass: 'btn btn-success btn-clean', text: 'Ok', onClick: function($noty) {
                                    $noty.close();
                                    noty({text: 'You clicked "Ok" button', layout: 'topRight', type: 'success'});
                                }
                                },
                                {addClass: 'btn btn-danger btn-clean', text: 'Cancel', onClick: function($noty) {
                                    $noty.close();
                                    noty({text: 'You clicked "Cancel" button', layout: 'topRight', type: 'error'});
                                    }
                                }
                            ]
                    })                                                    
                }                                            
            </script>
       
