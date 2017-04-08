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
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url('public/assets/EDULINK-Logo1.ico');?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
                    
                    <!-- START CONTENT FRAME BODY -->
                        <div class="block">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <button class="btn btn-default"><span class="fa fa-trash-o"></span> Delete Draft</button>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">From:</label>
                                <div class="col-md-10">                                        
                                    <select class="form-control select">
                                        <option>Dmitry (dmitryivaniuk@domain.com)</option>
                                        <option>Incognito (otheremail@domain.com)</option>                                        
                                    </select>
                                </div>
                            </div>                        
                            <div class="form-group">
                                <label class="col-md-2 control-label">To:</label>
                                <div class="col-md-9">                                        
                                    <input type="text" class="tagsinput" value="John (johndoe@domain.com)" data-placeholder="add email"/>                                
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-link toggle" data-toggle="mail-cc">Cc</button>
                                </div>
                            </div>
                            <div class="form-group hidden" id="mail-cc">
                                <label class="col-md-2 control-label">Cc:</label>
                                <div class="col-md-10">                                        
                                <input type="text" class="tagsinput" value="" data-placeholder="add email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Subject:</label>
                                <div class="col-md-10">                                        
                                    <input type="text" class="form-control" value="Re: Lorem ipsum dolor sit amet"/>                                
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Attachments:</label>
                                <div class="col-md-10">                                        
                                    <input type="file" class="file" data-filename-placement="inside"/>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">                            
                                    <textarea class="summernote_email"><p>Hello Dmitry,</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ligula risus, viverra sit amet purus id, ullamcorper venenatis leo. Ut vitae semper neque. Nunc vel lacus vel erat sodales ultricies sed sed massa. Duis non elementum velit. Nunc quis molestie dui. Nullam ullamcorper lectus in mattis volutpat. Nunc egestas felis sit amet ultrices euismod. Donec lacinia neque vel quam pharetra, non dignissim arcu semper. Donec ultricies, neque ut vehicula ultrices, ligula velit sodales purus, eget eleifend libero risus sed turpis. Fusce hendrerit vel dui ut pulvinar. Ut sed tristique ante, sed egestas turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Fusce sit amet dui at nunc laoreet facilisis. Proin consequat orci sollicitudin sem cursus, quis vehicula eros ultrices. Cras fermentum justo at nibh tincidunt, consectetur elementum est aliquam.</p>
<p>Nam dignissim convallis nulla, vitae porta purus fringilla ac. Praesent consectetur ex eu dui efficitur sollicitudin. Mauris libero est, aliquam a diam maximus, dignissim laoreet lacus.</p>
<p>Nulla ac nisi sodales, auctor dui et, consequat turpis. Cras dolor turpis, sagittis vel elit in, varius elementum arcu. Mauris aliquet lorem ac enim blandit, nec consequat tortor auctor. Sed eget nunc at justo congue mollis eget a urna. Phasellus in mauris quis tortor porta tristique at a risus.</p>
<p><strong>Best Regards<br/>John Doe</strong></p>                                        
                                    </textarea>                            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <button class="btn btn-default"><span class="fa fa-trash-o"></span> Delete Draft</button>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                        </form>
                        </div>
                        
                    <!-- END CONTENT FRAME BODY -->
            
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
    <!-- END SCRIPTS -->   





<?php
  include 'imports.php';
?>