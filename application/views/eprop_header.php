<?php
//error_reporting(0);
//session_destroy();
/*
error_reporting(0);
//session_start();
header('Cache-Control: no cache'); 
if(!isset($_SESSION['user']))
{
	header("Location: login");
}
	//	echo $_SESSION['username']."<br>".$_SESSION['prjcode']."<br>".$_SESSION['ipaddr'];
		
		//unset($_SESSION['prjcode']);
*/	
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
    <link href='asset/css/bootstrap-cerulean.min.css' rel='stylesheet'>
    <link href='asset/css/charisma-app.css' rel='stylesheet'>
    <link href='asset/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='asset/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='asset/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='asset/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='asset/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='asset/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='asset/css/jquery.noty.css' rel='stylesheet'>
    <link href='asset/css/noty_theme_default.css' rel='stylesheet'>
    <link href='asset/css/elfinder.min.css' rel='stylesheet'>
    <link href='asset/css/elfinder.theme.css' rel='stylesheet'>
    <link href='asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='asset/css/uploadify.css' rel='stylesheet'>
    <link href='asset/css/animate.min.css' rel='stylesheet'>
    
    <link href='asset/css/daterangepicker.css' rel='stylesheet'>
    


    <!-- jQuery -->
    <script src='asset/bower_components/jquery/jquery.min.js'></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel='shortcut icon' href='asset/img/favicon.png'>

    <style>
        
        /* Global Button */
.transparent_btn {
	display: inline-block;
	padding: 10px 14px;
	color: #FFF;
	border: 1px solid #FFF;
	text-decoration: none;
	font-size: 14px;
                    font-weight: bold;
	line-height: 120%;
	background-color: rgba(255,255,255, 0);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: background-color 300ms ease;
	-moz-transition: background-color 300ms ease;
	transition: background-color 300ms ease;
	cursor: pointer;
}
.transparent_btn:hover {
	background-color: rgba(255,255,255, 0.3);
	color: #FFF;
}

/* Orange Button */
.transparent_btn.orange {
	color: #ffc65d;
	border-color: #ffc65d;
}
.transparent_btn.orange:hover {
	background-color: rgba(255, 198, 93, 0.3);
}

/* Blue Button */
.transparent_btn.blue {
	color: #05147E;
	border: none;
}
.transparent_btn.blue:hover {
	background-color: rgba(174, 221, 245, 0.3);
}

/* Green Button */
.transparent_btn.green {
	color: #86ec93;
	border-color: #86ec93;
}
.transparent_btn.green:hover {
	background-color: rgba(134, 236, 147, 0.3);
}
    </style>
</head>

<body class="container">
    <form action="process" method="post">
        <input type="submit" class="transparent_btn blue" value="Start from Beginning"/>
    </form>
  <!-- <a href="https://plil.pragatilife.com/eproposal/"  title="Back to download and tutorial page" class="btn back">Start from Beginning</a>  -->
