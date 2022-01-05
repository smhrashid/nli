<?php
//unset($_SESSION['nideng']);
//      $this->prevpolicy_model->get_nid();
$this->prevpolicy_model->get_policy();


$name = '';
$ph_home = '';
$ph_office = '';
$ph_mob = '';
$email_add = '';
$sex = '';
$dob = '';
$fhname = '';
$nid = '';
$mhname = '';
$spname = '';
$edu = '';
$lprem = '';
$sumass = '';
$add1 = '';
$add2 = '';
$add3 = '';
$add4 = '';
$peraddr1 = '';
$peraddr2 = '';
$peraddr3 = '';
$peraddr4 = '';

/*
  if ($_SESSION['nid']!='A server error occurred.  Please contact the administrator.'){
  $_SESSION['nid']=(json_decode ($_SESSION['nid']));
  $name=$_SESSION['nid']->{'Name(English)'};
  $nid=$_SESSION['nid']->{'National ID'};
  $dob=date_format((date_create($_SESSION['nid']->{'Date of Birth'})),"Y-m-d");
  }
  else if (isset($_SESSION['policy'])){
  //self applicent
  $name=$_SESSION['policy']->NAME;
  $nid=$_SESSION['policy']->NID;
  $dob=date_format((date_create($_SESSION['policy']->DOB)),"Y-m-d");
  }
 */

if (isset($_SESSION['prem_plan_name']['nidinfo'])) {
    $niddeco = json_decode($_SESSION['prem_plan_name']['nidinfo'], true);
    $name = $niddeco['Name(English)'];
    $nid = $niddeco['National ID'];
    $dob = date_format((date_create($niddeco['Date of Birth'])), "Y-m-d");
    $fhname = $niddeco['Father Name(English)'];
    $mhname = $niddeco['Mother Name(English)'];
}
if (isset($_SESSION['prem_plan_name']['dob'])) {
    $dob = date_format((date_create($_SESSION['prem_plan_name']['dob'])), "Y-m-d");
}
if (isset($_SESSION['policy'])) {
    //self applicent
    $spname = $_SESSION['policy']->SPNAME;
    //$fhname=$_SESSION['policy']->FHNAME;
    //$mhname=$_SESSION['policy']->MHNAME;
    $ph_home = $_SESSION['policy']->PHONE;
    $ph_office = $ph_home;
    $ph_mob = $ph_home;
    $email_add = $_SESSION['policy']->EMAIL;
    $sex = strtolower($_SESSION['prem_plan_name']['sex']);


    if (isset($_SESSION['fifo'])) {
        $edu = $_SESSION['fifo'][0]->EDU;
        $lprem = $_SESSION['fifo'][0]->LPREM;
        $sumass = $_SESSION['fifo'][0]->PLAN;
    }
    $add1 = $_SESSION['policy']->MADDR1;
    $add2 = $_SESSION['policy']->MADDR2;
    $add3 = $_SESSION['policy']->MADDR3;
    $add4 = $_SESSION['policy']->MADDR4;
    $peraddr1 = $_SESSION['policy']->PADDR1;
    $peraddr2 = $_SESSION['policy']->PADDR2;
    $peraddr3 = $_SESSION['policy']->PADDR3;
    $peraddr4 = $_SESSION['policy']->PADDR4;
}
$date1 = date_create($_SESSION['prem_plan_name']['date_com']);
$date2 = date_create($_SESSION['prem_plan_name']['dob']);
$diff = date_diff($date1, $date2);
$m_age = round(($diff->format("%a")) / 365);
$cou = '
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh" selected>Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
'
?>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/selectFront.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/selectBack.js"></script>
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
<script>
    $(document).ready(function () {
        $("select").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>
<form action="propformnom" method="post"  enctype="multipart/form-data">
    <!--//////////////////////////////////form start//////////////  -->                 
    <div style="font-size:min(2.75vw, 14px);">
        <div>


            বীমা গ্রাহকের পরিচিতি
        </div>
        <div class="row">
            <div class="col-sm-2">        
                <div class="input-group">
                    <span class="input-group-addon">মনোনীতকের সংখ্যা</span>  
                    <input type="number"  class="form-control" name="nom_num" required value="1">
                </div>
            </div>

            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">এজেন্ট কোড</span>
                    <input type="text"  class="form-control" name="agentcode" value="N01516584">
                </div>
            </div>

            <div class="col-sm-5" >
                <div class="input-group">
                    <span class="input-group-addon">গ্রাহকের নাম </span>
                    <input type="text"  class="form-control" name="NAME" value="<?= $name; ?>" readonly>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="input-group">
                    <span class="input-group-btn">
                        <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">গ্রাহকের ছবি</span>
                        <input name="APPPHOTO" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                    </span>
                    <span class="form-control"></span>
                </div>
            </div>
        </div>    


        <div class="row">

            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">মোবাইল</span>
                    <input type="tel"  class="form-control" name="PHONE" value="<?= $ph_mob; ?>" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">ই-মেইল</span>
                    <input type="email"  class="form-control" name="EMAIL" value="<?= $email_add; ?>">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">পরিচয় পাত্র</span>
                    <select class="form-control" id="sel1" name="perid" required>
                        <option disabled selected value="">Choose Color</option>
                        <option value="nid">জাতীয় পরিচয়পত্র</option>
                        <option value="bc">জন্ম নিবন্ধন সনদ</option>
                        <option value="pp">পাসপোর্ট </option>
                        <option value="dl">ড্রাইভিং লাইসেন্স</option>
                        <option value="tin">ই-টি আই এন</option>
                        <option value="ot">অন্যান্য</option>
                    </select>
                </div>
            </div> 

        </div>
        <div class="row">
            <div class="nid box">

                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon">জাতীয় পরিচয়পত্র নং</span>
                        <input type="text"  class="form-control" name="NID" value="<?= $_SESSION['prem_plan_name']['nid']; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">জাতীয় পরিচয়পত্রের কপি</span>
                            <input name="APPNID" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                        </span>
                        <span class="form-control"></span>
                    </div>
                </div>
            </div>
            <div class="bc box">
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon">জন্ম নিবন্ধন সনদ  নং </span>
                        <input type="text"  class="form-control" name="BIRTHID" value="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">জন্ম নিবন্ধন সনদের কপি </span>
                            <input name="APPBIRTHID" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                        </span>
                        <span class="form-control"></span>
                    </div>
                </div>
            </div>
            <div class="pp box">
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon">পাসপোর্ট নং</span>
                        <input type="text"  class="form-control" name="PASSPORT" value="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon">পাসপোর্টের মেয়াদ</span>
                        <input type="date"  class="form-control" name="PASSEXPDT" value="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">পাসপোর্টের কপি </span>
                            <input name="APPPASSPORT" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                        </span>
                        <span class="form-control"></span>
                    </div>
                </div>
            </div>
            <div class="dl box">
                <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-addon">ড্রাইভিং লাইসেন্স নং</span>
                        <input type="text"  class="form-control" name="DRIVINGID" value="">
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="input-group">
                        <span class="input-group-addon">ড্রাইভিং লাইসেন্সের মেয়াদ</span>
                        <input type="date"  class="form-control" name="DRIVINGEXPDT" value="">
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">ড্রাইভিং লাইসেন্সের  কপি </span>
                            <input name="APPDRIVINGID" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                        </span>
                        <span class="form-control"></span>
                    </div>
                </div>
            </div>
            <div class="tin box">
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-addon">ই-টি আই এন </span>
                        <input type="text"  class="form-control" name="ETIN" value="">
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">ই-টি আই এনের কপি </span>
                            <input name="APPETIN" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                        </span>
                        <span class="form-control"></span>
                    </div>
                </div>
            </div>
            <div class="ot box">
                <div class="col-sm-6">

                    <div class="input-group">
                        <span class="input-group-addon">অন্যান্য  </span>
                        <input type="text"  class="form-control" name="OTHERID" value="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">অন্যান্য কপি </span>
                            <input name="APPOTHERID" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                        </span>
                        <span class="form-control"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">পিতার নাম</span>    
                    <input type="text"  class="form-control" name="FHNAME" value="<?= $fhname; ?>" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">মাতার নাম</span>   
                    <input type="text"  class="form-control" name="MHNAME" value="<?= $mhname; ?>" required>
                </div> 
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">স্বামী/স্ত্রীর নাম</span>
                    <input type="text"  class="form-control" name="SPNAME" value="<?= $spname; ?>">
                </div>
            </div>
        </div>

        <div><label>স্থায়ী ঠিকানঃ </label></div>
        <div class="row">
            <div class="col-sm-6">
                <input type="text"  class="form-control" name="add1" value="<?= $add1; ?>,<?= $add2; ?>" maxlength="50" required>
            </div>
            <div class="col-sm-6">
                <input type="text"  class="form-control" name="add2" value="<?= $add3; ?>,<?= $add3; ?>" maxlength="50" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">

                <div class="input-group">
                    <span class="input-group-addon">থানা </span>
                    <input type="text"  class="form-control" name="add3"  required value="Kalabagan">
                </div>

            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">ডিস্ট্রিক্ট  </span>
                    <input type="text"  class="form-control" name="add4"  required value="Dhaka">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">পোস্ট কোড  </span>
                    <input type="text"  class="form-control" name="pcode"  required value="1205">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">দেশ </span>
                    <select class="form-control"  name="coun">
                        <?= $cou; ?>
                    </select>
                </div>
            </div>
        </div>
        <div><label>আবাসিক/বর্তমান ঠিকানঃ </label></div>
        <div class="row">
            <div class="col-sm-6">
                <input type="text"  class="form-control" name="peraddr1" value="<?= $peraddr1; ?>,<?= $peraddr2; ?>" maxlength="50" required>
            </div>
            <div class="col-sm-6">
                <input type="text"  class="form-control" name="peraddr2" value="<?= $peraddr3; ?>,<?= $peraddr4; ?>" maxlength="50" required>
            </div>
        </div> 
        <div class="row">
            <div class="col-sm-3">

                <div class="input-group">
                    <span class="input-group-addon">থানা </span>
                    <input type="text"  class="form-control" name="peraddr3"  required value="Kalabagan">
                </div>

            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">ডিস্ট্রিক্ট  </span>
                    <input type="text"  class="form-control" name="peraddr4"  required value="Dhaka">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">পোস্ট কোড  </span>
                    <input type="text"  class="form-control" name="perpcode"  required value="1205">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">দেশ </span>
                    <select class="form-control"  name="percoun">
                        <?= $cou; ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-addon">পেশাগত নাম,পদবী,ঠিকানা</span>  
                    <input type="text"  class="form-control" name="JOBDETAILS" required value="manager">
                </div>  
            </div>               

        </div>

        <div class="row">
            <div class="col-sm-3" >
                <div class="input-group">
                    <span class="input-group-addon">গ্রাহকের মাসিক আয়</span>  
                    <input type="number"  class="form-control" name="MON_INCOME" required value="120000">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">আয়ের উৎস</span>  
                    <select class="form-control" id="sel1" name="INCOMESOURCE" required>
                        <option disabled selected value="">Choose Color</option>
                        <option value="SALARIES" selected>SALARIES</option>
                        <option value="INTEREST ON SECURITIES">INTEREST ON SECURITIES</option>
                        <option value="HOUSE PROPERTY">HOUSE PROPERTY</option>
                        <option value="AGRICULTURE">AGRICULTURE</option>
                        <option value="BUSINESS">BUSINESS</option>
                        <option value="CAPITAL GAINS">CAPITAL GAINS</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                </div>
            </div>  
            <div class="col-sm-5">
                <div class="input-group">
                    <span class="input-group-addon">অর্থের উৎস যাচাইয়ের পদ্ধতি</span>  
                    <select class="form-control" id="sel1" name="INCOMEVALIDITY" required>
                        <option disabled selected value="">Choose Color</option>
                        <option value="SALARY CERTIFICATE">SALARY CERTIFICATE</option>
                        <option value="SELF DECLARATION">SELF DECLARATION</option>
                        <option value="BANK STATEMENTS" selected>BANK STATEMENTS</option>
                        <option value="OTHERS">OTHERS</option>
                    </select>
                </div>
            </div>
        </div>
        <?php
        if (strtolower($_SESSION['prem_plan_name']['sex']) == 'f') {
            ?>
            <div><label>বিবাহিতা প্রস্তাবকারীর ক্ষেত্রে </label></div>
            <div class="row">
                <div class="col-sm-6">                                        
                    <div class="input-group">
                        <span class="input-group-addon">স্বামী পেশা</span> 
                        <input type="text"  class="form-control" name="husocp" value="Privet Service">
                    </div>
                </div>  
                <div class="col-sm-6">                                        
                    <div class="input-group">
                        <span class="input-group-addon">মাসিক আয়</span> 
                        <input type="number"  class="form-control" name="husmonthinc" value="120000">
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-sm-3">      
                <div class="input-group">
                    <span class="input-group-addon">শিক্ষার মান </span>
                    <select class="form-control" id="sel1" name="eduqul" required>
                        <option disabled  value="">Choose Color</option>
                        <option value="01">SSC lower</option>
                        <option value="10">SSC</option>
                        <option value="11">HSC</option>
                        <option value="12">Bachelor </option>
                        <option value="13" chacked>Master</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-3">        
                <div class="input-group">
                    <span class="input-group-addon">জন্মস্থন</span> 
                    <input type="text"  class="form-control" name="DOBPLACE" required value="Dhaka">
                </div>
            </div>
            <div class="col-sm-6">        
                <div class="input-group">
                    <span class="input-group-addon">বীমা গ্রহণের উদ্দেশ্য</span> 
                    <input type="text"  class="form-control" name="inspur" required value="SAVINGS & SECURITIES">
                </div>  
            </div>
        </div>

        <br>
        <div class="row">
            <input type="submit" name="submitprop" class="btn btn-default" style="width: 100%;">
        </div>
</form>  
