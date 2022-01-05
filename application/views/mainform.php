<style>
    body {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 11px !important;
        line-height: 1.42857143;
        color: #555555;
        background-color: #ffffff;
    }
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 12px;
        width: 12px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
<?php
//$wp= 44;
$wp = $_SESSION['fprint']['WEBSEQ'];
$query_from = "select * from ipl.WEBPROPOSAL where WEBPROPOSAL_NO='$wp'";
$q_from = $this->db->query($query_from);
foreach ($q_from->result() as $r_from) {
    ////  $query_nom_ins ="UPDATE IPL.WEBPROPOSAL SET PROPNO='$PROPNO' WHERE WEBPROPOSAL_NO='$appsec'";
    //    $this->db->query($query_nom_ins);   
    $HIPLAN = $r_from->HIPLAN;
    if ($HIPLAN == 1) {
        $hh = 45000;
    } else if ($HIPLAN == 2) {
        $hh = 75000;
    } else if ($HIPLAN == 3) {
        $hh = 100000;
    } else if ($HIPLAN == 4) {
        $hh = 150000;
    } else {
        $hh = '';
    }
    $_SESSION['premcal'] = array(
        "datecom" => $r_from->PROPDAT,
        "dob" => $r_from->DOB,
        "age" => $r_from->AGE,
        "plan" => $r_from->PLAN,
        "planname" => $r_from->PLANNAME,
        "term" => $r_from->TERM,
        "paymode" => $r_from->PAYMODE,
        "sumass" => $r_from->SUMASS,
        "apu" => $r_from->APU,
        "sadb" => $r_from->O_ADB,
        "spdab" => $r_from->O_PDAB,
        "occup" => $r_from->OCCUP,
        "prem" => $r_from->LPREM,
        "hip" => $hh,
        "jinfo" => $r_from->JINFO,
        "jprem" => $r_from->JPREM
    );
    $CODE = $r_from->CODE;
    // $PROPNO=$r_from->PROPNO;
    $PROPDAT = $r_from->PROPDAT;
    $POLICY = $r_from->POLICY;
    $DOB = $r_from->DOB;
    $NAME = $r_from->NAME;
    $FHNAME = $r_from->FHNAME;
    $MHNAME = $r_from->MHNAME;
    $SPNAME = $r_from->SPNAME;
    $NATIONALITY = $r_from->NATIONALITY;
    $TELHOME = $r_from->TELHOME;
    $TELOFFICE = $r_from->TELOFFICE;
    $PHONE = $r_from->PHONE;
    $FAX = $r_from->FAX;
    $EMAIL = $r_from->EMAIL;
    $NID = $r_from->NID;
    $PASSPORT = $r_from->PASSPORT;
    $PASSEXPDT = $r_from->PASSEXPDT;
    $BIRTHID = $r_from->BIRTHID;
    $ETIN = $r_from->ETIN;
    $DRIVINGID = $r_from->DRIVINGID;
    $DRIVINGEXPDT = $r_from->DRIVINGEXPDT;
    $OTHERID = $r_from->OTHERID;
    $PADDR1 = $r_from->PADDR1 . ',' . $r_from->PADDR2;
    $PADDR3 = $r_from->PADDR3 . ',' . $r_from->PADDR4;
    $MADDR1 = $r_from->MADDR1 . ',' . $r_from->MADDR2;
    $MADDR3 = $r_from->MADDR3 . ',' . $r_from->MADDR4;
    $OCCUP = $r_from->OCCUP;
    $JOBDETAILS = $r_from->JOBDETAILS;
    $MON_INCOME = $r_from->MON_INCOME;
    $INCOMESOURCE = $r_from->INCOMESOURCE;
    $INCOMEVALIDITY = $r_from->INCOMEVALIDITY;

    $SEX = $r_from->SEX;
    if (strtolower($SEX) == 'f') {
        $NSPNAME = $r_from->SPNAME;
        $SPJOBDETAILS = $r_from->SPJOBDETAILS;
        $SPMON_INCOME = $r_from->SPMON_INCOME;
    } else {
        $NSPNAME = '';
        $SPJOBDETAILS = '';
        $SPMON_INCOME = '';
    }
    $SSCPF = $r_from->SSCPF;
    $edu = '';
    if (($r_from->EDCODE) == '01') {
        $edu = 'SSC Lower';
    }
    if (($r_from->EDCODE) == '10') {
        $edu = 'SSC';
    }
    if (($r_from->EDCODE) == '11') {
        $edu = 'HSC';
    }
    if (($r_from->EDCODE) == '12') {
        $edu = 'Bachelor';
    }
    if (($r_from->EDCODE) == '13') {
        $edu = 'Master';
    }
    $DOBPLACE = $r_from->DOBPLACE;
    $AGE = $r_from->AGE;
    $INSPUR = $r_from->INSPUR;
    $PLANNAME = $r_from->PLANNAME;
    $PLAN = $r_from->PLAN;
    $TERM = $r_from->TERM;
    $SUMASS = $r_from->SUMASS;

    if (($r_from->APU) != 0) {
        $APU = $r_from->APU;
    } else {
        $APU = '';
    }
    $ADB = $r_from->ADB;
    $PDAB = $r_from->PDAB;
    $HI = $r_from->HI;
    $PAYMODE = $r_from->PAYMODE;
    $LPREM = $r_from->TOTPREM;
    $EXINFO = $r_from->EXINFO;
    $COMOK = $r_from->COMOK;
    $ILLNESS = $r_from->ILLNESS;
    $OPTACC = $r_from->OPTACC;
    $HFIT = $r_from->HFIT;
    $HINCS = $r_from->HINCS;
    $WEIGHT = $r_from->WEIGHT;
    $INBRITH = $r_from->INBRITH;
    $OUTBRITH = $r_from->OUTBRITH;
    $STOM = $r_from->STOM;
    $SPMARK = $r_from->SPMARK;
    $PREGN = $r_from->PREGN;
    $NORMDEL = $r_from->NORMDEL;
    $LC_DOB = $r_from->LC_DOB;
    $BRESCAN = $r_from->BRESCAN;
    $LC_MINST = $r_from->LC_MINST;
    $NUMFH = $r_from->NUMFH;
    $AGEFH = $r_from->AGEFH;
    $PREFH = $r_from->PREFH;
    $AGEDFH = $r_from->AGEDFH;
    $COSFH = $r_from->COSFH;
    $LILLFH = $r_from->LILLFH;
    $DYFH = $r_from->DYFH;
    $NUMMH = $r_from->NUMMH;
    $AGEMH = $r_from->AGEMH;
    $PREMH = $r_from->PREMH;
    $AGEDMH = $r_from->AGEDMH;
    $COSMH = $r_from->COSMH;
    $LILLMH = $r_from->LILLMH;
    $DYMH = $r_from->DYMH;
    $NUMBRO = $r_from->NUMBRO;
    $AGEBRO = $r_from->AGEBRO;
    $PREBRO = $r_from->PREBRO;
    $AGEDBRO = $r_from->AGEDBRO;
    $COSBRO = $r_from->COSBRO;
    $LILLBRO = $r_from->LILLBRO;
    $DYBRO = $r_from->DYBRO;
    $NUMSIS = $r_from->NUMSIS;
    $AGESIS = $r_from->AGESIS;
    $PRESIS = $r_from->PRESIS;
    $AGEDSIS = $r_from->AGEDSIS;
    $COSSIS = $r_from->COSSIS;
    $LILLSIS = $r_from->LILLSIS;
    $DYSIS = $r_from->DYSIS;
    $NUMSP = $r_from->NUMSP;
    $AGESP = $r_from->AGESP;
    $PRESP = $r_from->PRESP;
    $AGEDSP = $r_from->AGEDSP;
    $COSSP = $r_from->COSSP;
    $LILLSP = $r_from->LILLSP;
    $DYSP = $r_from->DYSP;
    $NUMSON = $r_from->NUMSON;
    $AGESON = $r_from->AGESON;
    $PRESON = $r_from->PRESON;
    $AGEDSON = $r_from->AGEDSON;
    $COSSON = $r_from->COSSON;
    $LILLSON = $r_from->LILLSON;
    $DYSON = $r_from->DYSON;
    $NUMDOT = $r_from->NUMDOT;
    $AGEDOT = $r_from->AGEDOT;
    $PREDOT = $r_from->PREDOT;
    $AGEDDOT = $r_from->AGEDDOT;
    $COSDOT = $r_from->COSDOT;
    $LILLDOT = $r_from->LILLDOT;
    $DYDOT = $r_from->DYDOT;
    $BANAME = $r_from->BANAME;
    $ACCTYPE = $r_from->ACCTYPE;
    $BAACCNO = $r_from->BAACCNO;
    $BABRAN = $r_from->BABRAN;
    $BAADD = $r_from->BAADD;
    $PHOTO = $r_from->PHOTO;
    $O_ADB = $r_from->O_ADB;
    $O_PDAB = $r_from->O_PDAB;
    $query_pn = "select project from ipl.project where PRJ_CODE='$r_from->PROJECT'";
    $q_pn = $this->db->query($query_pn);
    foreach ($q_pn->result() as $r_pn) {
        $PROJECT_NAME = $r_pn->PROJECT;
    }
}
$OFFICE = $r_from->OFFICE;
$agentdet = $this->agent_model->get_agent($CODE, $OFFICE);
if (!isset($_SESSION['fprint']['NVEW'])) {
    $query_prop = "select IPL.AUTO_PROPOSAL('$OFFICE') propno from dual";
    $q_prop = $this->db->query($query_prop);
    foreach ($q_prop->result() as $r_prop) {
        $PROPNO = $r_prop->PROPNO;
    }
    $_SESSION['fprint']['PROPNO'] = $PROPNO;
  
      $query_up_prop ="UPDATE IPL.SC_SLNO SET PROPNO=NVL(PROPNO,0)+1,PROPNO_DATE=SYSDATE WHERE SCCODE='$OFFICE'";
      $this->db->query($query_up_prop);
      $query_nom_ins ="UPDATE IPL.WEBPROPOSAL SET PROPNO='$PROPNO' WHERE WEBPROPOSAL_NO='$wp'";
      $this->db->query($query_nom_ins);
     
}
if (isset($_SESSION['fprint']['NVEW']) && $_SESSION['fprint']['NVEW'] == 1) {
    $PROPNO = $_SESSION['fprint']['PROPNO'];
}

$query_nom = "select * from ipl.WEBNOMINEE where WEBPROPOSAL_NO='$wp'";
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
}

$query_ex = "select * from ipl.WEBEXTRAPOL where WEBPROPOSAL_NO='$wp'  order by OTODAT desc";
$q_ex = $this->db->query($query_ex);
foreach ($q_ex->result() as $r_ex) {
    $OTPOLNO[] = $r_ex->OTPOLNO;
    $OTCM[] = $r_ex->OTCM;
    $OTPREM[] = $r_ex->OTPREM;
    $OTPLA[] = $r_ex->OTPLA;
    $OTODAT[] = $r_ex->OTODAT;
    $OTPROP[] = $r_ex->OTPROP;
}
$nomcou = count($NOMNAME);
if ($nomcou > 1) {
    echo '1 of ' . $nomcou . ' Nominee Rest are in separate page';
    $nperfs = $NOMPAR[0] . '%';
} else {
    $nperfs = '';
}
$query_ocup = "SELECT OCCUP,OCCUPNAME FROM ipl.OCCUP";
$q_ocup = $this->db->query($query_ocup);
foreach ($q_ocup->result() as $r_ocup) {
    $ad[] = $r_ocup;
}
$_SESSION['occ'] = $ad;
$nomrel = array("Father", 'Mother', 'Husband', 'Wife', 'Brother', '', '', '', '', '', 'Son', 'Daughter');
?>
<?php
$jinfo = json_decode($_SESSION['premcal']['jinfo'], true);
$jprem = json_decode($_SESSION['premcal']['jprem'], true);
/*
echo '<pre>';
print_r($jinfo);
echo '</pre>';
 * 
 */
?>
<page size="A4">

    <img src="asset/images/nli1.jpg"style="height: 29.7cm; width: 21cm">
    <div style="position: absolute;top: 32px;left: 670px;">
        <img class="propimg"src="<?php echo base_url(); ?>asset/images/prphoto/<?php echo $PHOTO; ?>" >
    </div>
    <div style="position: absolute;top: 215px;left: 65px;"><?= $CODE; ?></div>
    <div style="position: absolute;top: 182px;left: 575px;"><?= $PROPNO; ?></div>
    <div style="position: absolute;top: 265px;left: 430px;"><?= $NAME; ?></div>
    <div style="position: absolute;top: 297px;left: 430px;"><?= $FHNAME; ?> / <?= $SPNAME; ?></div>
    <div style="position: absolute;top: 315px;left: 430px;"><?= $MHNAME; ?></div>
    <div style="position: absolute;top: 330px;left: 430px;">
        <?php
        for ($x = 0; $x < count($ad); $x++) {
            if ($ad[$x]->OCCUP == $OCCUP) {
                echo $ad[$x]->OCCUPNAME;
            }
        }
        ?>
    </div>
    <div style="position: absolute;top: 345px;left: 430px;"><?= $JOBDETAILS; ?></div>
    <div style="position: absolute;top: 378px;left: 30px; width: 380px"><?= $MADDR1; ?>, <?= $MADDR3; ?></div>
    <div style="position: absolute;top: 378px;left: 405px; width: 385px"><?= $PADDR1; ?>, <?= $PADDR3; ?></div>
    <div style="position: absolute;top: 412px;left: 180px; font-size: 90%"><?= $jinfo[3][1]; ?> Years</div>
    <div style="position: absolute;top: 412px;left: 320px; font-size: 90%"><?= $jinfo[2][1]; ?></div>
    <div style="position: absolute;top: 412px;left: 625px; font-size: 90%"><?= $NATIONALITY; ?></div>
    <div style="position: absolute;top: 445px;left: 180px; font-size: 90%"><?= $jinfo[7][1]; ?></div>
    <div style="position: absolute;top: 459px;left: 200px;"> <?= substr($jinfo[7][1], 0, 3); ?></div>
    <div style="position: absolute;top: 459px;left: 280px;"> <?= $jinfo[4][1]; ?> Years</div>
    <?php
    if ($PAYMODE == 5) {
        //month -5
        echo '<div style="position: absolute;top: 472px;left: 340px;font-size: 20px;">&#10004;</div>';
    }
    if ($PAYMODE == 4) {
        //querter -4
        echo '<div style="position: absolute;top: 472px;left: 279px;font-size: 20px;">&#10004;</div>';
    }
    if ($PAYMODE == 2) {
        //hlf -2
        echo '<div style="position: absolute;top: 472px;left: 211px;font-size: 20px;">&#10004;</div>';
    }
    if ($PAYMODE == 1) {
        //year -1
        echo '<div style="position: absolute;top: 472px;left: 144px;font-size: 20px;">&#10004;</div>';
    }
    if ($PAYMODE == 0) {
        //month -0
        echo '<div style="position: absolute;top: 472px;left: 144px;font-size: 20px;"></div>';
    }
    if ($ADB != 0) {
        echo '<div style="position: absolute;top: 456px;left: 412px;font-size: 20px;">&#10004;</div>';
        echo '<div style="position: absolute;top: 465px;left: 535px;">Sum Assured (' . $O_ADB . 'BDT)</div>';
    }
    if ($PDAB != 0) {
        echo '<div style="position: absolute;top: 472px;left: 412px;font-size: 20px;">&#10004;</div>';
        echo '<div style="position: absolute;top: 480px;left: 600px;">Sum Assured (' . $O_PDAB . 'BDT)</div>';
    }
    if ($HIPLAN != 0) {
        echo '<div style="position: absolute;top: 489px;left: 412px;font-size: 20px;">&#10004;</div>';

        echo '<div style="position: absolute;top: 483px;left: 675px;"> Sum Assured (' . $hh . 'BDT)</div>';
    }
    ?>
    <div style="position: absolute;top: 532px;left: 200px;"><?= $edu; ?></div>
    <div style="position: absolute;top: 617px;left:30px;"><?= $OTCM[0]; ?></div>
    <div style="position: absolute;top: 617px;left:180px;"><?= $OTPOLNO[0]; ?></div>
    <div style="position: absolute;top: 617px;left:260px;"><?= $OTPREM[0]; ?></div>
    <div style="position: absolute;top: 617px;left:360px;"><?= $OTPROP[0]; ?> <?= $OTPLA[0]; ?></div>
    <div style="position: absolute;top: 617px;left:540px;"><?= $OTODAT[0]; ?></div>
    <div style="position: absolute;top: 630px;left:30px;"><?= $OTCM[1]; ?></div>
    <div style="position: absolute;top: 630px;left:180px;"><?= $OTPOLNO[1]; ?></div>
    <div style="position: absolute;top: 630px;left:260px;"><?= $OTPREM[1]; ?></div>
    <div style="position: absolute;top: 630px;left:360px;"><?= $OTPROP[1]; ?> <?= $OTPLA[1]; ?></div>
    <div style="position: absolute;top: 630px;left:540px;"><?= $OTODAT[1]; ?></div>
    <div style="position: absolute;top: 650px;left: 170px;"><?= $NOMNAME[0]; ?></div>
    <div style="position: absolute;top: 650px;left:460px;"><?= $NAGE[0]; ?></div>
    <div style="position: absolute;top: 650px;left: 580px;"><?php echo $nomrel[$NOMREL[0] - 1]; ?></div>
    <div style="position: absolute;top:895px;left: 95px;"><?= $AGEFH; ?></div>
    <div style="position: absolute;top:895px;left: 125px;"><?= $PREFH; ?></div>
    <div style="position: absolute;top:895px;left: 215px;"><?= $AGEDFH; ?></div>
    <div style="position: absolute;top:895px;left: 260px;"><?= $COSFH; ?></div>
    <div style="position: absolute;top:895px;left: 305px;"><?= $LILLFH; ?></div>
    <div style="position: absolute;top:895px;left: 360px;"><?= $DYFH; ?></div>
    <div style="position: absolute;top:909px;left: 95px;"><?= $AGEMH; ?></div>
    <div style="position: absolute;top:909px;left: 125px;"><?= $PREMH; ?></div>
    <div style="position: absolute;top:909px;left: 215px;"><?= $AGEDMH; ?></div>
    <div style="position: absolute;top:909px;left: 260px;"><?= $COSMH; ?></div>
    <div style="position: absolute;top:909px;left: 305px;"><?= $LILLMH; ?></div>
    <div style="position: absolute;top:909px;left: 360px;"><?= $DYMH; ?></div>
    <div style="position: absolute;top:923px;left: 95px;"><?= $AGEBRO; ?></div>
    <div style="position: absolute;top:923px;left: 125px;"><?= $PREBRO; ?></div>
    <div style="position: absolute;top:923px;left: 215px;"><?= $AGEDBRO; ?></div>
    <div style="position: absolute;top:923px;left: 260px;"><?= $COSBRO; ?></div>
    <div style="position: absolute;top:923px;left: 305px;"><?= $LILLBRO; ?></div>
    <div style="position: absolute;top:923px;left: 360px;"><?= $DYBRO; ?></div>
    <div style="position: absolute;top:937px;left: 95px;"><?= $AGESIS; ?></div>
    <div style="position: absolute;top:937px;left: 125px;"><?= $PRESIS; ?></div>
    <div style="position: absolute;top:937px;left: 215px;"><?= $AGEDSIS; ?></div>
    <div style="position: absolute;top:937px;left: 260px;"><?= $COSSIS; ?></div>
    <div style="position: absolute;top:937px;left: 305px;"><?= $LILLSIS; ?></div>
    <div style="position: absolute;top:937px;left: 360px;"><?= $DYSIS; ?></div>
    <div style="position: absolute;top:949px;left: 95px;"><?= $AGESP; ?></div>
    <div style="position: absolute;top:949px;left: 125px;"><?= $PRESP; ?></div>
    <div style="position: absolute;top:949px;left: 215px;"><?= $AGEDSP; ?></div>
    <div style="position: absolute;top:949px;left: 260px;"><?= $COSSP; ?></div>
    <div style="position: absolute;top:949px;left: 305px;"><?= $LILLSP; ?></div>
    <div style="position: absolute;top:949px;left: 360px;"><?= $DYSP; ?></div>
    <div style="position: absolute;top:963px;left: 95px;"><?= $AGESON; ?></div>
    <div style="position: absolute;top:963px;left: 125px;"><?= $PRESON; ?></div>
    <div style="position: absolute;top:963px;left: 215px;"><?= $AGEDSON; ?></div>
    <div style="position: absolute;top:963px;left: 260px;"><?= $COSSON; ?></div>
    <div style="position: absolute;top:963px;left: 305px;"><?= $LILLSON; ?></div>
    <div style="position: absolute;top:963px;left: 360px;"><?= $DYSON; ?></div>
    <div style="position: absolute;top:978px;left: 95px;"><?= $AGEDOT; ?></div>
    <div style="position: absolute;top:978px;left: 125px;"><?= $PREDOT; ?></div>
    <div style="position: absolute;top:978px;left: 215px;"><?= $AGEDDOT; ?></div>
    <div style="position: absolute;top:978px;left: 260px;"><?= $COSDOT; ?></div>
    <div style="position: absolute;top:978px;left: 305px;"><?= $LILLDOT; ?></div>
    <div style="position: absolute;top:978px;left: 360px;"><?= $DYDOT; ?></div>
</page>


<page size="A4">
    <img src="asset/images/nli2.jpg"style="height: 29.7cm; width: 21cm">
</page>



<?php
if ($nomcou > 1) {
    ?>
    <page size="A4">
        <style>
            .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
                padding: 1px;
                vertical-align:middle;

            }
        </style> 
        <?php
        for ($x = 1; $x <= $nomcou - 1; $x++) {
            //    for ($x = 1; $x <= 10; $x++) {
            if (($x % 3) == 0) {
                echo '</page><page size="A4">';
            }
            ?>

            <br>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <tr>
                        <td>মনোনীত ব্যাক্তির নাম </td>
                        <td colspan="3"><?= $NOMNAME[$x]; ?></td>
                        <td>সম্পর্ক </td>
                        <td><?php
                            echo $nomrel[$NOMREL[$x] - 1];
                            ?></td>
                        <td rowspan="12" style="text-align:center" class="align-middle">
                            <img class="propimg"src="<?php echo base_url(); ?>asset/images/nomphoto/<?= $NOMPHOTO[$x]; ?>" >
                            <br><?= $NOMPAR[$x]; ?>%
                        </td>
                    </tr>
                    <tr>
                        <td>পিতার নাম</td>
                        <td colspan="5"><?= $NFHNAME[$x]; ?></td>
                    </tr>
                    <tr>
                        <td> মাতার নাম </td>
                        <td colspan="5"><?= $NMHNAME[$x]; ?></td>
                    </tr>
                    <tr>
                        <td>স্বামী/ স্ত্রীর নাম </td>
                        <td colspan="5">hghghfgh</td>
                    </tr>

                    <tr>
                        <td>পেশা </td>
                        <td><?= $NOCCUP[$x]; ?></td>
                        <td>জন্ম তারিখ </td>
                        <td><?= $NDOB[$x]; ?></td>
                        <td>বয়স </td>
                        <td><?= $NAGE[$x]; ?></td>
                    </tr>
                    <tr>
                        <td>বর্তমান ঠিকানা </td>
                        <td colspan="5"><?= $PRESENTADDR[$x]; ?></td>
                    </tr>
                    <tr>
                        <td>স্থায়ী ঠিকানা </td>
                        <td colspan="5"><?= $NOMPURMADD[$x]; ?></td>
                    </tr>    <tr>
                        <td>জাতীয় পরিচয় পত্র <br>/জন্মসনদ নং (কপি সহ )</td>
                        <td colspan="5">hghfg</td>
                    </tr>    <tr>
                        <td>টেলিফোন (বাসা)</td>
                        <td><?= $NTELHOME[$x]; ?></td>
                        <td colspan="2">টেলিফোন (অফিস )</td>
                        <td colspan="2"><?= $NTELOFFICE[$x]; ?></td>
                    </tr>    <tr>
                        <td>মোবাইল</td>
                        <td><?= $NMOBILE[$x]; ?></td>
                        <td colspan="2">ফ্যাক্স </td>
                        <td colspan="2"><?= $NFAX[$x]; ?></td>
                    </tr>    <tr>
                        <td>ইমেইল </td>
                        <td colspan="5"><?= $NEMAIL[$x]; ?></td>
                    </tr>    <tr>
                        <td colspan="6"><p>মনোনীতকের বয়স ১৮ বৎসরের কম </p>
                            <p>অভিবাকের নাম: <?= $PARENNAME[$x]; ?>বয়স: <?= $CHNOMAGE[$x]; ?> বছর সম্পর্ক:   <?= $CHNOMREL[$x]; ?></p></td>
                    </tr>    
                </table>
            </div>   
        <?php } ?>

    </page>
    <?php
}
/*
  $query_ext = "select * from ipl.WEBEXTRAPOL where WEBPROPOSAL_NO='$wp'";
  //  $query_ext = "select * from ipl.WEBEXTRAPOL where WEBPROPOSAL_NO='44'";
  $q_ext  = $this->db->query($query_ext);
  foreach ($q_ext ->result() as $r_ext):
  $OTPOLNO[]=$r_ext->OTPOLNO;
  $OTCM[]=$r_ext->OTCM;
  $OTPREM[]=$r_ext->OTPREM;
  $OTPLA[]=$r_ext->OTPLA;
  $OTODAT[]=$r_ext->OTODAT;
  $OTPROP[]=$r_ext->OTPROP;
  endforeach;
  $extcou=count ($OTPOLNO);
  if ($extcou>1){ }

 */
?>
