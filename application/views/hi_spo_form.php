
<style>
    .box{
        display: none;
    }
</style>
<div class="row">
                  <?php
                  $s=$_SESSION['prem_plan_name']['sex'];
                  if ($_SESSION['prem_plan_name']['sex']=='F'){
                      $s='M';
                  }
                  else if ($_SESSION['prem_plan_name']['sex']=='M'){
                       $s='F';
                  }
                  ?>
    <input type="hidden"  class="form-control" name="C_DOB" value="<?=date_format(date_create($_SESSION['selfre']['SPDOB']),"d-M-Y");?>" >
    <input type="hidden"  class="form-control" name="C_SEX" value="<?=$s;?>" >
    <input type="hidden"  class="form-control" name="C_REL" value="SP" >
      <div class="col-sm-6">
        <div class="input-group">
            <span class="input-group-addon">প্রস্তাবক/প্রস্তাবিকার নাম (ইংরেজীতে)</span>
            <input type="text"  class="form-control" name="C_NAME" value="<?=$_SESSION['prem_plan_name']['SPNAME'];?>" readonly>
        </div>
      </div>

      </div>
<br>
    <div class="row">
        <div class="col-sm-3">
            
                      <div class="input-group">
              <span class="input-group-addon">পেশা</span>
              <select name="C_OCCUP" class="form-control" >
                  <option value="" disabled selected>Select Occupation</option>
                                <?php 
                               // $this->db = $this->load->database('second', TRUE);
                                
                                $query_ocup = "SELECT * FROM ipl.OCCUP";
                                $q_ocup = $this->db->query($query_ocup);
                                foreach ($q_ocup->result() as $r_ocup):
                                    $asd=$r_ocup->OCCUP;
                                    echo '<option value='.$asd.'>'.$r_ocup->OCCUPNAME.'</option>';
                                endforeach;
                                ?>
              </select>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="input-group">
              <span class="input-group-addon">অফিসের ঠিকানা</span>
              <input type="text"  class="form-control" name="C_JOBADD">
          </div>
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <span class="input-group-addon">পদমর্যাদা</span>
                <input type="text"  class="form-control" name="C_JOBDETAILS">
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon">বর্তমান ঠিকানা</span>
                  <input type="text"  class="form-control" name="C_PADDR"  value="Same of the applicant" >
              </div>
            </div>

            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">মোবাইল নং</span>
                    <input type="text"  class="form-control" name="C_PHONE">
                </div>
            </div>
        </div>


<div class="container">
  <h5>স্বাস্থ্য বিষয়ক বিবৃতি:</h5>    
  <p>প্রগতি লাইফ কর্তৃক হাসপাতাল বীমার আওতাভুক্ত হইবার পূর্বে কোন প্রস্তাবক/প্রস্তাবিকার কোন রোগের উপসর্গ বর্তমান থাকিলে উক্ত সমস্যা সংক্রান্তকোন দাবী স্বাস্থ্য বীমার আওতায় গ্রহণযোগ্য হবে না, যদি উহা এখানে বর্ণিত হয় এবং প্রগতি লাইফ কর্তৃক যথাযথভাবে তাহা গৃহীত হয়। সুতরাং আপনার স্বার্থেই প্রশ্ন সমূহের সম্পূর্ণ ও সঠিক তথ্য প্রদান করুন।
      উপযুক্ত ঘরে (&#10003;) চিহ্ন দিন। উত্তর হ্যাঁ হলে, নির্ধারিত স্থানে বিস্তারিতভাবে লিখুন: </p>

<p>(ক) বর্তমানে কি আপনি বা বীমা গ্রহণেচ্ছু আপনার পরিবারের কোন সদস্য:</p>
<p>(১) যক্ষা, ডায়াবেটিস, শ্বাসকষ্ট, বাতজ্বর, হৃদরোগ, উচ্চরক্তচাপ, খিচুনি, কিডনি রোগ, জেনিটো ইউরিনারী বা গাইনোক্লোজিক্যাল সমস্যা, চোখে ছানি পড়া, ক্যান্সার, মানষিক রোগ, লিভার, নাক, কান, গলা, দন্ত ও মুখগহ্বর বিষয়ক বা কোনো দীর্ঘমেয়াদী অথবা বারবার আক্রমনকারী কোন রোগে ভুগিতেছেন কিনা? 
                
                        <label><input type="radio" name="C_HIDEG" id="hideg_c_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
                        <label><input type="radio" name="C_HIDEG" value="n" checked/>&nbsp;না&nbsp;</label>
    
</div>
<div class="row box" id="hideg_c_show">
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="C_DEG1"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="C_DEGDUR1"
 placeholder="সময়কাল">
    </div>
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="C_DEG2"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="C_DEGDUR2" placeholder="সময়কাল">
    </div>    
</div>

<div class="container">
<p>(২) বর্তমানে কোন ডাক্তারের কাছে বা কোন ক্লিনিকে জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা বা বিশেষ কোন রোগ বা উপসর্গ জনিত কোন স্বাস্থ্যগত কারণে নির্দিষ্ট খাদ্য-তালিকা অনুসরণ বা নিয়মিত চেক-আপ করিতেছেন কি না?  
<label><input type="radio" name="C_DOCCH" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="C_DOCCH" value="n" checked/>&nbsp;না&nbsp;</label>
</p>

<p>(৩) অন্য কোন প্রতিষ্ঠানে স্বাস্থ্য বীমার অনুরুপ কোন প্রকার বীমায় একই স্বাস্থ্য সুবিধা আছে কি না?
<label><input type="radio" name="C_HIINS" value="y" id="insu_c_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="C_HIINS" value="n" checked/>&nbsp;না&nbsp;</label>
</p>
</div>
<div class="row box" id="insu_c_show">
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="C_COM1" placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_HIPREMDT1"
 placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="C_COM2"
 placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_HIPREMDT2"
 placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>    
</div>

<div class="container">
<p>(খ) গত পাঁচ বছরের মধ্যে আপনি বা বীমা গ্রহনেচ্ছু আপনার পরিবারের কত সদস্য:</p>
<p>(১) জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা সাময়িক বা চিরস্থয়া কোনো অক্ষমতার (Disability) কারণে হাসপাতাল ক্লিনিক বা স্বাস্থ্য নিবাসে চিকিৎসা বা শল্য চিকিৎসার কারণে নূন্যতম ৫ (পাঁচ) দিন শয্যাশায়ী ছিলেন কিনা?  
<label><input type="radio" name="C_DISB" id="disb_c_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="C_DISB" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="disb_c_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_ADMI1"
 placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_ADMIDT1"
>
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_ADMIST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_ADMI2" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_ADMIDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_ADMIST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>(২) কোন প্রকার শল্য চিকিৎসা/রোগ নির্ণয়ের জন্য যে কোন ধরনের প্যাথলজিক্যাল পরীক্ষা বা এক্স-রে, আল্ট্রাসনোগ্রাফি, ই.সি.জি. ইকো-কার্ডিওগ্রাফি, সি.টি.স্ক্যান, এম.আর.আই ইত্যাদি করার জন্য কোন বিশেষ বা কোন হাসপাতাল/ক্লিনিকে গিয়েছিলেন কিনা? 
    <label><input type="radio" name="C_HOST" id="host_c_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="C_HOST" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="host_c_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_EXN1" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_EXNDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_EXST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_EXN2" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_EXNDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_EXST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>(গ) অতীতে কখনও আপনার অথবা বীমা গহণেচ্ছু আপনার পরিবারের কোন সদস্য:</p>
    <p>(১) কোন অসুস্থ্যতা, অসুস্থ্যতাজনিত দুর্বলতা, বিকলাঙ্গ বা অক্ষমতার কারণে চিকিৎসাধীন ছিলেন কিনা বা উক্ত সমস্যার কারণে কোন বড় ধরনের শল্যচিকিৎসা বা কোন দীর্ঘ মেয়াদী চিকিৎসার প্রয়োজন হয়েছিল কিনা? 
    <label><input type="radio" name="C_HIOT" id="hiot_c_watch"value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="C_HIOT" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="hiot_c_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_OTRE1" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_OTDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_OTST1" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_OTRE2" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_OTDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_OTST2" placeholder="বর্তমান অবস্থা">
    </div> 

</div>

<div class="container">
    <p>২) কোন ইন্স্যুরেন্স কোম্পানী কর্তৃক জীবন বীমা বা স্বাস্থ্যবীমা স্থগিত, অস্বীকৃত বা শর্তসাপেক্ষে গৃহীত হয়েছে কিনা? 
    <label><input type="radio" name="C_HISTOP" value="y" id="histop_c_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="C_HISTOP" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>
<div class="row box" id="histop_c_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_INSCOM1" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_ISDT1">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_POLTP1" placeholder="বীমার ধারণ">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="C_INSCOM2" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="C_ISDT2" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="C_POLTP2" placeholder="বীমার ধারণ">
    </div> 

</div>
<?php 
/////////////////////fim///////////////////
// if ($s=='F'){
?>

<div class="container">
    <p>(ঘ) বিবাহীত মহিলা সদস্যদের জন্য</p>
           <div class="col-sm-4">
           <p>(১) আপনি কি অন্তঃসত্ত্বা?
           <label><input type="radio" name="C_HIFPREG" id="hifpreg_c_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="C_HIFPREG" value="n" checked/>&nbsp;না&nbsp;</label>
           </p>
        </div>
    <div class="preg box" id="hifpreg_c_show">
         <div class="col-sm-4">
             <input type="text"  class="form-control" name="C_HIFPREG" placeholder="কত মাসের অন্তঃসত্ত্বা">
        </div>
         <div class="col-sm-4">
             <input type="date"  class="form-control" name="C_PREGDT" placeholder="সন্তান প্রসবের সম্ভাব্য তারিখ">
        </div>
    </div>

    
</div>

<div class="container">
    <p>
    (২) ইতি পূর্বে সন্তান প্রসবের সময় কোন জটিলতা হয়েছিল কিনা?
    <label><input type="radio" name="C_PREGCOMP" value="y" id="pregcomp_c_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="C_PREGCOMP" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="pregcomp_c_show">
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="C_PREGCOMP1" placeholder="কি ধরনের জটিলতা">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="C_PREGTYPE1" placeholder="প্রসবের ধরণ">
    </div>

    <div class="col-sm-6">
         <input type="text"  class="form-control" name="C_PREGCOMP2" placeholder="কি ধরনের জটিলতা">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="C_PREGTYPE2" placeholder="প্রসবের ধরণ">
    </div>
</div> 
<?php 
 //}
?>
<div class="container">
    <p>
    (২) উপরোক্ত বিবরণে উল্লেখ নাই এমন কোন অতিরিক্ত তথ্য আপনার বা আপনার কোন পোষ্যের ক্ষেত্রে প্রযোজ্য কিনা যেমন, কোন Pre-existing Condition বা জন্মগত কোন রোগ বা বিকলাঙ্গ আছে কিনা? &nbsp;&nbsp;&nbsp;
    <label><input type="radio" name="C_BDES" value="y" id="bdes_c_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="C_BDES" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="bdes_c_show">
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="C_BDES1" placeholder="বিস্তারিত বিবরণ">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="C_BDES2" placeholder="বিস্তারিত বিবরণ">
    </div>

    
</div> 
<script>
	$(document).ready(function() {
            
	   $('input[name="C_HIDEG"]').click(function() {
		   if($(this).attr('id') == 'hideg_c_watch') { $('#hideg_c_show').show(500); }
		   else { $('#hideg_c_show').hide(500); }
	   });
           
           	   $('input[name="C_HIINS"]').click(function() {
		   if($(this).attr('id') == 'insu_c_watch') { $('#insu_c_show').show(500); }
		   else { $('#insu_c_show').hide(500); }
	   });
                
           	   $('input[name="C_DISB"]').click(function() {
		   if($(this).attr('id') == 'disb_c_watch') { $('#disb_c_show').show(500); }
		   else { $('#disb_c_show').hide(500); }
	   });
           
                  
           	   $('input[name="C_HOST"]').click(function() {
		   if($(this).attr('id') == 'host_c_watch') { $('#host_c_show').show(500); }
		   else { $('#host_c_show').hide(500); }
	   });
                                  
           	   $('input[name="C_HIOT"]').click(function() {
		   if($(this).attr('id') == 'hiot_c_watch') { $('#hiot_c_show').show(500); }
		   else { $('#hiot_c_show').hide(500); }
	   });
           
           	   $('input[name="C_HISTOP"]').click(function() {
		   if($(this).attr('id') == 'histop_c_watch') { $('#histop_c_show').show(500); }
		   else { $('#histop_c_show').hide(500); }
	   });
                      
           	   $('input[name="C_HIFPREG"]').click(function() {
		   if($(this).attr('id') == 'hifpreg_c_watch') { $('#hifpreg_c_show').show(500); }
		   else { $('#hifpreg_c_show').hide(500); }
	   });
                                 
           	   $('input[name="C_PREGCOMP"]').click(function() {
		   if($(this).attr('id') == 'pregcomp_c_watch') { $('#pregcomp_c_show').show(500); }
		   else { $('#pregcomp_c_show').hide(500); }
	   });
                                 
           	   $('input[name="C_BDES"]').click(function() {
		   if($(this).attr('id') == 'bdes_c_watch') { $('#bdes_c_show').show(500); }
		   else { $('#bdes_c_show').hide(500); }
	   });
           
	});      

</script>