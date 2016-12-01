<style type="text/css">
   .white_content {
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


  .black_overlay{
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


<?php
 if ($profile_data->num_rows() > 0) {
foreach ($profile_data ->result_array() as $row3) {
?>
<div class="col-md-3"
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default" >
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url($row3['profilepicture']);?>" alt="<?php echo $row3['first_name']."'s image";?>">
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name"><?php echo $row3['first_name']."  ".$row3['last_name'];?></div>
                                        <div class="profile-data-title">Details</div>
                                    </div>
                                    <div class="profile-controls">
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br><?php echo $row3['TP'];?></p>
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
                                    
                                   
    <div class="container">
    <div class="row">
        <h4>Student's other details attached</h4>
       











        <button type="button" class="btn btn-primary view-pdf" style="" href = "javascript:void(0)" onclick = "document.getElementById('newslight').style.display='block';document.getElementById('newsfade').style.display='block'" ><span>View PDF</span></button>
    
    <br><br>
    
    
    
    


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
</div>
          










</div>




<?php
}
?>






<div class="content-frame-body content-frame-body-left " style="height: 981px;">
                        
                        
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
                                    <span>Description</span>
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
                                    <span>Other description</span>
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
                                    <span>Description</span>
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
                                    <strong>A/L Certificate Image 1</strong>
                                    <span>Other description</span>
                                </div>                                
                            </a>                            
                             
                        </div>
                             
                     
                    </div>

           
       
        
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
        
        
     <?php

      include 'imports.php'
      ?>
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
     echo "Result proofs are not available";
}






?>

<?php




























}
}else{
    echo "No data Available";
}



?>


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
                            <a href="<?php echo site_url('login_controller../../../') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->