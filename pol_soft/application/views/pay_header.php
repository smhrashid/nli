<?php
error_reporting(0);
//session_start();
if(!isset($_SESSION['user']))
{
	header("Location: login");
}
	//	echo $_SESSION['username']."<br>".$_SESSION['prjcode']."<br>".$_SESSION['ipaddr'];
		
		//unset($_SESSION['prjcode']);
	
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset='utf-8'>
    <title>Free HTML5 Bootstrap Admin Template</title>
    <!-- The styles -->
    <link href='<?php echo base_url();?>asset/css/bootstrap-cerulean.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/charisma-app.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url();?>asset/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>asset/css/animate.min.css' rel='stylesheet'>
    
    <link href='<?php echo base_url();?>asset/css/daterangepicker.css' rel='stylesheet'>
    
    

    <!-- jQuery -->
    <script src='<?php echo base_url();?>asset/bower_components/jquery/jquery.min.js'></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel='shortcut icon' href='<?php echo base_url();?>asset/img/favicon.png'>

<style>
.navbar-inner {
    color: #000;
    font-size: 20px;
    font-weight: 200;
    line-height: 1;
	letter-spacing: 2px;
	padding:10px 0 0 50px;
	font-weight:bold;

}

</style>
</head>

<body>
    <!-- topbar starts -->
    <div class='navbar navbar-default' role='navigation'>

        <div class='navbar-inner'>
            <button type='button' class='navbar-toggle pull-left animated flip'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            
            
              <div class='row'>
                <div class='col-xs-9 col-md-7'>Pragati Life Insurance Limited</div>
                <div class='col-xs-3 col-md-5' style='padding-left: 233px !important;'>
                            <!-- user dropdown starts -->
            <div class='btn-group pull-right'>
                <button class='btn btn-default dropdown-toggle' data-toggle='dropdown'>
                    <i class='glyphicon glyphicon-user'></i><span class='hidden-sm hidden-xs'> <?php echo $_SESSION['username'];?></span>
                    <span class='caret'></span>
                </button>
                <ul class='dropdown-menu'>
                    <li><a href='#'>Profile</a></li>
                    <li class='divider'></li>
                    <li><a href='logout?logout'>Logout</a></li>
                </ul>
            </div>
                </div>
              </div>
            


            <!-- user dropdown ends -->

                
            <!-- theme selector ends -->

     
                </li>

            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class='ch-container'>
    <div class='row'>
        
        <!-- left menu starts -->
        <div class='col-sm-2 col-lg-2'>
            <div class='sidebar-nav'>
                <div class='nav-canvas'>
                    <div class='nav-sm nav nav-stacked'>

                    </div>
                    <ul class='nav nav-pills nav-stacked main-menu'>
                        <li class='nav-header'>Main</li>
                        <li><a class='ajax-link' href='home'><i class='glyphicon glyphicon-home'></i><span> Home</span></a>
                        </li>
                        <li><a class='ajax-link' href='http://plil.pragatilife.com/p_info/'target='_blank'><i class='glyphicon glyphicon-eye-open'></i><span> Policy Ledger</span></a>
                        </li>
                        <li><a class='ajax-link' href='payprem'><i
                                    class='glyphicon glyphicon-edit'></i><span> Pay Premium</span></a></li>
                        <li><a class='ajax-link' href='paylist'><i class='glyphicon glyphicon-list-alt'></i><span> Transaction Statment</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        <div id='content' class='col-lg-10 col-sm-10'>
            <!-- content starts -->
            

