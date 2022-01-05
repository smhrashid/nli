
<style>
    .box{
        display: none;
    }
</style>
   
<div class="row">
<input type="hidden"  class="form-control" name="S_REL" value="SL" >
      <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-addon">প্রস্তাবক/প্রস্তাবিকার নাম (ইংরেজীতে)</span>
            <input type="text"  class="form-control" name="S_NAME" value="<?=$_SESSION['prem_plan_name']['NAME'];?>" readonly>
        </div>
      </div>

        <div class="col-sm-3">
            <div class="input-group">
                <span class="input-group-addon">সন্তানের সংখ্যা (যদি থাকে)</span>
                <input type="text"  class="form-control" name="S_NOCHILD" value="<?=$_SESSION['prem_plan_name']['numch'];?>">
            </div>
        </div>
</div>
<br>
<div class="row">
                  <?php
                  $s=$_SESSION['prem_plan_name']['sex'];
                  if ($s=='F'){
                      $rel='স্বামীর নাম ';
                  }
                  else {
                       $rel='স্ত্রীর নাম ';
                  }
                  ?>
    <input type="hidden"  class="form-control" name="S_DOB" value="<?=date_format(date_create($_SESSION['prem_plan_name']['dob']),"d-M-Y");?>" >
    <input type="hidden"  class="form-control" name="S_OCCUP" value="<?=$_SESSION['prem_plan_name']['OCCUP'];?>" >
    <input type="hidden"  class="form-control" name="S_SEX" value="<?=$s;?>" >
    <div class="col-sm-4">
        
               <div class="input-group">
                    <span class="input-group-addon"><?=$rel;?></span>
                    <input type="text"  class="form-control" name="S_SPNAME" value="<?=$_SESSION['prem_plan_name']['SPNAME'];?>" readonly>
                </div>
        
    </div>
    <div class="col-sm-4">
                
               <div class="input-group">
                    <span class="input-group-addon">জন্ম তারিখ</span>
                    <input type="date"  class="form-control" name="S_SPDOB" value="<?=$_SESSION['prem_plan_name']['spdob'];?>">
                </div>
        
    </div>

</div>
<h5>ছেলে/মেয়ে বর্ণনা</h5>
<div class="row">
        <div class="col-sm-4">
               <div class="input-group">
                    <span class="input-group-addon">নাম</span>
                    <input type="text"  class="form-control" name="S_FCNAME" >
                </div>
    </div>
        <div class="col-sm-4">
               <div class="input-group">
                    <span class="input-group-addon">জন্ম তারিখ</span>
                    <input type="date"  class="form-control" name="S_FCDOB" value="<?=$_SESSION['prem_plan_name']['fcdob'];?>">
                </div>
    </div>
        <div class="col-sm-4">
    
               <label><input type="radio" name="S_FCREL" value="s"/>&nbsp;ছেলে&nbsp;</label>
               <label><input type="radio" name="S_FCREL" value="d"/>&nbsp;মেয়ে&nbsp;</label>
              
    </div>
</div>
<?php 
if ($_SESSION['prem_plan_name']['numch']==2){
?>
<div class="row">
        <div class="col-sm-4">
               <div class="input-group">
                    <span class="input-group-addon">নাম</span>
                    <input type="text"  class="form-control" name="S_SCNAME">
                </div>
    </div>
        <div class="col-sm-4">
               <div class="input-group">
                    <span class="input-group-addon">জন্ম তারিখ</span>
                    <input type="date"  class="form-control" name="S_SCDOB" value="<?=$_SESSION['prem_plan_name']['scdob'];?>">
                </div>
    </div>
        <div class="col-sm-4">
     
               <label><input type="radio" name="S_SCREL" value="s"/>&nbsp;ছেলে&nbsp;</label>
               <label><input type="radio" name="S_SCREL" value="d"/>&nbsp;মেয়ে&nbsp;</label>
              
    </div>
</div>

<?php
}
?>


<div class="container">
  <h5>স্বাস্থ্য বিষয়ক বিবৃতি:</h5>    
  <p>প্রগতি লাইফ কর্তৃক হাসপাতাল বীমার আওতাভুক্ত হইবার পূর্বে কোন প্রস্তাবক/প্রস্তাবিকার কোন রোগের উপসর্গ বর্তমান থাকিলে উক্ত সমস্যা সংক্রান্তকোন দাবী স্বাস্থ্য বীমার আওতায় গ্রহণযোগ্য হবে না, যদি উহা এখানে বর্ণিত হয় এবং প্রগতি লাইফ কর্তৃক যথাযথভাবে তাহা গৃহীত হয়। সুতরাং আপনার স্বার্থেই প্রশ্ন সমূহের সম্পূর্ণ ও সঠিক তথ্য প্রদান করুন।
      উপযুক্ত ঘরে (&#10003;) চিহ্ন দিন। উত্তর হ্যাঁ হলে, নির্ধারিত স্থানে বিস্তারিতভাবে লিখুন: </p>

<p>(ক) বর্তমানে কি আপনি বা বীমা গ্রহণেচ্ছু আপনার পরিবারের কোন সদস্য:</p>
<p>(১) যক্ষা, ডায়াবেটিস, শ্বাসকষ্ট, বাতজ্বর, হৃদরোগ, উচ্চরক্তচাপ, খিচুনি, কিডনি রোগ, জেনিটো ইউরিনারী বা গাইনোক্লোজিক্যাল সমস্যা, চোখে ছানি পড়া, ক্যান্সার, মানষিক রোগ, লিভার, নাক, কান, গলা, দন্ত ও মুখগহ্বর বিষয়ক বা কোনো দীর্ঘমেয়াদী অথবা বারবার আক্রমনকারী কোন রোগে ভুগিতেছেন কিনা? 
                
                        <label><input type="radio" name="S_HIDEG" id="hideg_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
                        <label><input type="radio" name="S_HIDEG" value="n" checked/>&nbsp;না&nbsp;</label>
    
</div>
<div class="row box" id="hideg_show">
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="S_DEG1"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="S_DEGDUR1"
 placeholder="সময়কাল">
    </div>
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="S_DEG2"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="S_DEGDUR2" placeholder="সময়কাল">
    </div>    
</div>

<div class="container">
<p>(২) বর্তমানে কোন ডাক্তারের কাছে বা কোন ক্লিনিকে জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা বা বিশেষ কোন রোগ বা উপসর্গ জনিত কোন স্বাস্থ্যগত কারণে নির্দিষ্ট খাদ্য-তালিকা অনুসরণ বা নিয়মিত চেক-আপ করিতেছেন কি না?  
<label><input type="radio" name="S_DOCCH" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="S_DOCCH" value="n" checked/>&nbsp;না&nbsp;</label>
</p>

<p>(৩) অন্য কোন প্রতিষ্ঠানে স্বাস্থ্য বীমার অনুরুপ কোন প্রকার বীমায় একই স্বাস্থ্য সুবিধা আছে কি না?
<label><input type="radio" name="S_HIINS" value="y" id="insu_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="S_HIINS" value="n" checked/>&nbsp;না&nbsp;</label>
</p>
</div>
<div class="row box" id="insu_show">
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="S_COM1" placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_HIPREMDT1"
 placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="S_COM2"
 placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_HIPREMDT2"
 placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>    
</div>

<div class="container">
<p>(খ) গত পাঁচ বছরের মধ্যে আপনি বা বীমা গ্রহনেচ্ছু আপনার পরিবারের কত সদস্য:</p>
<p>(১) জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা সাময়িক বা চিরস্থয়া কোনো অক্ষমতার (Disability) কারণে হাসপাতাল ক্লিনিক বা স্বাস্থ্য নিবাসে চিকিৎসা বা শল্য চিকিৎসার কারণে নূন্যতম ৫ (পাঁচ) দিন শয্যাশায়ী ছিলেন কিনা?  
<label><input type="radio" name="S_DISB" id="disb_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="S_DISB" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="disb_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_ADMI1"
 placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_ADMIDT1" value="">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_ADMIST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_ADMI2" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_ADMIDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_ADMIST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>(২) কোন প্রকার শল্য চিকিৎসা/রোগ নির্ণয়ের জন্য যে কোন ধরনের প্যাথলজিক্যাল পরীক্ষা বা এক্স-রে, আল্ট্রাসনোগ্রাফি, ই.সি.জি. ইকো-কার্ডিওগ্রাফি, সি.টি.স্ক্যান, এম.আর.আই ইত্যাদি করার জন্য কোন বিশেষ বা কোন হাসপাতাল/ক্লিনিকে গিয়েছিলেন কিনা? 
    <label><input type="radio" name="S_HOST" id="host_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="S_HOST" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="host_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_EXN1" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_EXNDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_EXST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_EXN2" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_EXNDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_EXST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>(গ) অতীতে কখনও আপনার অথবা বীমা গহণেচ্ছু আপনার পরিবারের কোন সদস্য:</p>
    <p>(১) কোন অসুস্থ্যতা, অসুস্থ্যতাজনিত দুর্বলতা, বিকলাঙ্গ বা অক্ষমতার কারণে চিকিৎসাধীন ছিলেন কিনা বা উক্ত সমস্যার কারণে কোন বড় ধরনের শল্যচিকিৎসা বা কোন দীর্ঘ মেয়াদী চিকিৎসার প্রয়োজন হয়েছিল কিনা? 
    <label><input type="radio" name="S_HIOT" id="hiot_watch"value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="S_HIOT" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="hiot_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_OTRE1" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_OTDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_OTST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_OTRE2" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_OTDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_OTST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>২) কোন ইন্স্যুরেন্স কোম্পানী কর্তৃক জীবন বীমা বা স্বাস্থ্যবীমা স্থগিত, অস্বীকৃত বা শর্তসাপেক্ষে গৃহীত হয়েছে কিনা? 
    <label><input type="radio" name="S_HISTOP" value="y" id="histop_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="S_HISTOP" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>
<div class="row box" id="histop_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_INSCOM1" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_ISDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_POLTP1" placeholder="বীমার ধারণ">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="S_INSCOM2" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="S_ISDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="S_POLTP2" placeholder="বীমার ধারণ">
    </div> 

</div>
<?php 
/////////////////////fim///////////////////
 if ($s=='F'){
?>

<div class="container">
    <p>(ঘ) বিবাহীত মহিলা সদস্যদের জন্য</p>
           <div class="col-sm-4">
           <p>(১) আপনি কি অন্তঃসত্ত্বা?
           <label><input type="radio" name="S_HIFPREG" id="hifpreg_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="S_HIFPREG" value="n" checked/>&nbsp;না&nbsp;</label>
           </p>
        </div>
    <div class="preg box" id="hifpreg_show">
         <div class="col-sm-4">
             <input type="text"  class="form-control" name="S_HIFPREG" placeholder="কত মাসের অন্তঃসত্ত্বা">
        </div>
         <div class="col-sm-4">
             <input type="date"  class="form-control" name="S_PREGDT" placeholder="সন্তান প্রসবের সম্ভাব্য তারিখ">
        </div>
    </div>

    
</div>

<div class="container">
    <p>
    (২) ইতি পূর্বে সন্তান প্রসবের সময় কোন জটিলতা হয়েছিল কিনা?
    <label><input type="radio" name="S_PREGCOMP" value="y" id="pregcomp_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="S_PREGCOMP" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="pregcomp_show">
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="S_PREGCOMP1" placeholder="কি ধরনের জটিলতা">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="S_PREGTYPE1" placeholder="প্রসবের ধরণ">
    </div>

    <div class="col-sm-6">
         <input type="text"  class="form-control" name="S_PREGCOMP2" placeholder="কি ধরনের জটিলতা">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="S_PREGTYPE2" placeholder="প্রসবের ধরণ">
    </div>
</div> 
<?php 
 }
?>
<div class="container">
    <p>
    (২) উপরোক্ত বিবরণে উল্লেখ নাই এমন কোন অতিরিক্ত তথ্য আপনার বা আপনার কোন পোষ্যের ক্ষেত্রে প্রযোজ্য কিনা যেমন, কোন Pre-existing Condition বা জন্মগত কোন রোগ বা বিকলাঙ্গ আছে কিনা? &nbsp;&nbsp;&nbsp;
    <label><input type="radio" name="S_BDES" value="y" id="bdes_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="S_BDES" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="bdes_show">
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="S_BDES1" placeholder="বিস্তারিত বিবরণ">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="S_BDES2" placeholder="বিস্তারিত বিবরণ">
    </div>

    
</div> 
<script>
	$(document).ready(function() {
            
	   $('input[name="S_HIDEG"]').click(function() {
		   if($(this).attr('id') == 'hideg_watch') { $('#hideg_show').show(500); }
		   else { $('#hideg_show').hide(500); }
	   });
           
           	   $('input[name="S_HIINS"]').click(function() {
		   if($(this).attr('id') == 'insu_watch') { $('#insu_show').show(500); }
		   else { $('#insu_show').hide(500); }
	   });
                
           	   $('input[name="S_DISB"]').click(function() {
		   if($(this).attr('id') == 'disb_watch') { $('#disb_show').show(500); }
		   else { $('#disb_show').hide(500); }
	   });
           
                  
           	   $('input[name="S_HOST"]').click(function() {
		   if($(this).attr('id') == 'host_watch') { $('#host_show').show(500); }
		   else { $('#host_show').hide(500); }
	   });
                                  
           	   $('input[name="S_HIOT"]').click(function() {
		   if($(this).attr('id') == 'hiot_watch') { $('#hiot_show').show(500); }
		   else { $('#hiot_show').hide(500); }
	   });
           
           	   $('input[name="S_HISTOP"]').click(function() {
		   if($(this).attr('id') == 'histop_watch') { $('#histop_show').show(500); }
		   else { $('#histop_show').hide(500); }
	   });
                      
           	   $('input[name="S_HIFPREG"]').click(function() {
		   if($(this).attr('id') == 'hifpreg_watch') { $('#hifpreg_show').show(500); }
		   else { $('#hifpreg_show').hide(500); }
	   });
                                 
           	   $('input[name="S_PREGCOMP"]').click(function() {
		   if($(this).attr('id') == 'pregcomp_watch') { $('#pregcomp_show').show(500); }
		   else { $('#pregcomp_show').hide(500); }
	   });
                                 
           	   $('input[name="S_BDES"]').click(function() {
		   if($(this).attr('id') == 'bdes_watch') { $('#bdes_show').show(500); }
		   else { $('#bdes_show').hide(500); }
	   });
           
	});      

</script>