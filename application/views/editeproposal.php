<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>
    <style>
        #radioBtn .notActive {
            color: #3276b1;
            background-color: #fff;
        }

        * {
            border-radius: 10px;
        }

        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding: 1px;

        }

        .box {
            display: none;
        }

        .nid {
        }

        .bc {
        }

        .pp {
        }

        .dl {
        }

        .tin {
        }

        .ot {
        }
    </style>
    <legend>Personal Information of Applicant</legend>
    <div class="row">
        <div class="col-md-6 form-group">

            <form class="form-horizontal" method="POST">
                <fieldset>

                    <!-- Form Name -->
                    <!-- Prepended text-->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">Proposal Number</span>
                                <input id="prependedtext" name="poropnum" class="form-control" type="text"
                                       minlength="10" maxlength="17" required="required">
                            </div>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" name="subpropedit" value="Submit" id="button1id" name="button1id"
                                   class="btn btn-success" style="width: 100%;">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
<?php
if (isset($_POST['subpropedit'])) {
    $wp = $_POST['poropnum'];
    $query_from = "select * from ipl.WEBPROPOSAL where PROPNO='$wp'";
    $q_from = $this->db->query($query_from);
    foreach ($q_from->result() as $r_from) {
        ?>
        <form method="post" enctype="multipart/form-data">
            <!--//////////////////////////////////form start//////////////  -->
            <div style="font-size:min(2.75vw, 14px);">
                <div>
                    বীমা গ্রাহকের পরিচিতি
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">গ্রাহকের নাম </span>
                            <input type="text" class="form-control" name="NAME" value="<?= $r_from->NAME; ?>"
                                   readonly="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">মোবাইল</span>
                            <input type="tel" class="form-control" name="PHONE" value="<?= $r_from->TELHOME; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">ই-মেইল</span>
                            <input type="email" class="form-control" name="EMAIL" value="<?= $r_from->EMAIL; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">পিতার নাম</span>
                            <input type="text" class="form-control" name="FHNAME" value="<?= $r_from->FHNAME; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">মাতার নাম</span>
                            <input type="text" class="form-control" name="MHNAME" value="<?= $r_from->MHNAME; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">স্বামী/স্ত্রীর নাম</span>
                            <input type="text" class="form-control" name="SPNAME" value="<?= $r_from->SPNAME; ?>">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">SEX</span>
                            <select class="form-control" id="sex" name="sex" required="">
                                <option disabled="" selected="" value="">Choose an option</option>
                                <option value="M" <?= $r_from->SEX == 'M' ? ' selected="selected"' : '' ?> >
                                    MALE
                                </option>
                                <option value="F" <?= $r_from->SEX == 'F' ? ' selected="selected"' : '' ?> >
                                    FEMALE
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div><label>স্থায়ী ঠিকানঃ </label></div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="add1" value="<?= $r_from->MADDR1; ?>"
                               maxlength="50" required="">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="add2" value="<?= $r_from->MADDR2; ?>"
                               maxlength="50" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">

                        <div class="input-group">
                            <span class="input-group-addon">থানা </span>
                            <input type="text" class="form-control" name="add3" value="<?= $r_from->MADDR3; ?>"
                                   required="">
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">ডিস্ট্রিক্ট  </span>
                            <input type="text" class="form-control" name="add4" value="<?= $r_from->MADDR4; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">পোস্ট কোড  </span>
                            <input type="text" class="form-control" name="pcode" value="<?= $r_from->POCODE; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">দেশ </span>
                            <select class="form-control" name="coun">

                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh" selected="">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
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
                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
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
                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div><label>আবাসিক/বর্তমান ঠিকানঃ </label></div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="peraddr1" value="<?= $r_from->PADDR1; ?>"
                               maxlength="50" required="">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="peraddr2" value="<?= $r_from->PADDR2; ?>"
                               maxlength="50" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">

                        <div class="input-group">
                            <span class="input-group-addon">থানা </span>
                            <input type="text" class="form-control" name="peraddr3" value="<?= $r_from->PADDR3; ?>"
                                   required="">
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">ডিস্ট্রিক্ট  </span>
                            <input type="text" class="form-control" name="peraddr4" value="<?= $r_from->PADDR4; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">পোস্ট কোড  </span>
                            <input type="text" class="form-control" name="perpcode" value="<?= $r_from->POCODE_PRE; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">দেশ </span>
                            <select class="form-control" name="percoun">

                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh" selected="">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
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
                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
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
                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
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
                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-addon">পেশাগত নাম,পদবী,ঠিকানা</span>
                            <input type="text" class="form-control" name="JOBDETAILS"
                                   value="<?= $r_from->JOBDETAILS; ?>" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">গ্রাহকের মাসিক আয়</span>
                            <input type="number" class="form-control" name="MON_INCOME"
                                   value="<?= $r_from->MON_INCOME; ?>" required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <span class="input-group-addon">আয়ের উৎস</span>
                            <select class="form-control" id="sel1" name="INCOMESOURCE" required="">
                                <option disabled="" selected="" value="">Choose an option</option>
                                <option value="SALARIES" <?= $r_from->INCOMESOURCE == 'SALARIES' ? ' selected="selected"' : '' ?> >
                                    SALARIES
                                </option>
                                <option value="INTEREST ON SECURITIES" <?= $r_from->INCOMESOURCE == 'INTEREST ON SECURITIES' ? ' selected="selected"' : '' ?> >
                                    INTEREST ON SECURITIES
                                </option>
                                <option value="HOUSE PROPERTY" <?= $r_from->INCOMESOURCE == 'HOUSE PROPERTY' ? ' selected="selected"' : '' ?> >
                                    HOUSE PROPERTY
                                </option>
                                <option value="AGRICULTURE" <?= $r_from->INCOMESOURCE == 'AGRICULTURE' ? ' selected="selected"' : '' ?> >
                                    AGRICULTURE
                                </option>
                                <option value="BUSINESS" <?= $r_from->INCOMESOURCE == 'BUSINESS' ? ' selected="selected"' : '' ?> >
                                    BUSINESS
                                </option>
                                <option value="CAPITAL GAINS" <?= $r_from->INCOMESOURCE == 'CAPITAL GAINS' ? ' selected="selected"' : '' ?> >
                                    CAPITAL GAINS
                                </option>
                                <option value="OTHERS" <?= $r_from->INCOMESOURCE == 'OTHERS' ? ' selected="selected"' : '' ?> >
                                    OTHERS
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <span class="input-group-addon">অর্থের উৎস যাচাইয়ের পদ্ধতি</span>
                            <select class="form-control" id="sel1" name="INCOMEVALIDITY" required="">
                                <option disabled="" selected="" value="">Choose an option</option>
                                <option value="SALARY CERTIFICATE" <?= $r_from->INCOMEVALIDITY == 'SALARY CERTIFICATE' ? ' selected="selected"' : '' ?> >
                                    SALARY CERTIFICATE
                                </option>
                                <option value="SELF DECLARATION" <?= $r_from->INCOMEVALIDITY == 'SELF DECLARATION' ? ' selected="selected"' : '' ?> >
                                    SELF DECLARATION
                                </option>
                                <option value="BANK STATEMENTS" <?= $r_from->INCOMEVALIDITY == 'BANK STATEMENTS' ? ' selected="selected"' : '' ?> >
                                    BANK STATEMENTS
                                </option>
                                <option value="OTHERS" <?= $r_from->INCOMEVALIDITY == 'OTHERS' ? ' selected="selected"' : '' ?> >
                                    OTHERS
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div><label>বিবাহিতা প্রস্তাবকারীর ক্ষেত্রে </label></div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">স্বামী পেশা</span>
                            <input type="text" class="form-control" name="husocp" value="<?= $r_from->SPJOBDETAILS; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">মাসিক আয়</span>
                            <input type="number" class="form-control" name="husmonthinc"
                                   value="<?= $r_from->SPMON_INCOME; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">শিক্ষার মান </span>
                            <select class="form-control" id="sel1" name="eduqul" required="">
                                <option disabled="" value="">Choose Color</option>
                                <option value="01">SSC lower</option>
                                <option value="10">SSC</option>
                                <option value="11">HSC</option>
                                <option value="12">Bachelor</option>
                                <option value="13" chacked="">Master</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">জন্মস্থন</span>
                            <input type="text" class="form-control" name="DOBPLACE" value="<?= $r_from->DOBPLACE; ?>"
                                   required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">বীমা গ্রহণের উদ্দেশ্য</span>
                            <input type="text" class="form-control" name="inspur" required=""
                                   value="SAVINGS &amp; SECURITIES">
                        </div>
                    </div>
                </div>

            </div>

            <?php


            $query_nom = "select * from ipl.WEBNOMINEE where WEBPROPOSAL_NO='$r_from->WEBPROPOSAL_NO'";
            $q_nom = $this->db->query($query_nom);
            foreach ($q_nom->result() as $r_nom) {
                $NOMNAME[] = $r_nom->NOMNAME;
                $NOMREL[] = $r_nom->NOMREL;
                //$NOMNID[]=$r_nom->NOMNID;
                $NOMPHOTO[] = $r_nom->NOMPHOTO;
                $NFHNAME[] = $r_nom->NFHNAME;
                $NMHNAME[] = $r_nom->NMHNAME;
                $NSP[] = $r_nom->NSPNAME;
                $NOCCUP[] = $r_nom->NOCCUP;
                $NDOB[] = $r_nom->NDOB;
                $PRESENTADDR[] = $r_nom->PRESENTADDR;
                $NOMPURMADD[] = $r_nom->NOMPURMADD;
                $NOMID[] = $r_nom->NID;
                $NTELHOME[] = $r_nom->NTELHOME;
                $NTELOFFICE[] = $r_nom->NTELOFFICE;
                $NMOBILE[] = $r_nom->NMOBILE;
                $NFAX[] = $r_nom->NFAX;
                $NEMAIL[] = $r_nom->NEMAIL;
                $NOMPAR[] = $r_nom->NOMPAR;
                $PARENNAME[] = $r_nom->PARENNAME;
                $CHNOMAGE[] = $r_nom->CHNOMAGE;
                $CHNOMREL[] = $r_nom->CHNOMREL;
                $PROPID[] = $r_nom->PROPID;
                $WEBPROPOSAL_NO[] = $r_nom->WEBPROPOSAL_NO;
                $NAGE[] = $r_nom->NAGE;
                $NSPNAME[] = $r_nom->NSPNAME;
            }
            for ($x = 0; $x < count($NOMNAME); $x++) {
                ?>
                <div><label><?= $x + 1; ?> মনোনীত ব্যাক্তি </label></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-sm-2">
                            <div class="input-group">
                                <span class="input-group-addon">সম্পর্ক</span>
                                <select name="NOMREL<?= $x; ?>" class="form-control" required="">
                                    <option disabled="" selected="">Choose an option</option>
                                    <option value="4" <?= $NOMREL[$x] == '4' ? 'selected = "selected"' : ""; ?>স্ত্রী
                                    </option>
                                    <option value="3" <?= $NOMREL[$x] == '3' ? 'selected = "selected"' : ""; ?>>স্বামী
                                    </option>
                                    <option value="1" <?= $NOMREL[$x] == '1' ? 'selected = "selected"' : ""; ?> >পিতা
                                    </option>
                                    <option value="2" <?= $NOMREL[$x] == '2' ? 'selected = "selected"' : ""; ?>>মাতা
                                    </option>
                                    <option value="11" <?= $NOMREL[$x] == '11' ? 'selected = "selected"' : ""; ?>>
                                        পুত্র
                                    </option>
                                    <option value="12" <?= $NOMREL[$x] == '12' ? 'selected = "selected"' : ""; ?>>
                                        কন্যা
                                    </option>
                                    <option value="5" <?= $NOMREL[$x] == '5' ? 'selected = "selected"' : ""; ?>>ভাই
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-6">

                                <div class="input-group">
                                    <span class="input-group-addon">নাম</span>
                                    <input type="text" class="form-control" name="NOMNAME<?= $x; ?>"
                                           placeholder="মনোনীত ব্যাক্তির নাম " id="nomname1"
                                           value="<?= $NOMNAME[$x]; ?>">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-primary"
                                          onclick="$(this).parent().find('input[type=file]').click();">মনোনীতকের ছবি</span>
                                    <input name="NOMPHOTO<?= $x; ?>"
                                           onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());"
                                           style="display: none;" type="file">
                                </span>
                                    <span class="form-control"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="NOMID<?= $x; ?>"
                                       placeholder=" এন এই  ডি / জন্ম সনদ নং" value="<?= $NOMNAME[$x]; ?>">
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-primary"
                                          onclick="$(this).parent().find('input[type=file]').click();"> এন এই  ডি ছবি</span>
                                    <input name="NOMIDF<?= $x; ?>"
                                           onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());"
                                           style="display: none;" type="file">
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
                                <input type="text" class="form-control" name="NFHNAME<?= $x; ?>" placeholder="পিতার নাম"
                                       id="nomfa1" value="<?= $NFHNAME[$x]; ?>" required="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon">মাতা</span>
                                <input type="text" class="form-control" name="NMHNAME<?= $x; ?>"
                                       placeholder="মাতার নাম " id="nomma1" value="<?= $NMHNAME[$x]; ?>" required="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon">স্বামী/স্ত্রী</span>
                                <input type="text" class="form-control" name="NSPNAME<?= $x; ?>"
                                       placeholder="স্বামী/স্ত্রীর নাম " value="<?= $NSPNAME[$x]; ?>" id="nomspname1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">পেশা</span>
                                <select name="NOCCUP<?= $x; ?>" class="form-control" required="">
                                    <option value="" disabled="" selected="">Select Occupation</option>
                                    <option value="03" <?= $NOCCUP[$x] == '03' ? 'selected = "selected"' : ""; ?> >
                                        BARBAR
                                    </option>
                                    <option value="12" <?= $NOCCUP[$x] == '12' ? 'selected = "selected"' : ""; ?> >
                                        SERVICE
                                    </option>
                                    <option value="14" <?= $NOCCUP[$x] == '14' ? 'selected = "selected"' : ""; ?> >
                                        HOUSE-WIFE
                                    </option>
                                    <option value="55" <?= $NOCCUP[$x] == '55' ? 'selected = "selected"' : ""; ?> >
                                        STUDENTAAA
                                    </option>
                                    <option value="58" <?= $NOCCUP[$x] == '58' ? 'selected = "selected"' : ""; ?> >
                                        TUTOR
                                    </option>
                                    <option value="59" <?= $NOCCUP[$x] == '59' ? 'selected = "selected"' : ""; ?> >HOUSE
                                        MAID
                                    </option>
                                    <option value="60" <?= $NOCCUP[$x] == '60' ? 'selected = "selected"' : ""; ?> >
                                        COOK
                                    </option>
                                    <option value="61" <?= $NOCCUP[$x] == '61' ? 'selected = "selected"' : ""; ?> >
                                        WELDER
                                    </option>
                                    <option value="62" <?= $NOCCUP[$x] == '62' ? 'selected = "selected"' : ""; ?> >
                                        DOCTOR
                                    </option>
                                    <option value="63" <?= $NOCCUP[$x] == '63' ? 'selected = "selected"' : ""; ?> >
                                        RAJ-MESTORY(GENARAL)
                                    </option>
                                    <option value="64" <?= $NOCCUP[$x] == '64' ? 'selected = "selected"' : ""; ?> >
                                        PAINTER
                                    </option>
                                    <option value="76" <?= $NOCCUP[$x] == '76' ? 'selected = "selected"' : ""; ?> >
                                        BUSINESS (B)
                                    </option>
                                    <option value="79" <?= $NOCCUP[$x] == '79' ? 'selected = "selected"' : ""; ?> >
                                        LABOUR (A)
                                    </option>
                                    <option value="90" <?= $NOCCUP[$x] == '90' ? 'selected = "selected"' : ""; ?> >
                                        LAWYER
                                    </option>
                                    <option value="95" <?= $NOCCUP[$x] == '95' ? 'selected = "selected"' : ""; ?> >HOUSE
                                        WIFE
                                    </option>
                                    <option value="96" <?= $NOCCUP[$x] == '96' ? 'selected = "selected"' : ""; ?> >
                                        STUDENT
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">জন্ম তারিখ</span>
                                <input type="date" class="form-control" name="NDOB<?= $x; ?>" placeholder="জন্ম তারিখ"
                                       value="<?= date_format((date_create($NDOB[$x])), "Y-m-d"); ?>" required="">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">মোবাইল</span>
                                <input type="tel" class="form-control" name="NMOBILE<?= $x; ?>" placeholder="মোবাইল"
                                       value="<?= $NMOBILE[$x]; ?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon">শতকরা</span>
                                <input type="number" class="form-control" name="NOMPAR<?= $x; ?>"
                                       placeholder="শতকরা হার" value="<?= $NOMPAR[$x]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">বর্তমান ঠিকানা</span>
                                <input type="text" class="form-control" name="PRESENTADDR<?= $x; ?>"
                                       placeholder="বর্তমান ঠিকানা" value="<?= $PRESENTADDR[$x]; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">স্থায়ী ঠিকানা</span>
                                <input type="text" class="form-control" name="NOMPURMADD<?= $x; ?>"
                                       placeholder="স্থায়ী ঠিকানা" value="<?= $NOMPURMADD[$x]; ?>">
                            </div>
                        </div>
                    </div>

                </div><!--/fluid-row-->
                <!--/.fluid-container-->
                <?php
            }
            ?>
            <?php
            $query_ex = "select * from ipl.WEBEXTRAPOL where WEBPROPOSAL_NO='$r_from->WEBPROPOSAL_NO'  order by OTODAT desc";
            $q_ex = $this->db->query($query_ex);
            foreach ($q_ex->result() as $r_ex) {
                $OTPOLNO[] = $r_ex->OTPOLNO;
                $OTCM[] = $r_ex->OTCM;
                $OTPREM[] = $r_ex->OTPREM;
                $OTPLA[] = $r_ex->OTPLA;
                $OTODAT[] = $r_ex->OTODAT;
                $OTPROP[] = $r_ex->OTPROP;
            }
            if (!empty($OTPOLNO[0])) {
                for ($x = 0; $x < count($OTPOLNO); $x++) {
                    ?>

                    <div><label>আপনার জীবনের উপর অন্য কোনো বীমা থাকলে উল্ল্যেখ করুন </label></div>

                    <div class="controls-life">
                        <div id="field-life">
                            <div class="entry">
                                <table class=" table" style="padding:0px !important;">
                                    <tbody>
                                    <tr style="padding:0px !important;">
                                        <td style="padding:0px !important;">
                                            <input type="text" class="form-control" name="otpolno<?= $x; ?>"
                                                   placeholder="বীমা পাত্র নং" value="<?= $OTPOLNO[$x]; ?>">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="text" class="form-control" name="otcm<?= $x; ?>"
                                                   placeholder="বীমা প্রটেশনের  নাম" value="<?= $OTCM[$x]; ?>">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="number" class="form-control" name="otprem<?= $x; ?>"
                                                   placeholder="বীমা অংক" value="<?= $OTPREM[$x]; ?>">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="text" class="form-control" name="otpla<?= $x; ?>"
                                                   placeholder="পরিকল্প নং ও মেয়াদ" value="<?= $OTPLA[$x]; ?>">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="date" class="form-control" name="otodat<?= $x; ?>"
                                                   placeholder="বীমা শুরুর তারিখ"
                                                   value="<?= date_format((date_create($OTODAT[$x])), "Y-m-d"); ?>">
                                        </td>
                                        <td style="padding:0px !important;">
                                            <input type="text" class="form-control" name="otprop<?= $x; ?>"
                                                   placeholder="কি শর্তে গৃহীত" value="<?= $OTPROP[$x]; ?>">
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <?php
                }
            }
            ?>

            <div><label>আপনার জীবনের উপর প্রতিকূল প্রভাবকারী কোন অতিরিক্ত তথ্য আছে কি?</label>
                <label><input type="radio" name="exinfo" value="y"> হ্যা </label>
                <label><input type="radio" name="exinfo" value="n" checked=""> না </label></div>
            <div><label>বীমা গ্রহীতার স্বাস্থ সম্পর্কিত বিবৃতি </label></div>
            <div style="padding-left:20px;">(ক) আপনি কি এখন সম্পূর্ণ সুস্থ ?
                <label><input type="radio" name="comok" value="y" checked=""> হ্যা </label>
                <label><input type="radio" name="comok" value="n"> না </label></div>
            <div style="padding-left:20px;">(খ) আপনি কি অতীতে এবং বর্তমানে হৃদরোগ, ডায়াবেটিস, উচ্চরক্তচাপ, যক্ষা,
                হাপানী, কিডনী, বাতন্নুর, জন্ডিস, নিউমোনিয়া, শ্বাসযন্ত্রের রোগ,
                পাকস্থলী বা অন্ত্রের রোগ, মৃত্রাশয়ের রোগ, যৌন রোগ, এইডস (8005), ক্যান্সার, মানসিক রোগ অথবা অন্য কোন
                পীড়া বা রোগে ভূগেছেন
                বাভূগছেন?
                <label><input type="radio" name="illness" value="y"> হ্যা </label>
                <label><input type="radio" name="illness" value="n" checked=""> না </label></div>
            <div style="padding-left:20px;">(গ) আপনি কি কোন অস্ত্রোপচার এবং দূর্ঘটনার সম্মুখীন হয়েছেন?
                <label><input type="radio" name="optacc" value="y"> হ্যা </label>

                <label><input type="radio" name="optacc" value="n" checked=""> না </label></div>
            <div><label>আপনার বর্তমান শাররীক পরিমান উল্লেখ করুন </label></div>
            <div style="padding-left:20px;">
                <div class="row">
                    <div class="col-sm-4">

                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">উচ্চতা </span>
                                <input type="number" class="form-control" style=" max-width: 50%; height: 50px;"
                                       name="hfit" placeholder="ফুট" value="<?= $r_from->HFIT; ?>" required="">
                                <input type="number" class="form-control" style=" max-width: 50%; height: 50px;"
                                       name="hincs" placeholder="ইঞ্চি" value="<?= $r_from->HINCS; ?>" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">ওজন </span>
                                <input type="number" class="form-control" style=" height: 50px;" name="weight"
                                       placeholder="কেজি" value="<?= $r_from->WEIGHT; ?>" required="">
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-8">

                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon">বুকার ম্যাপ<br> (পূর্ণ শ্বাসসহ)</span>
                                <input type="number" class="form-control" style=" height: 50px;" name="inbrith"
                                       value="<?= $r_from->INBRITH; ?>" placeholder="ইঞ্চি" required="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon">বুকার ম্যাপ<br> (শ্বাস ত্যাগ করার পর )</span>
                                <input type="number" class="form-control" style=" height: 50px;" name="outbrith"
                                       value="<?= $r_from->OUTBRITH; ?>" placeholder="ইঞ্চি" required="">

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon">নাভি বরাবর পাটের ম্যাপ</span>
                                <input type="number" class="form-control" style=" height: 50px;" name="stom"
                                       value="<?= $r_from->STOM; ?>" placeholder="ইঞ্চি" required="">

                            </div>
                        </div>

                    </div>

                </div>
                <div style="padding-left:5px;">
                    <input type="text" class="form-control" name="spmark"
                           placeholder="(খ)  শনাক্তকরণের জন্য কোনো বিশেষ চিহ্ন থাকলে লিখুন">
                </div>
                <script>
                    var getFront = new selectFront;
                    var getBack = new selectBack;
                    getFront.targets('choose', 'selected');
                    getPol.targets('choospol', 'selectedpol');

                </script>
                <label class="control-label" for="inputSuccess1">মহিলা প্রস্তাবিকার ক্ষেত্রে অতিরিক্ত প্রশ্নমালা ৪
                    হ্যা/না ঘরে টিক দিন </label><br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label" for="inputSuccess1">আপনি কি এখন সন্তান সম্ভবা?</label>
                        <?php if ($r_from->SEX == 'M')  : ?>
                            <label><input type="radio" name="pregn" value='n/a' checked
                                          required="" <?= $r_from->SEX == 'M' ? "" : ""; ?>>প্রযোজ্য নয়</label>
                        <?php else : ?>
                            <label><input type="radio" name="pregn" value='y' required=""> হ্যা </label>
                            <label><input type="radio" name="pregn" value='n' checked=""> না </label>;
                        <?php endif; ?>

                    </div>
                    <div class="col-sm-4">
                        <label class="control-label" for="inputSuccess1">সন্তান প্রসব সব সময় স্বাভাবিক হয়েছে
                            কি?</label>
                        <?php if ($r_from->SEX == 'M') : ?>
                            <label><input type="radio" name="normdel" value="n/a" required="" checked>প্রযোজ্য নয়
                            </label>
                        <?php else: ?>
                            <label><input type="radio" name="normdel" value="y" required=""> হ্যা </label>
                            <label><input type="radio" name="normdel" value="n" checked=""> না </label>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <?php if ($r_from->SEX == 'M') : ?>
                                <span class="input-group-addon">শেষ সন্তানের জন্ম তারিখ </span><input
                                        class="form-control"
                                        type="text"
                                        readonly
                                        name="lc_dob"
                                        value="n/a">

                            <?php else : ?>
                                <span class="input-group-addon">শেষ সন্তানের জন্ম তারিখ </span><input
                                        class="form-control"
                                        type="date"
                                        name="lc_dob"
                                        value="<?= $r_from->LC_DOB; ?>">
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="control-label" for="inputSuccess1">আপনি কি কোন স্ত্রী রোগে, জরায়ু বা স্তনের
                            গীড়ায় ভূগেছেন/ভূগছেন ? </label>
                        <?php if ($r_from->SEX == 'M') : ?>
                            <label><input type="radio" name="normdel" value="n/a" required="" checked>প্রযোজ্য নয়
                            </label>
                        <? else : ?>
                            <label><input type="radio" name="brescan" value="y" required=""> হ্যা </label>
                            <label><input type="radio" name="brescan" value="n" checked=""> না </label>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">আপনার সর্বশেষ মাসিকের তারিখ লিখুন </span>
                            <?php if ($r_from->SEX == 'M') : ?>
                                <input
                                        class="form-control"
                                        type="text"
                                        readonly
                                        name="lc_dob"
                                        value="n/a">
                            <?php else: ?>
                                <input
                                        class="form-control" type="date" name="lc_minst"
                                        value="<?= $r_from->LC_MINST; ?>"
                                >
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <label>পারিবারিক ইতিসাহিস</label>

                <table class="table" style="padding:0px !important;">

                    <tbody>
                    <tr style="padding:0px !important;">
                        <th rowspan="2" style="padding:0px !important;">সম্পর্ক</th>
                        <th colspan="3" style="padding:0px !important;">
                            <div align="center">জীবিত</div>
                        </th>
                        <th colspan="4" style="padding:0px !important;">
                            <div align="center">মৃত</div>
                        </th>
                    </tr>
                    <tr>
                        <th style="padding:0px !important;">
                            <div style="max-width: 45px;">সংখ্যা</div>
                        </th>
                        <th style="padding:0px !important;">
                            <div style="max-width: 45px;">বয়স</div>
                        </th>
                        <th style="padding:0px !important;">
                            <div>বর্তমান শাররীক অবস্থা</div>
                        </th>
                        <th style="padding:0px !important;">
                            <div>মৃত্যুকালে<br>বয়স</div>
                        </th>
                        <th style="padding:0px !important;"> মৃত্যুর কারণ</th>
                        <th style="padding:0px !important;">
                            <div>শেষ রোগের স্থায়িত্ব</div>
                        </th>
                        <th style="padding:0px !important;">
                            <div style="max-width: 60px;">মৃত্যুর সন</div>
                        </th>
                    </tr>
                    <tr style="padding:0px !important;">
                        <th style="padding:0px !important;">পিত</th>
                        <td style="padding:0px !important;"><input type="number" class="form-control" name="NUMFH"
                                                                   value="<?= $r_from->NUMFH; ?>"
                                                                   style="max-width: 60px;"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEFH"
                                                                   value="<?= $r_from->AGEFH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="PREFH"
                                                                   value="<?= $r_from->PREFH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDFH"
                                                                   value="<?= $r_from->AGEDFH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="COSFH"
                                                                   value="<?= $r_from->COSFH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="LILLFH"
                                                                   value="<?= $r_from->LILLFH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="DYFH"
                                                                   value="<?= $r_from->DYFH; ?>"></td>
                    </tr>
                    <tr>
                        <th style="padding:0px !important;">মাতা</th>
                        <td style="padding:0px !important;"><input type="number" class="form-control" name="NUMMH"
                                                                   value="<?= $r_from->NUMMH; ?>"
                                                                   style="max-width: 60px;"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEMH"
                                                                   value="<?= $r_from->AGEMH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="PREMH"
                                                                   value="<?= $r_from->PREMH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDMH"
                                                                   value="<?= $r_from->AGEDMH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="COSMH"
                                                                   value="<?= $r_from->COSMH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="LILLMH"
                                                                   value="<?= $r_from->LILLMH; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="DYMH"
                                                                   value="<?= $r_from->DYMH; ?>"></td>
                    </tr>
                    <tr>
                        <th style="padding:0px !important;">ভাই</th>
                        <td style="padding:0px !important;"><input type="number" class="form-control" name="NUMBRO"
                                                                   value="<?= $r_from->NUMBRO; ?>"
                                                                   style="max-width: 60px;"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEBRO"
                                                                   value="<?= $r_from->AGEBRO; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="PREBRO"
                                                                   value="<?= $r_from->PREBRO; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDBRO"
                                                                   value="<?= $r_from->AGEDBRO; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="COSBRO"
                                                                   value="<?= $r_from->COSBRO; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="LILLBRO"
                                                                   value="<?= $r_from->LILLBRO; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="DYBRO"
                                                                   value="<?= $r_from->DYBRO; ?>"></td>
                    </tr>
                    <tr style="padding:0px !important;">
                        <th style="padding:0px !important;">বোন</th>
                        <td style="padding:0px !important;"><input type="number" class="form-control" name="NUMSIS"
                                                                   value="<?= $r_from->NUMSIS; ?>"
                                                                   style="max-width: 60px;"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGESIS"
                                                                   value="<?= $r_from->AGESIS; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="PRESIS"
                                                                   value="<?= $r_from->PRESIS; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDSIS"
                                                                   value="<?= $r_from->AGEDSIS; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="COSSIS"
                                                                   value="<?= $r_from->COSSIS; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="LILLSIS"
                                                                   value="<?= $r_from->LILLSIS; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="DYSIS"
                                                                   value="<?= $r_from->DYSIS; ?>"></td>
                    </tr>
                    <tr style="padding:0px !important;">
                        <th style="padding:0px !important;">স্বামী/স্ত্রী</th>
                        <td style="padding:0px !important;"><input type="number" class="form-control" name="NUMSP"
                                                                   value="<?= $r_from->NUMSP; ?>"
                                                                   style="max-width: 60px;"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGESP"
                                                                   value="<?= $r_from->AGESP; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="PRESP"
                                                                   value="<?= $r_from->PRESP; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDSP"
                                                                   value="<?= $r_from->AGEDSP; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="COSSP"
                                                                   value="<?= $r_from->COSSP; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="LILLSP"
                                                                   value="<?= $r_from->LILLSP; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="DYSP"
                                                                   value="<?= $r_from->DYSP; ?>"></td>
                    </tr>
                    <tr>
                        <th style="padding:0px !important;">ছেলে</th>
                        <td style="padding:0px !important;"><input type="number" class="form-control" name="NUMSON"
                                                                   value="<?= $r_from->NUMSON; ?>"
                                                                   style="max-width: 60px;"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGESON"
                                                                   value="<?= $r_from->AGESON; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="PRESON"
                                                                   value="<?= $r_from->PRESON; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDSON"
                                                                   value="<?= $r_from->AGEDSON; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="COSSON"
                                                                   value="<?= $r_from->COSSON; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="LILLSON"
                                                                   value="<?= $r_from->LILLSON; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="DYSON"
                                                                   value="<?= $r_from->DYSON; ?>"></td>
                    </tr>
                    <tr style="padding:0px !important;">
                        <th style="padding:0px !important;">মেয়ে</th>
                        <td style="padding:0px !important;"><input type="number" class="form-control" name="NUMDOT"
                                                                   value="<?= $r_from->NUMDOT; ?>"
                                                                   style="max-width: 60px;"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDOT"
                                                                   value="<?= $r_from->AGEDOT; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="PREDOT"
                                                                   value="<?= $r_from->PREDOT; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="AGEDDOT"
                                                                   value="<?= $r_from->AGEDDOT; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="COSDOT"
                                                                   value="<?= $r_from->COSDOT; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="LILLDOT"
                                                                   value="<?= $r_from->LILLDOT; ?>"></td>
                        <td style="padding:0px !important;"><input type="text" class="form-control" name="DYDOT"
                                                                   value="<?= $r_from->DYDOT; ?>"></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table">
                    <tbody>
                    <tr>
                        <td max-width="45">(ক)</td>
                        <td colspan="2"><input type="text" class="form-control" name="baname"
                                               placeholder="বীমা গ্রহীতার ব্যাঙ্ক হিসাবের নাম"
                                               value="<?= $r_from->BANAME; ?>"></td>
                    </tr>
                    <tr>
                        <td max-width="45">(খ)</td>
                        <td><input type="text" class="form-control" name="baaccno" placeholder="হিসাব নং"
                                   value="<?= $r_from->BAACCNO; ?>"></td>
                        <td>
                            <select name="acctype" class="form-control" required="">
                                <option value="0" disabled="" selected="">হিসাবের ধরণ</option>
                                <option value="1">সঞ্চয়ী</option>
                                <option value="2">চলতি</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td max-width="45">(গ)</td>
                        <td colspan="2"><input type="text" class="form-control" name="babran"
                                               placeholder="ব্যাংক ও শাখার নাম" value="<?= $r_from->BABRAN; ?>"></td>
                    </tr>
                    <tr>
                        <td>(ঘ)</td>
                        <td colspan="2"><input type="text" class="form-control" name="baadd"
                                               placeholder="ব্যাংকের ঠিকানা " value="<?= $r_from->BAADD; ?>"></td>
                    </tr>
                    </tbody>
                </table>
                (পর্বতিত কোম্পানি থেকে টাকা উত্তোলনের ক্ষেত্রে প্রযোজ্যে হবে)
                <!-- TODO: Missing CoffeeScript 2 -->
            </div>
            <br><label>আপনার এবং আপনার মনোনীতকের সমস্ত নথিপত্র আপলোড করুন </label>

            <div class="controls-file">
                <div id="field-file">
                    <div class="entry">
                        <table class=" table" style="padding:0px !important;">
                            <tbody>
                            <tr style="padding:0px !important;">
                                <td width="230" style="padding:0px !important;">
                                    <input type="file" name="UPFILE[]" class="form-control">
                                </td>

                                <td style="padding:0px !important;">
                                    <input type="text" name="UPFILECOM[]" class="form-control"
                                           placeholder="ফাইলটির বর্ণনা ">

                                </td>
                                <td style="padding:0px !important;">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success btn-file-add" type="button">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(function () {
                            $(document).on('click', '.btn-file-add', function (e) {
                                e.preventDefault();

                                var controlForm = $('.controls-file #field-file:first'),
                                    currentEntry = $(this).parents('.entry:first'),
                                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                                newEntry.find('input').val('');
                                controlForm.find('.entry:not(:last) .btn-file-add')
                                    .removeClass('btn-file-add').addClass('btn-file-remove')
                                    .removeClass('btn-success').addClass('btn-danger')
                                    .html('<span class="glyphicon glyphicon-minus"></span>');

                            }).on('click', '.btn-file-remove', function (e) {
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


        </form>

        <?php
    }
}
?>