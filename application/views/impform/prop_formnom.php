<?php

if (!isset($_SESSION['prem_plan_name']['WEBSEQ'])){
    $query_seq = "select lpad(IPL.WEBPROPOSAL_SEQ.NEXTVAL,8,0) WEBSEQ from dual";
    $q_seq  = $this->db->query($query_seq );
    foreach ($q_seq ->result() as $r_seq ):
        $seq = array("WEBSEQ"=>$r_seq->WEBSEQ);
    endforeach;  
    $_SESSION['prem_plan_name']=array_merge($seq,$_POST,$_SESSION['prem_plan_name']);
}
?>
<style>
      * {
        border-radius:10px;
      }

      .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding: 1px;
    
}
.box{ display: none; }
.nid{}
.bc{}
.pp{}
.dl{}
.tin{}
.ot{}
</style>
<form action="appdata" method="post"  enctype="multipart/form-data">

    <?php
     // Applicaent Photo
    
   $photo= $this->fileup_model->get_upfile($_FILES['APPPHOTO'],'prphoto');
    
if (isset ($_FILES['APPNID'])||isset ($_FILES['APPBIRTHID'])||isset ($_FILES['APPPASSPORT'])||isset ($_FILES['APPDRIVINGID'])||isset ($_FILES['APPETIN'])||isset ($_FILES['APPOTHERID'])){
        if ($_SESSION['prem_plan_name']['perid']=='nid'){
            $imagepath=$this->fileup_model->get_upfile($_FILES['APPNID'],'prid');
        }
        if ($_SESSION['prem_plan_name']['perid']=='bc'){
            $imagepath=$this->fileup_model->get_upfile($_FILES['APPBIRTHID'],'prid');
        }
        if ($_SESSION['prem_plan_name']['perid']=='pp'){
            $imagepath=$this->fileup_model->get_upfile($_FILES['APPPASSPORT'],'prid');
        }
        if ($_SESSION['prem_plan_name']['perid']=='dl'){
            $imagepath=$this->fileup_model->get_upfile($_FILES['APPDRIVINGID'],'prid');
        }
        if ($_SESSION['prem_plan_name']['perid']=='tin'){
            $imagepath=$this->fileup_model->get_upfile($_FILES['APPETIN'],'prid');
        }
        if ($_SESSION['prem_plan_name']['perid']=='ot'){
             $imagepath=$this->fileup_model->get_upfile($_FILES['APPOTHERID'],'prid');
        }
}
$addr=$_SESSION['prem_plan_name']['add1'].','.$_SESSION['prem_plan_name']['add2'].','.$_SESSION['prem_plan_name']['add3'].','.$_SESSION['prem_plan_name']['add4'];
$paddr=$_SESSION['prem_plan_name']['peraddr1'].','.$_SESSION['prem_plan_name']['peraddr2'].','.$_SESSION['prem_plan_name']['peraddr3'].','.$_SESSION['prem_plan_name']['peraddr4'];
$sex=strtolower($_SESSION['prem_plan_name']['sex']);
if ($sex=='m'){
    $chfa=$_SESSION['prem_plan_name']['NAME'];
    $chma=$_SESSION['prem_plan_name']['SPNAME'];
  }
  if ($sex=='f'){
      $chfa=$_SESSION['prem_plan_name']['SPNAME'];
      $chma=$_SESSION['prem_plan_name']['NAME'];
  }
  
  for ($x = 1; $x <= $_SESSION['prem_plan_name']['nom_num']; $x++) {
    echo '
<script>
        function myFunction'.$x.'() {
            var x'.$x.' = document.getElementById("mySelect'.$x.'").value;
            if (x'.$x.' === "4") { 
                document.getElementById("nomname'.$x.'").value = "'.$_SESSION['prem_plan_name']['SPNAME'].'";
                document.getElementById("nomspname'.$x.'").value = "'.$_SESSION['prem_plan_name']['NAME'].'";    
                document.getElementById("nomfa'.$x.'").value = "";
                document.getElementById("nomma'.$x.'").value = "";
            }
            else if (x'.$x.' === "1") { 
                document.getElementById("nomname'.$x.'").value = "'.$_SESSION['prem_plan_name']['FHNAME'].'";
                document.getElementById("nomspname'.$x.'").value = "'.$_SESSION['prem_plan_name']['MHNAME'].'";
                document.getElementById("nomfa'.$x.'").value = "";
                document.getElementById("nomma'.$x.'").value = "";
            }
            else if (x'.$x.' === "2") { 
                document.getElementById("nomname'.$x.'").value = "'.$_SESSION['prem_plan_name']['MHNAME'].'";
                document.getElementById("nomspname'.$x.'").value = "'.$_SESSION['prem_plan_name']['FHNAME'].'";
                document.getElementById("nomfa'.$x.'").value = "";
                document.getElementById("nomma'.$x.'").value = "";
            }
            else if (x'.$x.' === "11") { 
                document.getElementById("nomname'.$x.'").value = "";
                document.getElementById("nomspname'.$x.'").value = "";
                document.getElementById("nomfa'.$x.'").value = "'.$chfa.'";
                document.getElementById("nomma'.$x.'").value = "'.$chma.'";
            }
            else if (x'.$x.' === "12") { 
                document.getElementById("nomname'.$x.'").value = "";
                document.getElementById("nomspname'.$x.'").value = "";
                document.getElementById("nomfa'.$x.'").value = "'.$chfa.'";
                document.getElementById("nomma'.$x.'").value = "'.$chma.'";
            }
            
            else if (x'.$x.' === "5") { 
                document.getElementById("nomname'.$x.'").value = "";
                document.getElementById("nomspname'.$x.'").value = "";
                document.getElementById("nomfa'.$x.'").value = "";
                document.getElementById("nomma'.$x.'").value = "";
            }
                        
            else if (x'.$x.' === "3") { 
                document.getElementById("nomname'.$x.'").value = "";
                document.getElementById("nomspname'.$x.'").value = "";
                document.getElementById("nomfa'.$x.'").value = "";
                document.getElementById("nomma'.$x.'").value = "";
            }
        }
    </script>
    ';
      $relopt='<div class="input-group">
      <span class="input-group-addon">সম্পর্ক</span>
    <select id="mySelect'.$x.'" onchange="myFunction'.$x.'()" name="NOMREL'.$x.'" class="form-control" required>
                       <option disabled selected>Choose an option</option>
                       <option value="4">স্ত্রী</option>
                       <option value="3">স্বামী</option>
                       <option value="1">পিতা</option>
                       <option value="2">মাতা </option>
                       <option value="11">পুত্র</option>
                       <option value="12">কন্যা</option>
                       <option value="5">ভাই</option>
</select>
</div>';
       echo '<div><label>'.$x.' মনোনীত ব্যাক্তি </label></div>';
            $APPNID='unsuccessful.jpg';
            $APPBIRTHID='unsuccessful.jpg';
            $APPPASSPORT='unsuccessful.jpg';
            $APPDRIVINGID='unsuccessful.jpg';
            $APPETIN='unsuccessful.jpg';
            $APPOTHERID='unsuccessful.jpg';
  
        if ($_SESSION['prem_plan_name']['perid']=='nid'){
            $APPNID=$imagepath;
        }
        if ($_SESSION['prem_plan_name']['perid']=='bc'){
            $APPBIRTHID=$imagepath;
        }
        if ($_SESSION['prem_plan_name']['perid']=='pp'){
            $APPPASSPORT=$imagepath;
        }
        if ($_SESSION['prem_plan_name']['perid']=='dl'){
            $APPDRIVINGID=$imagepath;
        }
        if ($_SESSION['prem_plan_name']['perid']=='tin'){
            $APPETIN=$imagepath;
        }
        if ($_SESSION['prem_plan_name']['perid']=='ot'){
            $APPOTHERID=$imagepath;
        }
$all_image = array("PHOTO"=>$photo, 
                            "APPNID"=>$APPNID,
                            "APPBIRTHID"=>$APPBIRTHID,
                            "APPPASSPORT"=>$APPPASSPORT,
                            "APPDRIVINGID"=>$APPDRIVINGID,
                            "APPETIN"=>$APPETIN,
                            "APPOTHERID"=>$APPOTHERID
    );
$_SESSION['prem_plan_name']=array_merge($all_image,$_SESSION['prem_plan_name']);
       ?>


<div class="controls"> 

            <div class="row">
                <div class="col-sm-2">
                 <?= $relopt;?>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-6">
                        
                        <div class="input-group">
                            <span class="input-group-addon">নাম</span>  
                            <input type="text"  class="form-control" name="NOMNAME<?= $x;?>" placeholder="মনোনীত ব্যাক্তির নাম "  id="nomname<?= $x;?>">
                        </div>
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">মনোনীতকের ছবি</span>
                                <input name="NOMPHOTO<?= $x;?>" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                            </span>
                            <span class="form-control"></span>
                        </div>  
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-6">
                        <input type="text"  class="form-control"  name="NOMID<?= $x;?>" placeholder=" এন এই  ডি / জন্ম সনদ নং">
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();"> এন এই  ডি ছবি</span>
                                <input name="NOMIDF<?= $x;?>" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                            </span>
                            <span class="form-control"></span>
                        </div>  
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">পিতা</span>  
                            <input type="text"  class="form-control" name="NFHNAME<?= $x;?>" placeholder="পিতার নাম" id="nomfa<?= $x;?>" required value="abc">
                        </div>
                </div>
                <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">মাতা</span>  
                            <input type="text"  class="form-control" name="NMHNAME<?= $x;?>" placeholder="মাতার নাম " id="nomma<?= $x;?>" required value="abc">
                        </div>
                </div>  
                <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">স্বামী/স্ত্রী</span>  
                            <input type="text"  class="form-control" name="NSPNAME<?= $x;?>" placeholder="স্বামী/স্ত্রীর নাম " id="nomspname<?= $x;?>" value="abc">
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">পেশা</span>  
                                <select name="NOCCUP<?= $x;?>" class="form-control" required>
                                    <option value="" disabled selected>Select Occupation</option>
                                                  <?php 
                                                  $query_ocup = "SELECT * FROM ipl.OCCUP where occup IN (3,12,14,55,58,59,60,61,62,63,64,76,79,90,95,96) order by occup asc";
                                                  $q_ocup = $this->db->query($query_ocup);
                                                  foreach ($q_ocup->result() as $r_ocup):
                                                      $asd=$r_ocup->OCCUP;
                                                      echo '<option value='.$asd.'>'.$r_ocup->OCCUPNAME.'</option>';
                                                  endforeach;
                                                  ?>
                                </select>
                        </div>
                </div>
                  <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">জন্ম তারিখ</span>  
                            <input type="date"  class="form-control" name="NDOB<?= $x;?>" placeholder="জন্ম তারিখ" required value="1988-11-11">
                        </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                            <span class="input-group-addon">মোবাইল</span>  
                            <input type="tel"  class="form-control" name="NMOBILE<?= $x;?>" placeholder="মোবাইল" value="012333">
                    </div>
                </div>  
                <div class="col-sm-3">
                    <div class="input-group">
                            <span class="input-group-addon">শতকরা</span>  
                            <input type="number"  class="form-control" name="NOMPAR<?= $x;?>" placeholder="শতকরা হার" value="<?=floor(100/$_SESSION['prem_plan_name']['nom_num']);?>">
                    </div>
                </div>
            </div>        
    
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon">বর্তমান ঠিকানা</span>  
                        <input type="text"  class="form-control" name="PRESENTADDR<?= $x;?>" placeholder="বর্তমান ঠিকানা" value="Same of the applicant" >
                    </div>
                </div>
                    <div class="col-sm-6">   
                        <div class="input-group">
                            <span class="input-group-addon">স্থায়ী ঠিকানা</span>  
                            <input type="text"  class="form-control" name="NOMPURMADD<?= $x;?>" placeholder="স্থায়ী ঠিকানা" value="Same of the applicant" >
                        </div>
                    </div>
            </div>
    
<?php
}
?>
</div><!--/fluid-row-->
</div><!--/.fluid-container-->

<div><label>আপনার জীবনের উপর অন্য কোনো বীমা থাকলে উল্ল্যেখ করুন </label></div>

                       <div class="controls-life"> 
                            <div id="field-life"> 
                                <div class="entry">
                                    <table class=" table" style="padding:0px !important;">
                                    <tr style="padding:0px !important;">
                                        <td style="padding:0px !important;">
                                            <input type="text"  class="form-control" name="otpolno[]" placeholder="বীমা পাত্র নং" value="123">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="text"  class="form-control" name="otcm[]" placeholder="বীমা প্রটেশনের  নাম" value="plil">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="number"  class="form-control" name="otprem[]" placeholder="বীমা অংক" value="500000">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="text"  class="form-control" name="otpla[]" placeholder="পরিকল্প নং ও মেয়াদ" value="10">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="date"  class="form-control" name="otodat[]" placeholder="বীমা শুরুর তারিখ" value="2011-11-11">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="text"  class="form-control" name="otprop[]" placeholder="কি শর্তে গৃহীত">
                                        </td>
                                      <td style="padding:0px !important;">               	
                                          <span class="input-group-btn">
                                                <button class="btn btn-success btn-life-add" type="button">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                          </span>
                                      </td>
                                    </tr>
                                    </table>
                                </div>
                        <script>
                        $(function()
                        {
                            $(document).on('click', '.btn-life-add', function(e)
                            {
                                e.preventDefault();

                                var controlForm = $('.controls-life #field-life:first'),
                                    currentEntry = $(this).parents('.entry:first'),
                                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                                newEntry.find('input').val('');
                                controlForm.find('.entry:not(:last) .btn-life-add')
                                    .removeClass('btn-life-add').addClass('btn-life-remove')
                                    .removeClass('btn-success').addClass('btn-danger')
                                    .html('<span class="glyphicon glyphicon-minus"></span>');
                            
                            }).on('click', '.btn-life-remove', function(e)
                            {
                                        $(this).parents('.entry:first').remove();

                                        e.preventDefault();
                                        return false;
                                });
                        });
                        </script>          
   			</div>  
    </div>
    <div><label>আপনার জীবনের উপর প্রতিকূল প্রভাবকারী কোন অতিরিক্ত তথ্য আছে কি?</label> 
               <label><input type="radio" name="exinfo" value="y"/> হ্যা </label>
               <label><input type="radio" name="exinfo" value="n" checked/> না </label></div>
<div><label>বীমা গ্রহীতার স্বাস্থ সম্পর্কিত বিবৃতি </label></div>
<div style="padding-left:20px;">(ক) আপনি কি এখন সম্পূর্ণ সুস্থ ?
               <label><input type="radio" name="comok" value="y" checked/>  হ্যা   </label>
               <label><input type="radio" name="comok" value="n"/>  না </label> </div>
<div style="padding-left:20px;">(খ) আপনি কি অতীতে এবং বর্তমানে হৃদরোগ, ডায়াবেটিস, উচ্চরক্তচাপ, যক্ষা, হাপানী, কিডনী, বাতন্নুর, জন্ডিস, নিউমোনিয়া, শ্বাসযন্ত্রের রোগ,
                      পাকস্থলী বা অন্ত্রের রোগ, মৃত্রাশয়ের রোগ, যৌন রোগ, এইডস (8005), ক্যান্সার, মানসিক রোগ অথবা অন্য কোন পীড়া বা রোগে ভূগেছেন
                      বাভূগছেন?
      <label><input type="radio" name="illness" value="y" />  হ্যা   </label>
    <label><input type="radio" name="illness" value="n" checked/>  না </label></div>
<div style="padding-left:20px;">(গ) আপনি কি কোন অস্ত্রোপচার এবং দূর্ঘটনার সম্মুখীন হয়েছেন? 
                      <label><input type="radio" name="optacc" value="y" />  হ্যা   </label>

                      <label><input type="radio" name="optacc" value="n" checked/>  না </label></div>
<div><label>আপনার বর্তমান শাররীক পরিমান উল্লেখ করুন </label></div>
<div style="padding-left:20px;">
<div class="row">
	<div class="col-sm-4">
    	
        	<div class="col-sm-6">
            	<div class="input-group">
                	    <span class="input-group-addon">উচ্চতা </span>
                            <input type="number"  class="form-control" style=" max-width: 50%; height: 50px;" name="hfit" placeholder="ফুট" required value="5"/>
                            <input type="number"  class="form-control" style=" max-width: 50%; height: 50px;" name="hincs" placeholder="ইঞ্চি" required value="7">
                </div>
            </div>
            <div class="col-sm-6">
            	<div class="input-group">
                	<span class="input-group-addon">ওজন </span>
                        <input type="number"  class="form-control"style=" height: 50px;" name="weight" placeholder="কেজি" required value="56">
                </div>
            </div>
        
    </div>
    <div class="col-sm-8">
      
        <div class="col-sm-4">
        <div class="input-group">
            <span class="input-group-addon">বুকার ম্যাপ<br> (পূর্ণ শ্বাসসহ)</span>
            <input type="number"  class="form-control" style=" height: 50px;" name="inbrith" placeholder="ইঞ্চি" required value="35">
        </div>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                        <span class="input-group-addon">বুকার ম্যাপ<br> (শ্বাস ত্যাগ করার পর )</span>
                        <input type="number"  class="form-control" style=" height: 50px;" name="outbrith" placeholder="ইঞ্চি" required value="34">

            </div>
        </div>  
        <div class="col-sm-4">
            <div class="input-group">
                        <span class="input-group-addon">নাভি বরাবর পাটের ম্যাপ</span>
                        <input type="number"  class="form-control"  style=" height: 50px;" name="stom" placeholder="ইঞ্চি" required value="24">

            </div>
        </div>
    
    </div>
    
</div>
<div style="padding-left:5px;">
<input type="text"  class="form-control" name="spmark" placeholder="(খ)  শনাক্তকরণের জন্য কোনো বিশেষ চিহ্ন থাকলে লিখুন" />
</div>
<script>
    var getFront = new selectFront;
    var getBack = new selectBack;
    getFront.targets('choose','selected');
    getPol.targets('choospol','selectedpol');

</script>
    <?php
    if ($sex=='f'){?>
     <label class="control-label" for="inputSuccess1">মহিলা প্রস্তাবিকার ক্ষেত্রে অতিরিক্ত প্রশ্নমালা ৪ হ্যা/না ঘরে টিক দিন </label><br>  
     <div class="row">
		<div class="col-sm-4">
             <label class="control-label" for="inputSuccess1">আপনি কি এখন সন্তান সম্ভবা?</label>
             <label><input type="radio" name="pregn" value="y" required/> হ্যা </label>
    		<label><input type="radio" name="pregn" value="n" checked/> না </label>
    	</div>
    	<div class="col-sm-4">
            <label class="control-label" for="inputSuccess1">সন্তান প্রসব সব সময় স্বাভাবিক হয়েছে কি?</label>
   			<label><input type="radio" name="normdel" value="y" required/> হ্যা </label>
    		<label><input type="radio" name="normdel" value="n" checked/> না </label>
    	</div>
        <div class="col-sm-4">
        	<div class="input-group">
                    <span class="input-group-addon">শেষ সন্তানের জন্ম তারিখ </span><input class="form-control" type="date" name="lc_dob">

        	</div>
    	</div>
    </div>
    <div class="row">
		<div class="col-sm-6">
            <label class="control-label" for="inputSuccess1">আপনি কি কোন স্ত্রী রোগে, জরায়ু বা স্তনের গীড়ায় ভূগেছেন/ভূগছেন ? </label>
    		<label><input type="radio" name="brescan" value="y" required/> হ্যা </label>
            <label><input type="radio" name="brescan" value="n" checked/> না </label>
        </div>
       	<div class="col-sm-6">
        	<div class="input-group">
                    <span class="input-group-addon">আপনার সর্বশেষ মাসিকের তারিখ লিখুন </span><input class="form-control" type="date" name="lc_minst" value="11-11-2011" required>
            </div>
        </div>
    </div>       
    <?php
    }
?>
<label>পারিবারিক ইতিসাহিস</label>

<table class="table" style="padding:0px !important;">

  <tr style="padding:0px !important;">
    <th rowspan="2" style="padding:0px !important;">সম্পর্ক</th>
    <th colspan="3" style="padding:0px !important;"><div align="center">জীবিত</div></th>
    <th colspan="4" style="padding:0px !important;"><div align="center">মৃত</div></th>
  </tr>
  <tr>
    <th style="padding:0px !important;"><div style="max-width: 45px;">সংখ্যা</div></th>
    <th style="padding:0px !important;"><div style="max-width: 45px;">বয়স</div></th>
    <th style="padding:0px !important;"><div>বর্তমান শাররীক অবস্থা</div></th>
    <th style="padding:0px !important;"><div>মৃত্যুকালে<br>বয়স</div></th>
    <th style="padding:0px !important;"> মৃত্যুর কারণ</th>
    <th style="padding:0px !important;"><div>শেষ রোগের স্থায়িত্ব</div></th>
    <th style="padding:0px !important;"><div style="max-width: 60px;">মৃত্যুর সন</div></th>
  </tr>
  <tr style="padding:0px !important;">
    <th style="padding:0px !important;">পিত</th>
    <td style="padding:0px !important;"><input type="number"  class="form-control" name="NUMFH" style="max-width: 60px;" value="1"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEFH"  value="69"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="PREFH" value="good"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDFH" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="COSFH" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="LILLFH" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="DYFH" value="na"></td>
  </tr>
  <tr>
    <th style="padding:0px !important;">মাতা</th>
    <td style="padding:0px !important;"><input type="number"  class="form-control" name="NUMMH" style="max-width: 60px;" value="1"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEMH" value="59"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="PREMH" value="good"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDMH"  value="na" ></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="COSMH" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="LILLMH" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="DYMH"  value="na"></td>
  </tr>
  <tr>
    <th style="padding:0px !important;">ভাই</th>
    <td style="padding:0px !important;"><input type="number"  class="form-control" name="NUMBRO" style="max-width: 60px;" value="2"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEBRO"value="31"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="PREBRO" value="good"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDBRO"  value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="COSBRO" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="LILLBRO" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="DYBRO"  value="na"></td>
  </tr>
  <tr style="padding:0px !important;">
    <th style="padding:0px !important;">বোন</th>
    <td style="padding:0px !important;"><input type="number"  class="form-control" name="NUMSIS" style="max-width: 60px;" value="2"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGESIS"  value="30"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="PRESIS" value="good"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDSIS"  value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="COSSIS" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="LILLSIS" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="DYSIS"  value="na"></td>
  </tr>
  <tr style="padding:0px !important;">
    <th style="padding:0px !important;">স্বামী/স্ত্রী</th>
    <td style="padding:0px !important;"><input type="number"  class="form-control" name="NUMSP" style="max-width: 60px;" value="1"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGESP" value="39"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="PRESP" value="good"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDSP"  value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="COSSP" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="LILLSP" value="na"> </td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="DYSP" value="na"></td>
  </tr>
  <tr>
    <th style="padding:0px !important;">ছেলে</th>
    <td style="padding:0px !important;"><input type="number"  class="form-control" name="NUMSON" style="max-width: 60px;" value="2"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGESON"  value="8"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="PRESON" value="good"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDSON"  value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="COSSON" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="LILLSON" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="DYSON"  value="na"></td>
  </tr>
    <tr style="padding:0px !important;">
    <th style="padding:0px !important;">মেয়ে</th>
    <td style="padding:0px !important;"><input type="number"  class="form-control" name="NUMDOT" style="max-width: 60px;" value="1"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDOT"  value="10"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="PREDOT" value="good"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="AGEDDOT" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="COSDOT" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="LILLDOT" value="na"></td>
    <td style="padding:0px !important;"><input type="text"  class="form-control" name="DYDOT"  value="na"></td>
  </tr>
</table>
<table class="table">
  <tr>
    <td max-width="45">(ক)</td>
    <td colspan="2"><input type="text"  class="form-control" name="baname" placeholder="বীমা গ্রহীতার ব্যাঙ্ক হিসাবের নাম" required value="Islami Bank Limited"></td>
  </tr>
  <tr>
    <td max-width="45">(খ)</td>
    <td><input type="text"  class="form-control" name="baaccno" placeholder="হিসাব নং" required value="123456"></td>
    <td> 
                            <select name="acctype" class="form-control" required>
                                <option value="0" disabled selected>হিসাবের ধরণ</option>
                                <option value="1">সঞ্চয়ী</option>
                                <option value="2" chacked>চলতি</option>
                            </select>
    </td>
  </tr>
  <tr>
    <td max-width="45">(গ) </td>
    <td colspan="2"><input type="text"  class="form-control" name="babran" placeholder="ব্যাংক ও শাখার নাম" required value="Pantha Path"></td>
  </tr>
  <tr>
    <td>(ঘ)</td>
    <td colspan="2"><input type="text"  class="form-control" name="baadd" placeholder="ব্যাংকের ঠিকানা " required value="Dhaka"></td>
  </tr>
</table>
(পর্বতিত কোম্পানি থেকে টাকা উত্তোলনের ক্ষেত্রে প্রযোজ্যে হবে)
                        <!-- TODO: Missing CoffeeScript 2 -->
</div>
<br><label>আপনার এবং আপনার মনোনীতকের সমস্ত নথিপত্র আপলোড করুন </label>

                       <div class="controls-file"> 
                            <div id="field-file"> 
                                <div class="entry">
                                    <table class=" table" style="padding:0px !important;">
                                    <tr style="padding:0px !important;">
                                        <td width="230" style="padding:0px !important;">
                                            <input type="file" name="UPFILE[]"  class="form-control">
                                        </td>

                                      <td style="padding:0px !important;">
                                          <input type="text" name="UPFILECOM[]"  class="form-control" placeholder="ফাইলটির বর্ণনা ">
                                          
                                      </td>
                                      <td style="padding:0px !important;">               	
                                          <span class="input-group-btn">
                                                <button class="btn btn-success btn-file-add" type="button">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                          </span>
                                      </td>
                                    </tr>
                                    </table>
                                </div>
                        <script>
                        $(function()
                        {
                            $(document).on('click', '.btn-file-add', function(e)
                            {
                                e.preventDefault();

                                var controlForm = $('.controls-file #field-file:first'),
                                    currentEntry = $(this).parents('.entry:first'),
                                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                                newEntry.find('input').val('');
                                controlForm.find('.entry:not(:last) .btn-file-add')
                                    .removeClass('btn-file-add').addClass('btn-file-remove')
                                    .removeClass('btn-success').addClass('btn-danger')
                                    .html('<span class="glyphicon glyphicon-minus"></span>');
                            
                            }).on('click', '.btn-file-remove', function(e)
                            {
                                        $(this).parents('.entry:first').remove();

                                        e.preventDefault();
                                        return false;
                                });
                        });
                        </script>          
   			</div>  
    </div>
        <br>
<div class="row">
    <input type="submit" name="submitpropnom" class="btn btn-default" style="width: 100%;">
</div>
<!--///////////form end ////////////////////////////////////////////////// -->   
</form>                      