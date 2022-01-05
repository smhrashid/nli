<?php  
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';

///echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';

?>

<style> 
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
.animated-btn {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    line-height: 80px;
    display: inline-block;
    text-align: center;
    background: #ff3f3f;
    position: relative;
}

.animated-btn::before, .animated-btn::after {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 50%;
    background: rgba(255, 63, 63, 0.8);
    animation: ripple-1 2s infinite ease-in-out;
    z-index: -1;
}

.animated-btn::after {
    background: rgba(255, 63, 63, 0.6);
    animation: ripple-2 2s infinite ease-in-out;
    animation-delay: 0.5s;
}

@keyframes ripple-1 {
    0% {
        transform: scale(1);
        opacity: 1;
    }

    100% {
        transform: scale(1.5);
        opacity: 0;
    }
}

@keyframes ripple-2 {
    0% {
        transform: scale(1);
        opacity: 1;
    }

    100% {
        transform: scale(1.7);
        opacity: 0;
    }
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/


</style>

<br><br>
    <div class="text-center">
        <!-- Animated button -->
        <a class="animated-btn text-white" href="http://202.51.184.66/cust_app/" style="color: #fffff !important;">
            
            <img src="asset/images/rhome.png" style="max-width: 50px !important; height: auto !important;">
            
            <i class="fa fa-play"></i></a>
    </div>

<!-- external javascript -->

<!-- external javascript -->

<script src="<?php echo base_url();?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url();?>asset/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url();?>asset/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url();?>asset/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url();?>asset/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url();?>asset/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url();?>asset/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url();?>asset/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url();?>asset/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url();?>asset/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url();?>asset/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url();?>asset/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url();?>asset/js/charisma.js"></script>

<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/js/moment.min.js"></script>
<script src="<?php echo base_url();?>asset/js/daterangepicker.min.js"></script>
<!-- 
<script>
$('form').attr('autocomplete','off');
</script>
-->
  <script>
$(document).ready(function() {

  $("#refresh").click(function() {
     $("#dsa").html();
  
	return false;
	});
});

  </script>

</body>
</html>
