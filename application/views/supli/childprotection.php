<?php 
unset ($_SESSION['plan']);
if (isset($_POST['submitprop'])){
    unset($_POST['submitprop']);
    $DOB=$_POST['DOB'];
    unset($_POST['DOB']);
    $_POST['WEBPROPOSAL_NO'] = $_SESSION['prem_plan_name']['WEBSEQ'];
    $_POST['DOB'] = date_format(date_create($DOB),"d-M-Y");
    $query_in_val= "INSERT INTO ipl.WEB_CHILDPROTECTION (".implode(",",array_keys($_POST)).")"."  VALUES ('".implode("','",array_values($_POST))."')";
    $this->db->query($query_in_val);
    header("Location: formbody");
}
if ($_SESSION['prem_plan_name']['sex']=='F'){
    $ma=$_SESSION['prem_plan_name']['NAME'];
    $fa=$_SESSION['prem_plan_name']['SPNAME'];
    $re='Mother';
}
else{
    $fa=$_SESSION['prem_plan_name']['NAME'];
    $ma=$_SESSION['prem_plan_name']['SPNAME'];
     $re='Father';
}
$date1=date_create(date("Y-m-d"));
$date2=date_create($_SESSION['prem_plan_name']['dob']);
$diff=date_diff($date1,$date2);
$age= round (($diff->format("%a"))/365);
?>
<form  method="POST" >
<div class="row">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon">প্রস্তাবিত শিশুর পূর্ণ নাম</span>
                    <input type="text"  class="form-control" name="NAME">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                   <span class="input-group-addon">ডাক নাম (যদি থাকে)</span>
                   <input type="text"  class="form-control" name="NICKNAME">
               </div>
            </div>
        </div>
    <div class="row">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon">পিতার নাম </span>
                    <input type="text"  class="form-control" name="FTHER" value="<?=$fa;?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                   <span class="input-group-addon">মাতার নাম </span>
                   <input type="text"  class="form-control" name="MOTHER" value="<?=$ma;?>">
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="input-group">
                    <span class="input-group-addon">প্রিমিয়াম দাতার নাম </span>
                    <input type="text"  class="form-control" name="PREM" value="<?=$_SESSION['prem_plan_name']['NAME'];?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                   <span class="input-group-addon">বয়স  </span>
                   <input type="number"  class="form-control" name="AGE" value="<?=$age;?>">
               </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                   <span class="input-group-addon">শিশুর সাথে সম্পর্ক</span>
                   <input type="text"  class="form-control" name="REL" value="<?=$re;?>">
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">শিশুর জন্ম তারিখ</span>
                    <input type="date"  class="form-control" name="DOB" value="<?=$_SESSION['prem_plan_name']['chdob'];?>">
                </div>
            </div>
            <div class="col-sm-4">
                
                <div class="input-group">
                    <span class="input-group-addon">উচ্চতা</span>
                    <input type="text"  class="form-control" name="HIGHT">
                </div>
            </div>
            <div class="col-sm-4">
                
                <div class="input-group">
                    <span class="input-group-addon">ওজন</span>
                    <input type="text"  class="form-control" name="WEIGHT">
                </div>
            </div>
        </div>

<div class="container">    
    <div id="signupbox" style=" margin-top:50px">
        <div class="panel panel-info">
            <div class="panel-body" >
                
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <label for="id_select"  class="control-label col-md-12" style="font-size:16px;">১. শিশুর শারীরিক অবস্থা  </label>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_select" class="form-group required">
                                <td>
                                    <label for="id_select"  class="control-label col-md-8  requiredField"> (ক) শিশু কি বর্তমানে সম্পূর্ণ সুস্থ?  </label>
                                </td>
                                <td><div class="controls col-md-4"  style="margin-bottom: 10px">
                                        <label class="radio-inline"><input type="radio" name="HEALTHY" id="id_select_1" value="y"  style="margin-bottom: 10px" checked>হ্যাঁ</label>
                                        <label class="radio-inline"> <input type="radio" name="HEALTHY" id="id_select_1" value="n"  style="margin-bottom: 10px">না </label>
                                    </div>
                        </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField">(খ) তার কোন অঙ্গহানি বা অঙ্গবৈকল্য বা জন্মগত  রোগ আছে কি? </label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="DISABLEMENT" id="id_As_1" value="y"  style="margin-bottom: 10px">হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="DISABLEMENT" id="id_As_2" value="n"  style="margin-bottom: 10px"checked>না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField">(গ) তাকে ডিপথিরিয়া, হুপিংকাশি, টাইফয়েড, ধনুষ্টংকার, পলিও, যথা , হাম, জন্ডিস ইত্যাদি রোগের প্রতিষেধক টিকা দেয়া হয়েছে কি?</label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="VACCINATION" id="id_As_1" value="y"  style="margin-bottom: 10px" checked>হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="VACCINATION" id="id_As_2" value="n"  style="margin-bottom: 10px">না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <label for="id_select"  class="control-label col-md-12" style="font-size:16px;" >২. শিশুর স্বাস্থ্য সম্পর্কে নিচের প্রশ্নগুলোর উত্তর দিন </label>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField">ক) গত পাঁচ বছরে কখনও একাধিক্রমে ১০দিনের বেশি অসুস্থ্য ছিল কি?</label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="SICK" id="id_As_1" value="y"  style="margin-bottom: 10px">হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="SICK" id="id_As_2" value="n"  style="margin-bottom: 10px"checked>না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField">গ) কখনও আহত হওয়ার দরুন ডাক্তারের চিকিৎসার প্রয়োজন হয়েছিল কি?</label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="TREATMENT" id="id_As_1" value="y"  style="margin-bottom: 10px">হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="TREATMENT" id="id_As_2" value="n"  style="margin-bottom: 10px"checked>না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField">গ) আপনি কি স্বাভাবিক স্বাস্থ্য চেক-আপ, বীমার জন্য মেডিক্যাল বা ভিসার উদ্দেশ্য ব্যতীত অন্য কোন কারনে রোগ নির্নয় করেছেন (রেডিওলজিক্যাল ও রক্ত পরীক্ষা সহ)?</label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="DIAGNOSED" id="id_As_1" value="y"  style="margin-bottom: 10px">হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="DIAGNOSED" id="id_As_2" value="n"  style="margin-bottom: 10px"checked>না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField">ঘ) পাকস্থলি, অন্ত্রের পীড়া, উদরাময় বা আমাশয় রোগে কখনও ভূগেছে কি?</label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="STOMACH" id="id_As_1" value="y"  style="margin-bottom: 10px">হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="STOMACH" id="id_As_2" value="n"  style="margin-bottom: 10px"checked>না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField" style="font-size:15px;">ঙ) কখনও ঘন ঘন কাশি, রক্ত বমি, বাতজ্বর, ব্রংকাইটিস, নিউমোনিয়া, হাঁপানী শ্বাসযন্ত্রের কোন পীড়া, হাম গলগন্ড, চর্ম, চোখ, নাক ও গলার রোগে ভুগেছে কি?</label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="COUGHING" id="id_As_1" value="y"  style="margin-bottom: 10px">হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="COUGHING" id="id_As_2" value="n"  style="margin-bottom: 10px"checked>না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <div id="div_id_As" class="form-group required">
                                <label for="id_As"  class="control-label col-md-8  requiredField" style="font-size:15px;">চ) উপরোক্ত পীড়াসমূহ ছাড়া অন্য কোন রোগে কখনও ভুগেছে কি বা স্বাস্থ্য সম্পর্কিত অন্য কোন অস্বাভাবিকতা আছে কি?</label>
                                <div class="controls col-md-4"  style="margin-bottom: 10px">
                                    <label class="radio-inline"> <input type="radio" name="ABNORMALITIES" id="id_As_1" value="y"  style="margin-bottom: 10px">হ্যাঁ </label>
                                    <label class="radio-inline"> <input type="radio" name="ABNORMALITIES" id="id_As_2" value="n"  style="margin-bottom: 10px"checked>না </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-body" >
                            <label for="id_select"  class="control-label col-md-12" style="font-size:16px;">উপরে উল্লেখিত যেকোন প্রশ্নের উত্তর হ্যাঁ হলে নিন্মে অসুস্থতার কাল ও প্রকৃতি, তারিখ, চিকিৎসকের নাম ও ঠিকানাসহ বিশদ বিবরণ দিন।</label>
                            <textarea class="form-control" rows="10" name="DETAILS"></textarea>
                        </div>
                    </div>
                        </div>
        </div>
    </div> 
</div>
    <br>
<div class="row">
    <input type="submit" name="submitprop" class="btn btn-default" style="width: 100%;">
</div>
</form> 