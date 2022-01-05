    <?php
    for ($x = 1; $x <= $_SESSION['prem_plan_name']['numch']; $x++) {
        echo $x;
        ?>
       
        
          
<div class="row">

      <div class="col-sm-8">
        <div class="input-group">
            <span class="input-group-addon">প্রস্তাবক/প্রস্তাবিকার নাম (ইংরেজীতে)</span>
            <input type="text"  class="form-control" name="name_c<?=$x;?>" value="">
        </div>
      </div>

            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">জন্ম তারিখ</span>
                    <input type="date"  class="form-control" name="dob_c<?=$x;?>" value="">
                </div>
            </div>
</div>

            
         <div class="row">
             <div class="col-sm-3">
                <div class="input-group">
                        <label class="control-label" for="inputSuccess1">&nbsp;পেশা&nbsp;</label>
                         <label><input type="radio"   name="occup_c<?=$x;?>" value="96" checked/>&nbsp;ছাত্র / ছাত্রী&nbsp;</label>
                           <label><input type="radio" name="occup_c<?=$x;?>" id="host_c<?=$x;?>_watch" value="96" />&nbsp;প্রযজ্য নয়&nbsp;</label>
                </div>  
             </div>
            <div class="col-sm-5">
              
                  <div class="input-group">
                  <label class="control-label" for="inputSuccess1">&nbsp;লিঙ্গ  &nbsp;</label>
                  <?php
                  echo '<label><input type="radio" name="sex_c'.$x.'" value="m" /> &nbsp;পুরুষ&nbsp;  </label>
                        <label><input type="radio" name="sex_c'.$x.'" value="f" checked/> &nbsp;মহিলা&nbsp;  </label>';
                  /*
                  $s=$_SESSION['SPINFO'][''.$x.'chre'];
                  if ($s=='d'){
                      echo '<label><input type="radio" name="sex_c'.$x.'" value="m" /> &nbsp;পুরুষ&nbsp;  </label>
                        <label><input type="radio" name="sex_c'.$x.'" value="f" checked/> &nbsp;মহিলা&nbsp;  </label>';
                      $rel='Husband ';
                  }
                  else {
                      echo '<label><input type="radio" name="sex_c'.$x.'" value="m" checked/> &nbsp;পুরুষ&nbsp;  </label>
                        <label><input type="radio" name="sex_c'.$x.'" value="f"/>&nbsp; মহিলা&nbsp;  </label>';
                       $rel='Wife ';
                  }*/
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
                
                        <label><input type="radio" name="hideg_c<?=$x;?>" id="hideg_c<?=$x;?>_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
                        <label><input type="radio" name="hideg_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label>
    
</div>
<div class="row  box" id="hideg_c<?=$x;?>_show">
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="deg1_c<?=$x;?>"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="degdur1_c<?=$x;?>"
 placeholder="সময়কাল">
    </div>
    
    <div class="col-sm-10">
         <input type="text"  class="form-control" name="deg2_c<?=$x;?>"
 placeholder="রোগের নাম">
    </div>
    <div class="col-sm-2">
         <input type="text"  class="form-control" name="degdur2_c<?=$x;?>" placeholder="সময়কাল">
    </div>    
</div>
<div class="container">
<p>(২) বর্তমানে কোন ডাক্তারের কাছে বা কোন ক্লিনিকে জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা বা বিশেষ কোন রোগ বা উপসর্গ জনিত কোন স্বাস্থ্যগত কারণে নির্দিষ্ট খাদ্য-তালিকা অনুসরণ বা নিয়মিত চেক-আপ করিতেছেন কি না?  
<label><input type="radio" name="docch_c<?=$x;?>" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="docch_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label>
</p>

<p>(৩) অন্য কোন প্রতিষ্ঠানে স্বাস্থ্য বীমার অনুরুপ কোন প্রকার বীমায় একই স্বাস্থ্য সুবিধা আছে কি না?
<label><input type="radio" name="hiins_c<?=$x;?>" value="y" id="hiins_c<?=$x;?>_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="hiins_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label>
</p>
</div>
<div class="row  box" id="hiins_c<?=$x;?>_show">
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="com1_c<?=$x;?>" placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="hipremdt1_c<?=$x;?>" placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>
    
    <div class="col-sm-8">
         <input type="text"  class="form-control" name="com2_c<?=$x;?>" placeholder="প্রতিষ্ঠানের নাম">
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="hipremdt2_c<?=$x;?>" placeholder="বীমা ঝুঁকির পরিমাণ ও শুরুর তারিখ">
    </div>    
</div>
<div class="container">
<p>(খ) গত পাঁচ বছরের মধ্যে আপনি বা বীমা গ্রহনেচ্ছু আপনার পরিবারের কত সদস্য:</p>
<p>(১) জখম, অসুস্থ্যতাজনিত দুর্বলতা, অক্ষমতা সাময়িক বা চিরস্থয়া কোনো অক্ষমতার (Disability) কারণে হাসপাতাল ক্লিনিক বা স্বাস্থ্য নিবাসে চিকিৎসা বা শল্য চিকিৎসার কারণে নূন্যতম ৫ (পাঁচ) দিন শয্যাশায়ী ছিলেন কিনা?  
<label><input type="radio" name="disb_c<?=$x;?>" id="disb_c<?=$x;?>_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
<label><input type="radio" name="disb_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="disb_c<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="admi1_c<?=$x;?>"
 placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="admidt1_c<?=$x;?>"
>
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="admist1_c<?=$x;?>" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="admi2_c<?=$x;?>" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="admidt2_c<?=$x;?>" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="admist2_c<?=$x;?>" placeholder="বর্তমান অবস্থা">
    </div> 

</div>
<div class="container">
    <p>(২) কোন প্রকার শল্য চিকিৎসা/রোগ নির্ণয়ের জন্য যে কোন ধরনের প্যাথলজিক্যাল পরীক্ষা বা এক্স-রে, আল্ট্রাসনোগ্রাফি, ই.সি.জি. ইকো-কার্ডিওগ্রাফি, সি.টি.স্ক্যান, এম.আর.আই ইত্যাদি করার জন্য কোন বিশেষ বা কোন হাসপাতাল/ক্লিনিকে গিয়েছিলেন কিনা? 
    <label><input type="radio" name="host_c<?=$x;?>" id="host_c<?=$x;?>_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="host_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label></p>
</div>
<div class="row box" id="host_c<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="exn1_c<?=$x;?>" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="exndt1_c<?=$x;?>">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="exst1_c<?=$x;?>" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="exn2_c<?=$x;?>" placeholder="ডাক্তারী পরিক্ষার নাম">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="exndt2_c<?=$x;?>" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="exst2_c<?=$x;?>" placeholder="বর্তমান অবস্থা">
    </div> 

</div>
            
<div class="container">
    <p>(গ) অতীতে কখনও আপনার অথবা বীমা গহণেচ্ছু আপনার পরিবারের কোন সদস্য:</p>
    <p>(১) কোন অসুস্থ্যতা, অসুস্থ্যতাজনিত দুর্বলতা, বিকলাঙ্গ বা অক্ষমতার কারণে চিকিৎসাধীন ছিলেন কিনা বা উক্ত সমস্যার কারণে কোন বড় ধরনের শল্যচিকিৎসা বা কোন দীর্ঘ মেয়াদী চিকিৎসার প্রয়োজন হয়েছিল কিনা? 
    <label><input type="radio" name="hiot_c<?=$x;?>" id="hiot_c<?=$x;?>_watch" value="y" />&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="hiot_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>

<div class="row box" id="hiot_c<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="otre1_c<?=$x;?>" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="otdt1_c<?=$x;?>">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="otst1_c<?=$x;?>" placeholder="বর্তমান অবস্থা">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="otre2_c<?=$x;?>" placeholder="ভর্তির কারণ">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="otdt2_c<?=$x;?>" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="otst2_c<?=$x;?>" placeholder="বর্তমান অবস্থা">
    </div> 

</div>
<div class="container">
    <p>২) কোন ইন্স্যুরেন্স কোম্পানী কর্তৃক জীবন বীমা বা স্বাস্থ্যবীমা স্থগিত, অস্বীকৃত বা শর্তসাপেক্ষে গৃহীত হয়েছে কিনা? 
    <label><input type="radio" name="histop_c<?=$x;?>" value="y" id="histop_c<?=$x;?>_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
    <label><input type="radio" name="histop_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>
<div class="row box" id="histop_c<?=$x;?>_show">
    
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="inscom1_c<?=$x;?>" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="isdt1_c<?=$x;?>">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="poltp1_c<?=$x;?>" placeholder="বীমার ধারণ">
    </div>
       
    <div class="col-sm-5">
         <input type="text"  class="form-control" name="inscom2_c<?=$x;?>" placeholder="বীমা কোম্পানী">
    </div>
    <div class="col-sm-3">
        <div class="input-group">
                    <span class="input-group-addon">তারিখ</span>
                    <input type="date"  class="form-control" name="isdt2_c<?=$x;?>" placeholder="তারিখ">
        </div>
    </div>
    <div class="col-sm-4">
         <input type="text"  class="form-control" name="poltp2_c<?=$x;?>" placeholder="বীমার ধারণ">
    </div> 

</div>
<div class="container">
    <p>
    (২) উপরোক্ত বিবরণে উল্লেখ নাই এমন কোন অতিরিক্ত তথ্য আপনার বা আপনার কোন পোষ্যের ক্ষেত্রে প্রযোজ্য কিনা যেমন, কোন Pre-existing Condition বা জন্মগত কোন রোগ বা বিকলাঙ্গ আছে কিনা? &nbsp;&nbsp;&nbsp;
    <label><input type="radio" name="bdes_c<?=$x;?>" value="y" id="bdes_c<?=$x;?>_watch"/>&nbsp;হ্যাঁ&nbsp;</label>
           <label><input type="radio" name="bdes_c<?=$x;?>" value="n" checked/>&nbsp;না&nbsp;</label>
    </p>
</div>
<div class="row box" id="bdes_c<?=$x;?>_show">
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="bdes1_c<?=$x;?>" placeholder="বিস্তারিত বিবরণ">
    </div>
    
    <div class="col-sm-6">
         <input type="text"  class="form-control" name="bdes2_c<?=$x;?>" placeholder="বিস্তারিত বিবরণ">
    </div>

    

            

     <script>
	$(document).ready(function() {
            
	   $('input[name="hideg_c<?=$x;?>"]').click(function() {
		   if($(this).attr('id') == 'hideg_c<?=$x;?>_watch') { $('#hideg_c<?=$x;?>_show').show(500); }
		   else { $('#hideg_c<?=$x;?>_show').hide(500); }
	   });
           
           	   $('input[name="hiins_c<?=$x;?>"]').click(function() {
		   if($(this).attr('id') == 'hiins_c<?=$x;?>_watch') { $('#hiins_c<?=$x;?>_show').show(500); }
		   else { $('#hiins_c<?=$x;?>_show').hide(500); }
	   });
                
           	   $('input[name="disb_c<?=$x;?>"]').click(function() {
		   if($(this).attr('id') == 'disb_c<?=$x;?>_watch') { $('#disb_c<?=$x;?>_show').show(500); }
		   else { $('#disb_c<?=$x;?>_show').hide(500); }
	   });
                             
           	   $('input[name="host_c<?=$x;?>"]').click(function() {
		   if($(this).attr('id') == 'host_c<?=$x;?>_watch') { $('#host_c<?=$x;?>_show').show(500); }
		   else { $('#host_c<?=$x;?>_show').hide(500); }
	   });
                                  
           	   $('input[name="hiot_c<?=$x;?>"]').click(function() {
		   if($(this).attr('id') == 'hiot_c<?=$x;?>_watch') { $('#hiot_c<?=$x;?>_show').show(500); }
		   else { $('#hiot_c<?=$x;?>_show').hide(500); }
	   });

           	   $('input[name="histop_c<?=$x;?>"]').click(function() {
		   if($(this).attr('id') == 'histop_c<?=$x;?>_watch') { $('#histop_c<?=$x;?>_show').show(500); }
		   else { $('#histop_c<?=$x;?>_show').hide(500); }
	   });
                      
           	   $('input[name="bdes_c<?=$x;?>"]').click(function() {
		   if($(this).attr('id') == 'bdes_c<?=$x;?>_watch') { $('#bdes_c<?=$x;?>_show').show(500); }
		   else { $('#bdes_c<?=$x;?>_show').hide(500); }
	   });
           
	});      

</script>
     
     <?php 
     
    }
       ?>