<?php


if ($urm[0]->AGE > 18) {
    $uage = 'readonly';
} else {
    $uage = '';
}

if ($urm[0]->SEX == 'MALE') {
    $vsex = 'readonly';
} else {
    $vsex = '';
}
if ($urm[0]->SUMASS < 2000000) {
    $nm = 'selected';
    $mi = '';
} else {
    $nm = '';
    $mi = 'selected';
}
if ($urm[0]->MEDICAL == 'NON-MEDICAL') {
    $mc = 'checked';
} else {
    $mc = '';
}
?>
<head>


    <style>

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {
            position: relative;
            width: 29.7cm;
            height: 14cm;
        }
        page[size="A4"][layout="portrait"] {
            width: 29.7cm;
            height: 14cm;
        }
        @media print {
            body, page {
                margin: 0;
                box-shadow: 0;
            }
        }

        p.round3 {
            border: 2px solid #031269;
            border-radius: 12px;
            padding: 39px 1072px 1px 1px;
        }
        label {
            font-size: 10.5px;
        }

        input {
            font-size: 10.5px;
        }

        select {
            font-size: 10.5px;
        }
        .buty {
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>

<body>
    

        <page size="A4">

            <!-- 
                <img src="asset/images/urm.jpg"style="height: 12.7cm; width: 29.5cm; padding: 10px">
                
            -->
            <div style="position: absolute;top: 18px;left: 22px;">
                <p class="round3"></p>
            </div>

            <label style="position: absolute;top: 28px;left: 37px;">Project</label>
            <select name="PRJ_CODE" style="position: absolute;top: 28px;left: 99px;width: 100px;height: 21px;">
                <option value="saab">Project A</option>
                <option value="saab">Project B</option>
                <option value="saab">Project C</option>
                <option value="saab">Project D</option>
                <option value="saab">Project E</option>
            </select>


            <div style="position: absolute;top: 28px;left: 205px;">
                <label>Proposal</label>
                <input type="text" name="PROPNO" readonly value="<?= $urm[0]->PROPNO; ?>" style="width: 130px;height: 21px;" >
            </div>
            <input type="submit" name="choice-radio" value="Search" class="buty" style="height: 21px;position: absolute;top: 28px;left: 406px;width: 60px;background-color: #4CAF50;">
            <input type="submit" name="choice-radio" value="Summary" class="buty" style="height: 21px;position: absolute;top: 28px;left: 468px;width: 60px; background-color: #ee7600;">
            <div style="position: absolute;top: 28px;left: 563px;">
                <label>Underwriting Decision</label>
                <input type="text" name="UW_DECISION" readonly value="Proposal Automatic Rejected" style="width: 222px;height: 21px; color: red;font-weight: 900;">
                <input type="text" name="UW_DECISION_DT" readonly value="<?php echo date('d/m/Y', time()); ?>" style="width: 82px;height: 21px; color: red;font-weight: 900;">
                
                <input type="submit" name="choice-radio" value="Save" onclick="location.href='urmrep?prop=<?= $urm[0]->PROPNO; ?>';" class="buty" style="height: 21px;width: 60px;background-color: #44025A;">
                
            </div>

            <label style="position: absolute;top: 79px;left: 25px;">Name</label>
            <input type="text" readonly name="NAME" value="<?= $urm[0]->NAME; ?>" style="width: 215px;height: 21px; position: absolute;top: 79px;left: 105px;">
            <label style="position: absolute;top: 101px;left: 25px;">Plan</label>
            <input type="text" readonly name="PLAN" value="<?= $urm[0]->PLAN; ?>" style="width: 215px;height: 21px; position: absolute;top: 101px;left: 105px;">  
            <label style="position: absolute;top: 123px;left: 25px;">Term</label>
            <input type="text" readonly name="TERM" value="<?= $urm[0]->TERM; ?>" style="width: 107px;height: 21px; position: absolute;top: 123px;left: 105px;">

            <label style="position: absolute;top: 123px;left: 220px;">Sex</label>
            <input type="text" readonly name="SEX" value="<?= $urm[0]->SEX; ?>"  style="width: 74px;height: 21px;position: absolute;top: 123px;left: 246px;">
            <label style="position: absolute;top: 145px;left: 25px;">Pay Mode</label>
            <input type="text" readonly name="PAYMODE" value="<?= $urm[0]->PAYMODE; ?>" style="width: 215px;height: 21px; position: absolute;top: 145px;left: 105px;">
            <label style="position: absolute;top: 167px;left: 25px;">Policy Type</label>
            <input type="text" readonly name="POLICY_TYPE" value="<?= $urm[0]->POLICY_TYPE; ?>" style="width: 215px;height: 21px; position: absolute;top: 167px;left: 105px;"> 

            <label style="position: absolute;top: 79px;left: 330px;">Proposal Date</label>
            <input type="text" readonly name="PROPDAT" value="<?= $urm[0]->PROPDAT; ?>" style="width: 110px;height: 21px; position: absolute;top: 79px;left: 427px;">
            <label style="position: absolute;top: 101px;left: 330px;">Datecom</label>
            <input type="text" readonly name="DATCOM" value="<?= $urm[0]->DATCOM; ?>" style="width: 110px;height: 21px; position: absolute;top: 101px;left: 427px;">
            <label style="position: absolute;top: 123px;left: 330px;">Occupation</label>
            <input type="text" readonly name="OCCUP" value="<?= $urm[0]->OCCUP; ?>" style="width: 110px;height: 21px; position: absolute;top: 123px;left: 427px;">
            <label style="position: absolute;top: 145px;left: 330px;">Residence</label>
            <input type="text" readonly name="UR" value="<?= $urm[0]->UR; ?>" style="width: 110px;height: 21px; position: absolute;top: 145px;left: 427px;">
            <label style="position: absolute;top: 167px;left: 330px;">APU</label>
            <input type="text" readonly name="APU" value="<?= $urm[0]->APU; ?>" style="width: 110px;height: 21px; position: absolute;top: 167px;left: 427px;">

            <label style="position: absolute;top: 64px;left: 545px;color: #031269;font-weight: 900;">Validation Status</label>
            <label style="position: absolute;top: 79px;left: 545px;">Munich</label>
            <select name="MUNICH" style="position: absolute;top: 81px;left: 614px;width: 269px;height: 21px;">
                <option value="saab" <?= $mi; ?>>Munich</option>
                <option value="vw" <?= $nm; ?>>Non Munich</option>
            </select>
            <label style="position: absolute;top: 101px;left: 545px;">Signature</label>
            <input type="text" name="SIGNATURE_VALIDATION" style="width: 24px;height: 21px;position: absolute;top: 101px;left: 614px">
            <input type="text" name="SIGNATURE_VAL_STATUS" style="width: 85px;height: 21px;position: absolute;top: 101px;left: 638px;">
            <label style="position: absolute;top: 123px;left: 545px;">Age</label>
            <input type="text" name="AGE_VALIDATION" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 123px;left: 614px">
            <input type="text" name="AGE_VAL_STATUS" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 123px;left: 638px;">
            <label style="position: absolute;top: 145px;left: 545px;">Underage</label>
            <input type="text" name="UNDERAGE_VALIDATION" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 145px;left: 614px">
            <input type="text" name="UNDERAGE_VAL_STATUS" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 145px;left: 638px;">
            <label style="position: absolute;top: 167px;left: 545px;">Gender</label>
            <input type="text" name="GENDER_VALIDATION" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 167px;left: 614px">
            <input type="text" name="GENDER_VAL_STATUS" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 167px;left: 638px;">

            <label style="position: absolute;top: 101px;left: 725px;">Table & Term</label>
            <input type="text" name="TERM_VALIDATION_STATUS" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 101px;left: 814px">
            <input type="text" name="TERM_VALIDATION" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 101px;left: 838px;">
            <label style="position: absolute;top: 123px;left: 725px;">Proposal</label>
            <input type="text" name="COMPLETE_VAL_STATUS" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 123px;left: 814px">
            <input type="text" name="COMPLETE_PRO_VALIDATION" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 123px;left: 838px;">
            <label style="position: absolute;top: 145px;left: 725px;">Medical</label>
            <input type="text" name="MEDICAL_VALIDATION" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 145px;left: 814px">
            <input type="text" name="MEDICAL_VAL_STATUS" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 145px;left: 838px;">
            <label style="position: absolute;top: 167px;left: 725px;">Occupation</label>
            <input type="text" name="OCCUPATION_VALIDATION_STATUS" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 167px;left: 814px">
            <input type="text" name="OCCUPATION_VALIDATION" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 167px;left: 838px;">

            <label style="position: absolute;top: 80px;left: 890px;">Munich Ref. No.</label>
            <input type="text" name="MUNICH_REF" style="width: 109px;height: 21px;position: absolute;top: 80px;left: 1003px;">
            <label style="position: absolute;top: 102px;left: 925px;">Risk Info</label>
            <input type="text" name="RISK_INFO_VALIDATION" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 102px;left: 1003px">
            <input type="text" name="RISKINFO_VAL_STATUS" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 102px;left: 1027px;">
            <label style="position: absolute;top: 123px;left: 925px;">Planwise Risk</label>
            <input type="text" name="PLANRISK_VALIDATION" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 123px;left: 1003px">
            <input type="text" name="PLANRISK_VALIDATION_STATUS" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 123px;left: 1027px;">
            <label style="position: absolute;top: 167px;left: 925px;">Residence</label>
            <input type="text" name="RESIDENCE_VALIDATION" value="Y" readonly style="width: 24px;height: 21px;position: absolute;top: 167px;left: 1003px">
            <input type="text" name="RESIDENCE_STATUS" value="APPROVED" readonly style="width: 85px;height: 21px;position: absolute;top: 167px;left: 1027px;">

            <label style="position: absolute;top: 190px;left: 25px;color: #031269;font-weight: 900;">Age Validation</label>
            <label style="position: absolute;top: 210px;left: 25px;">Age & DOB</label>
            <input type="text" readonly name="AGE" value="<?= $urm[0]->AGE; ?>" style="width: 24px;height: 21px;position: absolute;top: 210px;left: 105px;">
            <input type="text" readonly name="DOB" value="<?= $urm[0]->DOB; ?>" style="width: 95px;height: 21px;position: absolute;top: 210px;left: 130px;">
            <label style="position: absolute;top: 232px;left: 25px;">Age Proof </label>
            <input type="text" readonly name="APC" value="<?= $urm[0]->APC; ?>" style="width: 120px;height: 21px;position: absolute;top: 232px;left: 105px;">
            <label style="position: absolute;top: 254px;left: 25px;">Two Photo </label>
            <select name="AGE_PROVE_PHOTO" style="width: 120px;height: 21px;position: absolute;top: 254px;left: 105px;">
                <option value="" selected=""></option>
                <option value="Y">YES</option>
                <option value="N">NO</option>
            </select>   

            <label style="position: absolute;top: 190px;left: 230px;color: #031269;font-weight: 900;">Under Age Validation</label>
            <label style="position: absolute;top: 210px;left: 230px;">Under Eighteen</label>
            <select name="UNDER_EIGHTEEN" <?php echo $uage; ?> style="width: 35px;height: 21px;position: absolute;top: 210px;left: 370px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 232px;left: 230px;">Guardian Signature</label>
            <select name="GUARDIAN_SIGNATURE" <?php echo $uage; ?> style="width: 35px;height: 21px;position: absolute;top: 232px;left: 370px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 254px;left: 230px;">Payment Aggrement</label>
            <select name="PAYMENT_AGGREMENT" <?php echo $uage; ?> style="width: 35px;height: 21px;position: absolute;top: 254px;left: 370px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <label style="position: absolute;top: 190px;left: 410px;color: #031269;font-weight: 900;">Gender Validation</label>
            <label style="position: absolute;top: 210px;left: 410px;">Pregnant</label>
            <select name="PREG" <?php echo $vsex; ?> style="width: 35px;height: 21px;position: absolute;top: 210px;left: 588px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 232px;left: 410px;">Child Birth Within 6 Month</label>
            <select name="CHILDBIRTH" <?php echo $vsex; ?> style="width: 35px;height: 21px;position: absolute;top: 232px;left: 588px;">

                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 254px;left: 410px;">Delivery Type</label>
            <select name="DELIVERY" <?php echo $vsex; ?> style="width: 35px;height: 21px;position: absolute;top: 254px;left: 588px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 276px;left: 410px;">Delivery Duration</label>
            <select name="DELIVERY_DURATION" <?php echo $vsex; ?> style="width: 35px;height: 21px;position: absolute;top: 276px;left: 588px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 298px;left: 410px;">Medical Document</label>
            <select name="MEDICAL_DOCUMENT" <?php echo $vsex; ?> style="width: 35px;height: 21px;position: absolute;top: 298px;left: 588px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <label style="position: absolute;top: 210px;left: 628px;">Service</label>
            <select name="SERVICE" style="width: 35px;height: 21px;position: absolute;top: 210px;left: 752px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 232px;left: 628px;">S.S.C Certificate</label>
            <select name="S_S_C_CERTIFICATE" style="width: 35px;height: 21px;position: absolute;top: 232px;left: 752px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 254px;left: 628px;">Income Source</label>
            <select name="SELF_SERVICE" style="width: 35px;height: 21px;position: absolute;top: 254px;left: 752px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="Y">N</option>
            </select>
            <label style="position: absolute;top: 276px;left: 628px;">Income Certificate </label>
            <select name="INCOME_CERTIFICATE" style="width: 35px;height: 21px;position: absolute;top: 276px;left: 752px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 298px;left: 628px;">Job Document</label>
            <select name="JOB_LETTER" style="width: 35px;height: 21px;position: absolute;top: 298px;left: 752px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 190px;left: 790px;color: #031269;font-weight: 900;">Medical and Risk Info Validation</label>
            <label style="position: absolute;top: 212px;left: 790px;">Medical</label>
            <input type="text" readonly name="MEDICAL" value="<?= $urm[0]->MEDICAL; ?>" style="width: 85px;height: 21px;position: absolute;top: 212px;left: 882px;">
            <label style="position: absolute;top: 234px;left: 790px;">Sum at Risk</label>
            <input type="text" readonly name="SUMRISK" value="<?= $urm[0]->SUMRISK; ?>" style="width: 85px;height: 21px;position: absolute;top: 234px;left: 882px;">
            <label style="position: absolute;top: 256px;left: 790px;">Sum Assured</label>
            <input type="text" readonly name="SUMASS" value="<?= $urm[0]->SUMASS; ?>" style="width: 85px;height: 21px;position: absolute;top: 256px;left: 882px;">

            <label style="width: 59px;height: 21px;position: absolute;top: 212px;left: 970px;">Education</label>
            <input type="text" readonly name="EDCODE" value="<?= $urm[0]->EDCODE; ?>" style="width: 74px;height: 21px;position: absolute;top: 212px;left: 1040px;">
            <label style="position: absolute;top: 235px;left: 970px;">Education<br>Document</label>

            <select name="ATTACHED_EDU_DOC" style="width: 35px;height: 21px;position: absolute;top: 235px;left: 1040px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <label style="position: absolute;top: 273px;left: 25px;color: #031269;font-weight: 900;">Signature Validation</label>
            <label style="position: absolute;top: 295px;left: 25px;">Signature Type</label>
            <select name="SIGNATURE_TYPE" style="width: 35px;height: 21px;position: absolute;top: 295px;left: 165px;">
                <option value="" selected=""></option>
                <option value="S">S</option>
                <option value="T">T</option>
            </select>
            <label style="position: absolute;top: 317px;left: 25px;">Certified Left Thumb</label>
            <select name="CERTIFIED_LEFT_THUMB" style="width: 35px;height: 21px;position: absolute;top: 317px;left: 165px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 339px;left: 25px;">Fmr Pur Test</label>
            <select name="FMR_PUR_TEST" style="width: 35px;height: 21px;position: absolute;top: 339px;left: 165px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <label style="position: absolute;top: 273px;left: 210px;color: #031269;font-weight: 900;">Basic Info.</label>
            <label style="position: absolute;top: 295px;left: 210px;">Basic Premium</label>
            <input type="text" readonly name="LPREM" value="<?= $urm[0]->LPREM; ?>"style="width: 60px;height: 21px;position: absolute;top: 295px;left: 335px;">
            <label style="position: absolute;top: 317px;left: 210px;">Anual Premium</label>
            <input type="text" readonly name="APREM" value="<?= $urm[0]->APREM; ?>" style="width: 60px;height: 21px;position: absolute;top: 317px;left: 335px;">
            <label style="position: absolute;top: 339px;left: 210px;">Previous Sumrisk</label>
            <input type="text" readonly name="EXTSUMRISK" value="<?= $urm[0]->EXTSUMRISK; ?>" style="width: 60px;height: 21px;position: absolute;top: 339px;left: 335px;">


            <label style="position: absolute;top: 317px;left: 410px;color: #031269;font-weight: 900;">Supplimentary & Extra</label>
            <label style="position: absolute;top: 339px;left: 410px;">Suppl. Prem. -1</label>
            <input type="text" readonly name="SPREM1" value="<?= $urm[0]->SPREM1; ?>" style="width: 80px;height: 21px; position: absolute;top: 339px;left: 514px;">
            <label style="position: absolute;top: 361px;left: 410px;">Suppl. Prem. -2</label>
            <input type="text" readonly name="SPREM2" value="<?= $urm[0]->SPREM2; ?>" style="width: 80px;height: 21px; position: absolute;top: 361px;left: 514px;">
            <label style="position: absolute;top: 383px;left: 410px;">Suppl. Prem. -3</label>
            <input type="text" readonly name="SPREM3" value="<?= $urm[0]->SPREM3; ?>" style="width: 80px;height: 21px; position: absolute;top: 383px;left: 514px;">
            <label style="position: absolute;top: 405px;left: 410px;">Suppl. Prem. -4</label>
            <input type="text" readonly name="SPREM4" value="<?= $urm[0]->SPREM4; ?>" style="width: 80px;height: 21px; position: absolute;top: 405px;left: 514px;">
            <label style="position: absolute;top: 427px;left: 410px;">Suppl. Prem. -5</label>
            <input type="text" readonly name="SPREM5" value="<?= $urm[0]->SPREM5; ?>" style="width: 80px;height: 21px; position: absolute;top: 427px;left: 514px;">
            <label style="position: absolute;top: 449px;left: 410px;">Suppl. Prem. -6</label>
            <input type="text" readonly name="SPREM6" value="<?= $urm[0]->SPREM6; ?>" style="width: 80px;height: 21px; position: absolute;top: 449px;left: 514px;">

            <label style="position: absolute;top: 339px;left: 600px;">Extra Prem -1</label>
            <input type="text" readonly name="EXTSUM1" value="<?= $urm[0]->EXTSUM1; ?>" style="width: 80px;height: 21px; position: absolute;top: 339px;left: 695px;">
            <label style="position: absolute;top: 361px;left: 600px;">Extra Prem -2</label>
            <input type="text" readonly name="EXTSUM2" value="<?= $urm[0]->EXTSUM2; ?>" style="width: 80px;height: 21px; position: absolute;top: 361px;left: 695px;">
            <label style="position: absolute;top: 383px;left: 600px;">Extra Prem -3</label>
            <input type="text" readonly name="EXTSUM3" value="<?= $urm[0]->EXTSUM3; ?>" style="width: 80px;height: 21px; position: absolute;top: 383px;left: 695px;">
            <label style="position: absolute;top: 427px;left: 600px;">Lien Code</label>
            <input type="text" readonly name="LIENCODE" value="<?= $urm[0]->LIENCODE; ?>" style="width: 80px;height: 21px; position: absolute;top: 427px;left: 695px;">

            <label style="position: absolute;top: 471px;left: 410px;">Extra Condrition</label>
            <input type="text" name="REM1" value="<?= $urm[0]->REM1; ?>" style="width: 250px;height: 21px;position: absolute;top: 471px;left: 523px;">

            <label style="position: absolute;top: 285px;left: 790px;">Pathology Test </label>
            <select name="PATHOLOGY_TEST" style="width: 35px;height: 21px;position: absolute;top: 285px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 307px;left: 790px;">Medical Test</label>
            <select name="MEDICAL_TEST" style="width: 35px;height: 21px;position: absolute;top: 307px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 329px;left: 790px;">FMR Form</label>
            <select name="FMR_FORM" style="width: 35px;height: 21px;position: absolute;top: 329px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 351px;left: 790px;">Relative Doctor</label>
            <select name="RELATIVE_DOCTOR" style="width: 35px;height: 21px;position: absolute;top: 351px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 373px;left: 790px;">Authorized Doctor</label>
            <select name="AUTHORIZED_DOCTOR" style="width: 35px;height: 21px;position: absolute;top: 373px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 395px;left: 790px;">Gov Doctor</label>
            <select name="GOV_DOCTOR" style="width: 35px;height: 21px;position: absolute;top: 395px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 417px;left: 790px;">Civil Surgeon</label>
            <select name="CIVIL_SURGEON" style="width: 35px;height: 21px;position: absolute;top: 417px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 439px;left: 790px;">Same Doctor </label>
            <select name="SAME_DOCTOR" style="width: 35px;height: 21px;position: absolute;top: 439px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 461px;left: 790px;">Authority Permission</label>
            <select name="AUTHORITY_PERMISSION" style="width: 35px;height: 21px;position: absolute;top: 461px;left: 914px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <div style="width: 53px;height: 21px;position: absolute;top: 283px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;" >NMDF</label><input type="checkbox" <?= $mc; ?> NMDF id="NMDF" name="NMDF" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 305px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">FMR</label><input type="checkbox" id="vehicle1" name="FMR" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 327px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">PUR</label><input type="checkbox" id="vehicle1" name="PUR" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 349px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">FBS</label><input type="checkbox" id="vehicle1" name="FBS" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 371px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">LQ Pro</label><input type="checkbox" id="vehicle1" name="LIPID_PROFILE" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 393px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">ECG</label><input type="checkbox" id="vehicle1" name="ECG" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 415px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">CXR</label><input type="checkbox" id="vehicle1" name="CXR" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 437px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">CBC</label><input type="checkbox" id="vehicle1" name="CBC" value="Y">
            </div>
            <div style="width: 53px;height: 21px;position: absolute;top: 459px;left: 963px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">GTT</label><input type="checkbox" id="vehicle1" name="GTT" value="Y">
            </div>




            <div style="width: 100px;height: 21px;position: absolute;top: 283px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">ESR</label><input type="checkbox" id="vehicle1" name="ESR" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 305px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">LFT</label><input type="checkbox" id="vehicle1" name="LFT" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 327px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">S Creatinine</label><input type="checkbox" id="vehicle1" name="vehicle1" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 349px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">HIV</label><input type="checkbox" id="vehicle1" name="HIV" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 371px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">Hbsag</label><input type="checkbox" id="vehicle1" name="HBSAG" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 393px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">Hba1c</label><input type="checkbox" id="vehicle1" name="HBA1C" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 415px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">TMT</label><input type="checkbox" id="vehicle1" name="TMT" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 437px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">X Ray</label><input type="checkbox" id="vehicle1" name="X_RAY" value="Y">
            </div>
            <div style="width: 100px;height: 21px;position: absolute;top: 459px;left: 1015px;text-align: right;">
                <label for="vehicle1" style="padding-right: 5px;">Others</label><input type="checkbox" id="vehicle1" name="OTHERS" value="Y">
            </div>



            <label style="position: absolute;top: 360px;left: 25px;">Proposal Validation</label>
            <label style="position: absolute;top: 382px;left: 25px;">Proposal Date Expire</label>
            <select name="PROPOSAL_DATE_EXPIRE" style="width: 35px;height: 21px;position: absolute;top: 382px;left: 165px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 404px;left: 25px;">Expenses Received</label>
            <select name="EXPENSES_RECEIVED" style="width: 35px;height: 21px;position: absolute;top: 404px;left: 165px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 426px;left: 25px;">Requested GH Declaration </label>
            <select name="GOOD_HEALTH_DECLARATION" style="width: 35px;height: 21px;position: absolute;top: 426px;left: 165px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 448px;left: 25px;">Good Health Certificate </label>
            <select name="GOOD_HEALTH_CERTIFICATE" style="width: 35px;height: 21px;position: absolute;top: 448px;left: 165px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <label style="position: absolute;top: 470px;left: 25px;">Good Health Certified</label>
            <select name="GOOD_HEALTH_CERTIFIED" style="width: 35px;height: 21px;position: absolute;top: 470px;left: 165px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select> 

            <label style="position: absolute;top: 360px;left: 210px;">NRB Validation </label>
            <label style="position: absolute;top: 382px;left: 210px;">Residence Address </label>
            <select name="FOREIGN_ADDRESS" style="width: 35px;height: 21px;position: absolute;top: 382px;left: 335px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 404px;left: 210px;">Occupation Q.Form</label>
            <select name="OQF_FORM" style="width: 35px;height: 21px;position: absolute;top: 404px;left: 335px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 426px;left: 210px;">Job/Business Doc </label>
            <select name="JOB_BUSINESS_DOC" style="width: 35px;height: 21px;position: absolute;top: 426px;left: 335px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>
            <label style="position: absolute;top: 448px;left: 210px;">Income Statement</label>
            <select name="INCOME_STATEMENT" style="width: 35px;height: 21px;position: absolute;top: 448px;left: 335px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <label style="position: absolute;top: 470px;left: 210px;">Valid Passport Copy</label>
            <select name="VALID_PASS_COPY" style="width: 35px;height: 21px;position: absolute;top: 470px;left: 335px;">
                <option value="" selected=""></option>
                <option value="Y">Y</option>
                <option value="N">N</option>
            </select>

            <label style="position: absolute;top: 495px;left: 25px;">Remarks :</label>
            <input type="text" name="REMARKS" style="width: 870px;height: 21px;position: absolute;top: 495px;left: 80px;">
            <input type="submit" name="choice-radio" value="Risk Info. Validation" class="buty" style="width: 160px; height: 21px; position: absolute; top: 495px;left: 954px;background-color: #02095A;">
        </page>
</body>
</html>
