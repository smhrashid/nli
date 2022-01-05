
<style>
    .box{
        display: none;
    }
</style>
<?php

//unset ($_SESSION['nt']);
//unset ($_SESSION['selfre']);
if (!isset($_SESSION['nt'])){
    $_SESSION['nt']=array();
}
else if(isset ($_POST['submit'])){
    array_push($_SESSION['nt'],$_POST['SL']);
    $ac= count(array_unique($_SESSION['nt']));
    $bc= $_SESSION['prem_plan_name']['shi']+$_SESSION['prem_plan_name']['sspo']+$_SESSION['prem_plan_name']['numch'];
    if ($ac==$bc){
        header("Location: formbody");
    }
}
if (isset($_POST['SL'])&&$_POST['SL']=='S'){
    $selfre = array("SPDOB"=>date_format(date_create($_POST['S_SPDOB']),"Y-m-d"),
                            "FCNAME"=>$_POST['S_FCNAME'],
                            "FCDOB"=>date_format(date_create($_POST['S_FCDOB']),"Y-m-d"),
                            "FCREL"=>$_POST['S_FCREL'],
                            "SCNAME"=>$_POST['S_SCNAME'],
                            "SCDOB"=>date_format(date_create($_POST['S_SCDOB']),"Y-m-d"),
                            "SCREL"=>$_POST['S_SCREL']);
            $_SESSION['selfre'] = $selfre;
}
else if (!isset ($_SESSION['selfre'])){
        $selfre = array("SPDOB"=>'',
                            "FCNAME"=>'',
                            "FCDOB"=>'',
                            "FCREL"=>'',
                            "SCNAME"=>'',
                            "SCDOB"=>'',
                            "SCREL"=>'',
                           );
            $_SESSION['selfre'] = $selfre;
}
?>
<br>
<div class="container">
  <ul class="nav nav-tabs">
        <?php
                $m=0;
                if ($_SESSION['prem_plan_name']['shi']==1&& !in_array("S", $_SESSION['nt'])){
                    $m=1;
                    echo'
                    <li class="active">
                        <a data-toggle="tab" href="#self">Self</a>
                    </li>';
                }
                if (isset($_SESSION['prem_plan_name']['sspo'])&&$_SESSION['prem_plan_name']['sspo']==1&& !in_array("C", $_SESSION['nt'])){
                    if (in_array("S", $_SESSION['nt'])){
                        $m=1;
                        echo '<li  class="active">';
                    }
                    else {
                        echo '<li>';
                    }
                    echo'
                          <a data-toggle="tab" href="#spouse">Spouse</a>
                      </li>';
                }
                for ($x = 1; $x <= $_SESSION['prem_plan_name']['numch']; $x++) {
                    
                    if (!in_array($x, $_SESSION['nt'])){
                        
                         if ($m==0&&$x==1){
                             echo '<li class="active">';
                         }
                         else  if ($m==0&&(end($_SESSION['nt'])+1)==$x) {       
                             echo '<li class="active">';
                         }
                         else {
                             echo '<li>';
                         }
                          echo  '<a data-toggle="tab" href="#child'.$x.'">Child '.$x.'</a>
                                </li>';  
                    }
                }
        ?>
  </ul>

 <div class="tab-content">
     <?php
   if ($_SESSION['prem_plan_name']['shi']==1&& !in_array("S", $_SESSION['nt'])){?>
    <div id="self" class="tab-pane fade in active">
        <br>
        <form role="form" method="POST" action="formhiin">
            <input type="hidden" name="SL" value="S">  
            <?php
              $this->load->view('hi_self_form');
              ?>
              <input type="submit" name="submit" class="btn btn-default" style="width: 100%;"  value="Submit">
        </form>
                </div>
                <?php 
   }
    if (isset($_SESSION['prem_plan_name']['sspo'])&&$_SESSION['prem_plan_name']['sspo']==1&& !in_array("C", $_SESSION['nt'])){
       if (in_array("S", $_SESSION['nt'])){
           echo '
           <div id="spouse" class="tab-pane fade  in active">';
       }
       else{
           echo '
           <div id="spouse" class="tab-pane fade">';
       }
       ?>            
        <br>
        <form role="form" method="POST" action="formhiin">
            <input type="hidden" name="SL" value="C">  
      <?php
              $this->load->view('hi_spo_form');
       ?>
            <input type="submit" name="submit" class="btn btn-default" style="width: 100%;"  value="Submit">
        </form>
    </div>
     <?php 
    }
     for ($x = 1; $x <= $_SESSION['prem_plan_name']['numch']; $x++) {
        if ($x==1){
            $name=$_SESSION['selfre']['FCNAME'];
            $dob=$_SESSION['selfre']['FCDOB'];
            $rel=$_SESSION['selfre']['FCREL'];
        } 
       if ($x==2){
            $name=$_SESSION['selfre']['SCNAME'];
            $dob=$_SESSION['selfre']['SCDOB'];
            $rel=$_SESSION['selfre']['SCREL'];
        }         
        if ($x==3){
            $name=$_SESSION['selfre']['TCNAME'];
            $dob=$_SESSION['selfre']['TCDOB'];
            $rel=$_SESSION['selfre']['TCREL'];
        } 
        if($rel=='s'){
            $se='m';
        }
        else  if($rel=='d'){
            $se='f';
        }
        else{
            $se='';
        }
            

         if (!in_array($x, $_SESSION['nt'])){
                         if ($m==0&&$x==1){
                             echo '<div id="child'.$x.'" class="tab-pane fade in active"><br>';
                         }
                         else  if ($m==0&&(end($_SESSION['nt'])+1)==$x) {       
                             echo '<div id="child'.$x.'" class="tab-pane fade in active"><br>';
                         }
                         else {
                             echo '<div id="child'.$x.'" class="tab-pane fade"><br>';
                         }
             

             
             ?>
        
      <form role="form" method="POST" action="formhiin"> 
          <input type="hidden" name="SL" value="<?=$x;?>">  
<div class="row">

      <div class="col-sm-8">
        <div class="input-group">
            <span class="input-group-addon">প্রস্তাবক/প্রস্তাবিকার নাম (ইংরেজীতে)</span>
            <input type="text"  class="form-control" name= "<?=$x;?>_NAME" value="<?=$name;?>">
        </div>
      </div>

            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">জন্ম তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_DOB" value="<?=$dob;?>">
                </div>
            </div>
</div>

            
         <div class="row">
             <div class="col-sm-3">
                <div class="input-group">
                        <label class="control-label" for="inputSuccess1">&nbsp;পেশা&nbsp;</label>
                         <label><input type="radio"   name="<?=$x;?>_OCCUP" value="96" checked/>&nbsp;ছাত্র / ছাত্রী&nbsp;</label>
                           <label><input type="radio" name="<?=$x;?>_OCCUP" id="host_c<?=$x;?>_<?=$x;?>_watch" value="96" />&nbsp;প্রযজ্য নয়&nbsp;</label>
                </div>  
             </div>
            <div class="col-sm-3">
              
                  <div class="input-group">
                  <label class="control-label" for="inputSuccess1">&nbsp;লিঙ্গ  &nbsp;</label>
                  <?php
                 
                  if ($se!='m'){
                      echo '<label><input type="radio" name="'.$x.'_SEX" value="m" /> &nbsp;পুরুষ&nbsp;  </label>
                        <label><input type="radio" name="'.$x.'_SEX" value="f" checked/> &nbsp;মহিলা&nbsp;  </label>';
                  }
                  else {
                      echo '<label><input type="radio" name="'.$x.'_SEX" value="m" checked/> &nbsp;পুরুষ&nbsp;  </label>
                        <label><input type="radio" name="'.$x.'_SEX" value="f"/>&nbsp; মহিলা&nbsp;  </label>';
                  }
                  ?>
              </div>
            </div>
                         <div class="col-sm-4">
              
                  <div class="input-group">
                  <label class="control-label" for="inputSuccess1">&nbsp;সম্পর্ক  &nbsp;</label>
                  <?php
                 
                  if ($se!='m'){
                      echo '<label><input type="radio" name="'.$x.'_REL" value="SN" /> &nbsp;পুত্র &nbsp;  </label>
                        <label><input type="radio" name="'.$x.'_REL" value="DA" checked/> &nbsp;কন্যা &nbsp;  </label>';
                  }
                  else {
                      echo '<label><input type="radio" name="'.$x.'_REL" value="SN" checked/> &nbsp;পুত্র &nbsp;  </label>
                        <label><input type="radio" name="'.$x.'_REL" value="DA"/>&nbsp; কন্যা &nbsp;  </label>';
                  }
                  ?>
              </div>
            </div>
         </div>
  

<div class="container">
  <h5>স্বাস্থ্য বিষয়ক বিবৃতি:</h5>    
  <p>প্রগতি লাইফ কর্তৃক হাসপাতাল বীমার আওতাভুক্ত হইবার পূর্বে কোন প্রস্তাবক/প্রস্তাবিকার কোন রোগের উপসর্গ বর্তমান থাকিলে উক্ত সমস্যা সংক্রান্তকোন দাবী স্বাস্থ্য বীমার আওতায় গ্রহণযোগ্য হবে না, যদি উহা এখানে বর্ণিত হয় এবং প্রগতি লাইফ কর্তৃক যথাযথভাবে তাহা গৃহীত হয়। সুতরাং আপনার স্বার্থেই প্রশ্ন সমূহের সম্পূর্ণ ও সঠিক তথ্য প্রদান করুন।
      উপযুক্ত ঘরে (&#10003;) চিহ্ন দিন। উত্তর হ্যাঁ হলে, নির্ধারিত স্থানে বিস্তারিতভাবে লিখুন: </p>

<p>(ক) বর্তমানে কি আপনি বা বীমা গ্রহণেচ্ছু আপনার পরিবারের কোন সদস্য:</p>
<p>(১) যক্ষা, ডায়াবেটিস, শ্বাসকষ্ট, বাতজ্বর, হৃদরোগ, উচ্চরক্তচাপ, খিচুনি, কিডনি রোগ, জেনিটো ইউরিনারী বা গাইনোক্লোজিক্যাল সমস্যা, চোখে ছানি পড়া, ক্যান্সার, মানষিক রোগ, লিভার, নাক, কান, গলা, দন্ত ও মুখগহ্বর বিষয়ক বা কোনো দীর্ঘমেয়াদী অথবা বারবার আক্রমনকারী কোন রোগে ভুগিতেছেন কিনা? 
                
                        <label><input type="radio" name="<?=$x;?>_HIDEG" id="hideg_<?=$x;?>_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
                        <label><input type="radio" name="<?=$x;?>_HIDEG" value="n" checked/>&nbsp;না&nbsp;</label>
    
</div>
<div class="row box" id="hideg_<?=$x;?>_show">
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="<?=$x;?>_DEG1"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="<?=$x;?>_DEGDUR1"
 placeholder="সময়কাল">
    </div>
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="<?=$x;?>_DEG2"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="<?=$x;?>_DEGDUR2" placeholder="সময়কাল">
    </div>    
</div>

<div class="container">
<p>(২) বর্তমানে কোন ডাক্তারের কাছে বা কোন ক্লিনিকে জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা বা বিশেষ কোন রোগ বা উপসর্গ জনিত কোন স্বাস্থ্যগত কারণে নির্দিষ্ট খাদ্য-তালিকা অনুসরণ বা নিয়মিত চেক-আপ করিতেছেন কি না?  
<label><input type="radio" name="<?=$x;?>_DOCCH" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="<?=$x;?>_DOCCH" value="n" checked/>&nbsp;না&nbsp;</label>
</p>

<p>(৩) অন্য কোন প্রতিষ্ঠানে স্বাস্থ্য বীমার অনুরুপ কোন প্রকার বীমায় একই স্বাস্থ্য সুবিধা আছে কি না?
<label><input type="radio" name="<?=$x;?>_HIINS" value="y" id="insu_<?=$x;?>_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="<?=$x;?>_HIINS" value="n" checked/>&nbsp;না&nbsp;</label>
</p>
</div>
<div class="row box" id="insu_<?=$x;?>_show">
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="<?=$x;?>_COM1" placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_HIPREMDT1" placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="<?=$x;?>_COM2" placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_HIPREMDT2" placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>    
</div>

<div class="container">
<p>(খ) গত পাঁচ বছরের মধ্যে আপনি বা বীমা গ্রহনেচ্ছু আপনার পরিবারের কত সদস্য:</p>
<p>(১) জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা সাময়িক বা চিরস্থয়া কোনো অক্ষমতার (Disability) কারণে হাসপাতাল ক্লিনিক বা স্বাস্থ্য নিবাসে চিকিৎসা বা শল্য চিকিৎসার কারণে নূন্যতম ৫ (পাঁচ) দিন শয্যাশায়ী ছিলেন কিনা?  
<label><input type="radio" name="<?=$x;?>_DISB" id="disb_<?=$x;?>_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="<?=$x;?>_DISB" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="disb_<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_ADMI1"
 placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_ADMIDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_ADMIST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_ADMI2" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_ADMIDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_ADMIST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>(২) কোন প্রকার শল্য চিকিৎসা/রোগ নির্ণয়ের জন্য যে কোন ধরনের প্যাথলজিক্যাল পরীক্ষা বা এক্স-রে, আল্ট্রাসনোগ্রাফি, ই.সি.জি. ইকো-কার্ডিওগ্রাফি, সি.টি.স্ক্যান, এম.আর.আই ইত্যাদি করার জন্য কোন বিশেষ বা কোন হাসপাতাল/ক্লিনিকে গিয়েছিলেন কিনা? 
    <label><input type="radio" name="<?=$x;?>_HOST" id="host_<?=$x;?>_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="<?=$x;?>_HOST" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="host_<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_EXN1" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_EXNDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_EXST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_EXN2" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_EXNDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_EXST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>(গ) অতীতে কখনও আপনার অথবা বীমা গহণেচ্ছু আপনার পরিবারের কোন সদস্য:</p>
    <p>(১) কোন অসুস্থ্যতা, অসুস্থ্যতাজনিত দুর্বলতা, বিকলাঙ্গ বা অক্ষমতার কারণে চিকিৎসাধীন ছিলেন কিনা বা উক্ত সমস্যার কারণে কোন বড় ধরনের শল্যচিকিৎসা বা কোন দীর্ঘ মেয়াদী চিকিৎসার প্রয়োজন হয়েছিল কিনা? 
    <label><input type="radio" name="<?=$x;?>_HIOT" id="hiot_<?=$x;?>_watch"value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="<?=$x;?>_HIOT" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="hiot_<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_OTRE1" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_OTDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_OTST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_OTRE2" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_OTDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_OTST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>২) কোন ইন্স্যুরেন্স কোম্পানী কর্তৃক জীবন বীমা বা স্বাস্থ্যবীমা স্থগিত, অস্বীকৃত বা শর্তসাপেক্ষে গৃহীত হয়েছে কিনা? 
    <label><input type="radio" name="<?=$x;?>_HISTOP" value="y" id="histop_<?=$x;?>_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="<?=$x;?>_HISTOP" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>
<div class="row box" id="histop_<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_INSCOM1" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_ISDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_POLTP1" placeholder="বীমার ধারণ">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="<?=$x;?>_INSCOM2" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="<?=$x;?>_ISDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="<?=$x;?>_POLTP2" placeholder="বীমার ধারণ">
    </div> 

</div>

<div class="container">
    <p>
    (২) উপরোক্ত বিবরণে উল্লেখ নাই এমন কোন অতিরিক্ত তথ্য আপনার বা আপনার কোন পোষ্যের ক্ষেত্রে প্রযোজ্য কিনা যেমন, কোন Pre-existing Condition বা জন্মগত কোন রোগ বা বিকলাঙ্গ আছে কিনা? &nbsp;&nbsp;&nbsp;
    <label><input type="radio" name="<?=$x;?>_BDES" value="y" id="bdes_<?=$x;?>_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="<?=$x;?>_BDES" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="bdes_<?=$x;?>_show">
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="<?=$x;?>_BDES1" placeholder="বিস্তারিত বিবরণ">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="<?=$x;?>_BDES2" placeholder="বিস্তারিত বিবরণ">
    </div>

    
</div> 
<script>
	$(document).ready(function() {
            
	   $('input[name="<?=$x;?>_HIDEG"]').click(function() {
		   if($(this).attr('id') == 'hideg_<?=$x;?>_watch') { $('#hideg_<?=$x;?>_show').show(500); }
		   else { $('#hideg_<?=$x;?>_show').hide(500); }
	   });
           
           	   $('input[name="<?=$x;?>_HIINS"]').click(function() {
		   if($(this).attr('id') == 'insu_<?=$x;?>_watch') { $('#insu_<?=$x;?>_show').show(500); }
		   else { $('#insu_<?=$x;?>_show').hide(500); }
	   });
                
           	   $('input[name="<?=$x;?>_DISB"]').click(function() {
		   if($(this).attr('id') == 'disb_<?=$x;?>_watch') { $('#disb_<?=$x;?>_show').show(500); }
		   else { $('#disb_<?=$x;?>_show').hide(500); }
	   });
           
                  
           	   $('input[name="<?=$x;?>_HOST"]').click(function() {
		   if($(this).attr('id') == 'host_<?=$x;?>_watch') { $('#host_<?=$x;?>_show').show(500); }
		   else { $('#host_<?=$x;?>_show').hide(500); }
	   });
                                  
           	   $('input[name="<?=$x;?>_HIOT"]').click(function() {
		   if($(this).attr('id') == 'hiot_<?=$x;?>_watch') { $('#hiot_<?=$x;?>_show').show(500); }
		   else { $('#hiot_<?=$x;?>_show').hide(500); }
	   });
           
           	   $('input[name="<?=$x;?>_HISTOP"]').click(function() {
		   if($(this).attr('id') == 'histop_<?=$x;?>_watch') { $('#histop_<?=$x;?>_show').show(500); }
		   else { $('#histop_<?=$x;?>_show').hide(500); }
	   });
                      
           	   $('input[name="<?=$x;?>_HIFPREG"]').click(function() {
		   if($(this).attr('id') == 'hifpreg_<?=$x;?>_watch') { $('#hifpreg_<?=$x;?>_show').show(500); }
		   else { $('#hifpreg_<?=$x;?>_show').hide(500); }
	   });
                                 
           	   $('input[name="<?=$x;?>_PREGCOMP"]').click(function() {
		   if($(this).attr('id') == 'pregcomp_<?=$x;?>_watch') { $('#pregcomp_<?=$x;?>_show').show(500); }
		   else { $('#pregcomp_<?=$x;?>_show').hide(500); }
	   });
                                 
           	   $('input[name="<?=$x;?>_BDES"]').click(function() {
		   if($(this).attr('id') == 'bdes_<?=$x;?>_watch') { $('#bdes_<?=$x;?>_show').show(500); }
		   else { $('#bdes_<?=$x;?>_show').hide(500); }
	   });
           
	});      

</script>
        <input type="submit" name="submit" class="btn btn-default" style="width: 100%;"  value="Submit">
        </form> 
         </div>
     <?php }}?>
</div>
<?php
if (isset($_POST['submit'])){
        unset($_POST['submit']);
        $sl= $_POST['SL'];
        if (isset($_POST[$sl.'_SPDOB'])&&!empty($_POST[$sl.'_SPDOB'])){
            $_POST['SPDOB']=date_format(date_create($_POST[$sl.'_SPDOB']),"d-M-Y");
            unset($_POST[$sl.'_SPDOB']);
        }
        if (isset($_POST[$sl.'_FCDOB'])&&!empty($_POST[$sl.'_FCDOB'])){
            $_POST['FCDOB']=date_format(date_create($_POST[$sl.'_FCDOB']),"d-M-Y");
            unset($_POST[$sl.'_FCDOB']);
        }
        if (isset($_POST[$sl.'_SCDOB'])&&!empty($_POST[$sl.'_SCDOB'])){
            $_POST['SCDOB']=date_format(date_create($_POST[$sl.'_SCDOB']),"d-M-Y");
            unset($_POST[$sl.'_SCDOB']);
        }
        if (isset($_POST[$sl.'_ADMIDT1'])&&!empty($_POST[$sl.'_ADMIDT1'])){
            $_POST['ADMIDT1']=date_format(date_create($_POST[$sl.'_ADMIDT1']),"d-M-Y");
            unset($_POST[$sl.'_ADMIDT1']);
        }
        if (isset($_POST[$sl.'_ADMIDT2'])&&!empty($_POST[$sl.'_ADMIDT2'])){
            $_POST['ADMIDT2']=date_format(date_create($_POST[$sl.'_ADMIDT2']),"d-M-Y");
            unset($_POST[$sl.'_ADMIDT2']);
        }
        if (isset($_POST[$sl.'_EXNDT1'])&&!empty($_POST[$sl.'_EXNDT1'])){
            $_POST['EXNDT1']=date_format(date_create($_POST[$sl.'_EXNDT1']),"d-M-Y");
            unset($_POST[$sl.'_EXNDT1']);
        }
        if (isset($_POST[$sl.'_EXNDT2'])&&!empty($_POST[$sl.'_EXNDT2'])){
            $_POST['EXNDT2']=date_format(date_create($_POST[$sl.'_EXNDT2']),"d-M-Y");
            unset($_POST[$sl.'_EXNDT2']);
        }
        if (isset($_POST[$sl.'_OTDT1'])&&!empty($_POST[$sl.'_OTDT1'])){
            $_POST['OTDT1']=date_format(date_create($_POST[$sl.'_OTDT1']),"d-M-Y");
            unset($_POST[$sl.'_OTDT1']);
        }
        if (isset($_POST[$sl.'_OTDT2'])&&!empty($_POST[$sl.'_OTDT2'])){
            $_POST['OTDT2']=date_format(date_create($_POST[$sl.'_OTDT2']),"d-M-Y");
            unset($_POST[$sl.'_OTDT2']);
        }
        if (isset($_POST[$sl.'_ISDT1'])&&!empty($_POST[$sl.'_ISDT1'])){
            $_POST['ISDT1']=date_format(date_create($_POST[$sl.'_ISDT1']),"d-M-Y");
            unset($_POST[$sl.'_ISDT1']);
        }
        if (isset($_POST[$sl.'_ISDT2'])&&!empty($_POST[$sl.'_ISDT2'])){
            $_POST['ISDT2']=date_format(date_create($_POST[$sl.'_ISDT2']),"d-M-Y");
            unset($_POST[$sl.'_ISDT2']);
        }
        if (isset($_POST[$sl.'_PREGDT'])&&!empty($_POST[$sl.'_PREGDT'])){
            $_POST['PREGDT']=date_format(date_create($_POST[$sl.'_PREGDT']),"d-M-Y");
            unset($_POST[$sl.'_PREGDT']);
        }
        if (isset($_POST[$sl.'_DOB'])&&!empty($_POST[$sl.'_DOB'])){
            $_POST['DOB']=date_format(date_create($_POST[$sl.'_DOB']),"d-M-Y");
            unset($_POST[$sl.'_DOB']);
        }
        unset($_POST['SL']);
        $_POST['WEBPROPOSAL_NO'] = $_SESSION['prem_plan_name']['WEBSEQ'];
        $_POST['PLAN'] = $_SESSION['prem_plan_name']['hipl'];     

        $query_in_val= "INSERT INTO ipl.WEB_HI_PROPOSAL (".str_replace($sl."_","",implode(",",array_keys($_POST))).")"."  VALUES ('".implode("','",array_values($_POST))."')";
        $this->db->query($query_in_val);
}
?>

    