<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Edulink  IMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->

    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/css/theme-default.css'); ?>"/>
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">Edulink IMS</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="assets/images/users/defaultuser.jpg" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">Name</div>
                    <div class="profile-data-title">Designation</div>
                </div>
                <div class="profile-controls">
                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>
        </li>
        <li class="xn-title">Menu</li>
        <li >
            <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Home</span></a>
        </li>
        <li class="active">
            <a href=""><span class="fa fa-files-o"></span> <span class="xn-text">Inquiries</span></a>

        </li>


        <li class="xn-openable">
            <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Admissions</span></a>

        </li>








    </ul>
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
    <!-- SEARCH -->
    <li class="xn-search">
        <form role="form">
            <input type="text" name="search" placeholder="Search..."/>
        </form>
    </li>
    <!-- END SEARCH -->
    <!-- SIGN OUT -->
    <li class="xn-icon-button pull-right">
        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
    </li>
    <!-- END SIGN OUT -->
    <!-- MESSAGES -->
    <li class="xn-icon-button pull-right">
        <a href="#"><span class="fa fa-comments"></span></a>
        <div class="informer informer-danger">4</div>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                <div class="pull-right">
                    <span class="label label-danger">4 new</span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-online"></div>
                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                    <span class="contacts-title">John Doe</span>
                    <p>Praesent placerat tellus id augue condimentum</p>
                </a>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-away"></div>
                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                    <span class="contacts-title">Dmitry Ivaniuk</span>
                    <p>Donec risus sapien, sagittis et magna quis</p>
                </a>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-away"></div>
                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                    <span class="contacts-title">Nadia Ali</span>
                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                </a>
                <a href="#" class="list-group-item">
                    <div class="list-group-status status-offline"></div>
                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                    <span class="contacts-title">Darth Vader</span>
                    <p>I want my money back!</p>
                </a>
            </div>
            <div class="panel-footer text-center">
                <a href="pages-messages.html">Show all messages</a>
            </div>
        </div>
    </li>
    <!-- END MESSAGES -->
    <!-- TASKS -->
    <li class="xn-icon-button pull-right">
        <a href="#"><span class="fa fa-tasks"></span></a>
        <div class="informer informer-warning">3</div>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
                <div class="pull-right">
                    <span class="label label-warning">3 active</span>
                </div>
            </div>
            <div class="panel-body list-group scroll" style="height: 200px;">
                <a class="list-group-item" href="#">
                    <strong>Phasellus augue arcu, elementum</strong>
                    <div class="progress progress-small progress-striped active">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                    </div>
                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                </a>
                <a class="list-group-item" href="#">
                    <strong>Aenean ac cursus</strong>
                    <div class="progress progress-small progress-striped active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                    </div>
                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                </a>
                <a class="list-group-item" href="#">
                    <strong>Lorem ipsum dolor</strong>
                    <div class="progress progress-small progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                    </div>
                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                </a>
                <a class="list-group-item" href="#">
                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                    <div class="progress progress-small">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                    </div>
                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                </a>
            </div>
            <div class="panel-footer text-center">
                <a href="pages-tasks.html">Show all tasks</a>
            </div>
        </div>
    </li>
    <!-- END TASKS -->
</ul>
<!-- END X-NAVIGATION VERTICAL -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">

</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

<div class="row">
<div class="col-md-12">
<!--index.php/user/register-->
<form action="" class="form-horizontal" method="post">
<div class="panel panel-default">
<div class="panel-heading">
    <h3 class="panel-title">Student Registation Form</h3>

</div>
<div class="panel-body">

</div>
<div class="panel-body">

<div class="row">

<div class="col-md-6">

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">First Name</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input name="fname" type="text" class="form-control" required/>
            </div>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Last Name</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input name="lname" type="text" class="form-control" required/>
            </div>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Gender</label>
        <div class="col-md-6 col-xs-12">
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Address</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input name="address" type="text" class="form-control" required/>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Country</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="country" class="form-control" required/>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Email</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="email" class="form-control" required/>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Contact No</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="contactno" class="form-control" required/>
            </div>

        </div>
    </div>


    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">NIC/Passport No</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" name="nic" class="form-control" />
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">O/L Results</label>
        <div class="col-md-9 col-xs-12">
            <div class="row">

                <div class="col-md-10">
                    <label class="col-md-10 col-xs-12 control-label">Above 5Cs including Maths and English</label>

                </div>

            </div>
            <div class="row">


                <div class="col-md-3">
                    <input type="radio" name="ol" value="Yes"> Yes
                    <input type="radio" name="ol" value="No">No


                </div>
            </div>
            <div class="row">
                <label class="col-md-2 col-xs-12 control-label">Remark</label>
                <div class="col-md-6 col-xs-12">
                    <textarea class="form-control" rows="1" name="remark"></textarea>

                </div>
            </div>


        </div>

    </div>


</div>
<div class="col-md-6">






    <div class="form-group">
        <label class="col-md-3 control-label">A/L Results</label>
        <div class="col-md-9 col-xs-12">
            <div class="row">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" name="subject1" class="form-control" placeholder="Subject" >
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-control select" name="grade1" id="res1" />

                    <option value="120">A</option>
                    <option value="100">B</option>
                    <option value="80">C</option>
                    <option value="60">S</option>
                    <option value="40">F</option>
                    </select>

                </div>
            </div>
            <div class="row">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" name="subject2" class="form-control" placeholder="Subject" >
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-control select" name="grade2" id="res2" />

                    <option value="120">A</option>
                    <option value="100">B</option>
                    <option value="80">C</option>
                    <option value="60">S</option>
                    <option value="40">F</option>

                    </select>

                </div>
            </div>
            <div class="row">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="text" name="subject3" class="form-control" placeholder="Subject" >
                    </div>
                </div>

                <div class="col-md-3">
                    <select class="form-control select" name="grade3" id="res3" />

                    <option value="120">A</option>
                    <option value="100">B</option>
                    <option value="80">C</option>
                    <option value="60">S</option>
                    <option value="40">F</option>

                    </select>

                </div>
            </div>
        </div>

    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Other</label>
        <div class="col-md-6 col-xs-12">
            <textarea class="form-control" rows="3" name="other"></textarea>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Mode Of Inquiry</label>
        <div class="col-md-6 col-xs-12" name="mode">
            <input type="radio" name="mode" value="Walking"> Walking
            <input type="radio" name="mode" value="Calls"> Calls
            <input type="radio" name="mode" value="Email"> Email/SMS

        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Potential Level For Next Intake </label>
        <div class="col-md-6 col-xs-12" name="mode">
            <input type="radio" name="intake" value="High"> High
            <input type="radio" name="intake" value="Medium"> Medium
            <input type="radio" name="intake" value="Low"> Low

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Potential Date Estimate</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                <input type="text" name="pdate" class="form-control" >

            </div>

        </div>
    </div>

    <div class="row">
        <label class="col-md-2 col-xs-12 control-label"></label>
        <div class="col-md-6 col-xs-12" id="ss">
            <button class="btn btn-primary pull-right" id="eligle">See Eligable Degrees</button>

        </div>
    </div>
    <div class="form-group">

        <div class="col-md-9 col-xs-12"><b>

            <textarea class="form-control" rows="3" name="ed" id="tt">

            </textarea></b>



        </div>
    </div>


</div>

</div>

</div>
<div class="panel-footer">
    <button class="btn btn-default">Clear Form</button>
    <button class="btn btn-primary pull-right">Submit</button>
</div>

</div>
</form>

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
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery/jquery-ui.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='<?php echo base_url('assets/js/plugins/icheck/icheck.min.js'); ?>'></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/bootstrap/bootstrap-datepicker.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/bootstrap/bootstrap-file-input.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/bootstrap/bootstrap-select.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/tagsinput/jquery.tagsinput.min.js'); ?>"></script>
<!-- END THIS PAGE PLUGINS -->

<!-- START TEMPLATE -->
<script type="text/javascript" src="<?php echo base_url('assets/js/settings.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/actions.js'); ?>"></script>


<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>



<script>
    $(document).ready(function(){

        $('button#eligle').click(function (e) {
            e.preventDefault();

            var  val1 = $("#res1 option:selected").val();
            var  val2 = $("#res2 option:selected").val();
            var val3 = $("#res3 option:selected").val();

            if (val1 == '120'){
                var mark1 = 120;

            }else if(val1 == '100'){
                var mark1 = 100;

            }else if(val1 == '80'){
                var mark1 = 80;
            }else{
                var mark1 = 60;
            }


            if (val2 == '120'){
                var mark2 = 120;
            }else if(val1 == '100'){
                var mark2 = 100;

            }else if(val1 == '80'){
                var mark2 = 80;
            }else{
                var mark2 = 60;
            }

            if (val3 == '120'){
                var mark3 = 120;
            }else if(val1 == '100'){
                var mark3 = 100;

            }else if(val1 == '80'){
                var mark3 = 80;
            }else{
                var mark3 = 60;
            }

            var tot = mark1+mark2+mark3;
            if(tot>260){
                var id = 1;
            }else if(tot>=240){
                var id = 2;
            }
            
            
            
            $.ajax({
                
                type:"get",
                url : 'user/geteligbledata/'+id,
                //url : 'view_register'+id,
                success: function (data) {

                    $('textarea#tt').html("");
                    $('textarea#tt').html(data);

                }
            })
    });


    });


</script>



