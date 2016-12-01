<?php
 if ($profile_data->num_rows() > 0) {
foreach ($profile_data ->result_array() as $row3) {
?>
<div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
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
}
}else{
    echo "No data Available";
}
?>