<?php

class Appdata_model extends CI_Model {

    public function get_appdata() {
        if (isset($_SESSION['prem_plan_name']['paymode'])) {
            $paymode = $_SESSION['prem_plan_name']['paymode'];
        }
        if (isset($_SESSION['prem_plan_name']['sumass'])) {
            $sumass = $_SESSION['prem_plan_name']['sumass'];
        }
        if ($_SESSION['prem_plan_name']['plan'] == '501') {
            $paymode = 1;
            if ($_SESSION['prem_plan_name']['esmopt'] == '1') {
                $sumass = 500000;
            } else if ($_SESSION['prem_plan_name']['esmopt'] == '2') {
                $sumass = 1000000;
            }
        }
        // hi form
        else if ($_SESSION['prem_plan_name']['plan'] == '213' || $_SESSION['prem_plan_name']['plan'] == '212') {
            $paymode = 5;
            $sumass = $_SESSION['prem_plan_name']['sumass'];
        }
        //main form
        else {
            $paymode = $_SESSION['prem_plan_name']['paymode'];
        }

        if (isset($_SESSION['prem_plan_name']['shi'])) {
            $shi = $_SESSION['prem_plan_name']['shi'];
        } else {
            $shi = '';
        }


        if (isset($_SESSION['prem_plan_name']['APPBIRTHID'])) {
            $APPBIRTHID = $_SESSION['prem_plan_name']['APPBIRTHID'];
        } else {
            $APPBIRTHID = '';
        }
        if (isset($_SESSION['prem_plan_name']['APPDRIVINGID'])) {
            $APPDRIVINGID = $_SESSION['prem_plan_name']['APPDRIVINGID'];
        } else {
            $APPDRIVINGID = '';
        }
        if (isset($_SESSION['prem_plan_name']['APPETIN'])) {
            $APPETIN = $_SESSION['prem_plan_name']['APPETIN'];
        } else {
            $APPETIN = '';
        }
        if (isset($_SESSION['prem_plan_name']['APPNID'])) {
            $APPNID = $_SESSION['prem_plan_name']['APPNID'];
        } else {
            $APPNID = '';
        }
        if (isset($_SESSION['prem_plan_name']['APPOTHERID'])) {
            $APPOTHERID = $_SESSION['prem_plan_name']['APPBIRTHID'];
        } else {
            $APPOTHERID = '';
        }
        if (isset($_SESSION['prem_plan_name']['APPPASSPORT'])) {
            $APPPASSPORT = $_SESSION['prem_plan_name']['APPPASSPORT'];
        } else {
            $APPPASSPORT = '';
        }

        if (isset($_SESSION['prem_plan_name']['OCCUP'])) {
            $ocup = $_SESSION['prem_plan_name']['OCCUP'];
        } else {
            $ocup = 12;
        }
        if (isset($_SESSION['prem_plan_name']['cicheck'])) {
            $s_ci = $_SESSION['prem_plan_name']['sumass'] / 2;
            if ($s_ci > 100000) {
                $s_ci = 100000;
            }
        } else {
            $s_ci = '';
        }

        if ($_SESSION['prem_plan_name']['supli'] == '2') {
            $S_SUMASS_ADB = $_SESSION['prem_plan_name']['S_SUMASS'];
            $adb = 1;
        } else if ($_SESSION['prem_plan_name']['supli'] == '1') {
            $S_SUMASS_PDAB = $_SESSION['prem_plan_name']['S_SUMASS'];
            $pdab = 1;
        } else {
            $S_SUMASS_ADB = '';
            $S_SUMASS_PDAB = '';
            $adb = 0;
            $pdab = 0;
        }
        if (isset($_SESSION['prem_plan_name']['apu'])) {
            $apu = $_SESSION['prem_plan_name']['apu'];
        } else {
            $apu = '';
        }
        $date_com = date_create($_SESSION['prem_plan_name']['date_com']);
        $date2 = date_create($_SESSION['prem_plan_name']['dob']);
        $diff = date_diff($date_com, $date2);
        $age = round(($diff->format("%a")) / 365);
        $date_c = date("d", time());

        if (isset($_SESSION['prem_plan_name']['hipl'])) {
            if ($_SESSION['prem_plan_name']['hipl'] == 45000) {
                $hipl = 1;
            } else if ($_SESSION['prem_plan_name']['hipl'] == 75000) {
                $hipl = 2;
            } else if ($_SESSION['prem_plan_name']['hipl'] == 100000) {
                $hipl = 3;
            } else if ($_SESSION['prem_plan_name']['hipl'] == 150000) {
                $hipl = 4;
            }
        } else {
            $hipl = 0;
        }

        if (isset($_SESSION['prem_plan_name']['dobch'])) {
            $cdob = $_SESSION['prem_plan_name']['dobch'];
        } else {
            $cdob = '';
        }
        $query_agent = "select OFFICE,PRJ_CODE from ipl.ORG_ALL a where CODE='" . $_SESSION['prem_plan_name']['agentcode'] . "'";
        $q_agent = $this->db->query($query_agent);
        foreach ($q_agent->result() as $r_agent):
            $OFFICE = $r_agent->OFFICE;
            $PRJ_CODE = $r_agent->PRJ_CODE;
        endforeach;
        if (isset($_SESSION['prem_plan_name']['term'])) {
            $ter = $_SESSION['prem_plan_name']['term'];
        } else {
            $ter = 1;
        }
        $matu_dt = $_SESSION['prem_plan_name']['MATDATE'];
        if (empty($_SESSION['prem_plan_name']['PASSEXPDT'])) {
            $passex = '';
        } else {
            $passex = date_format(date_create($_SESSION['prem_plan_name']['PASSEXPDT']), "d-M-Y");
        }
        if (empty($_SESSION['prem_plan_name']['DRIVINGEXPDT'])) {
            $dexp = '';
        } else {
            $dexp = date_format(date_create($_SESSION['prem_plan_name']['DRIVINGEXPDT']), "d-M-Y");
        }

        if ($_SESSION['prem_plan_name']['eduqul'] == 0) {
            $sspf = 'n';
        } else {
            $sspf = 'y';
        }
        if (!empty($_SESSION['prem_plan_name']['NUMSP']) && $_SESSION['prem_plan_name']['NUMSP'] > 0) {
            $mst = 'M';
        } else {
            $mst = 'U';
        }

        if ($_SESSION['prem_plan_name']['coun'] == 'Bangladesh') {
            $ur = 'U';
        } else {
            $ur = 'F';
        }
        if ($_SESSION['prem_plan_name']['perid'] == 'nid') {
            $APC = 3;
        } elseif ($_SESSION['prem_plan_name']['perid'] == 'bc') {
            $APC = 4;
        } elseif ($_SESSION['prem_plan_name']['perid'] == 'pp') {
            $APC = 2;
        } else {
            $APC = 8;
        }
        $lcdob = '';
        if (isset($_SESSION['prem_plan_name']['lc_dob']) && !empty($_SESSION['prem_plan_name']['lc_dob'])) {
            $lcdob = date_format(date_create($_SESSION['prem_plan_name']['lc_dob']), "d-M-Y");
        }
        $inchar = array(
            "ACCTYPE" => "",
            "ADB" => $adb,
            "AGE" => $age,
            "AGEBRO" => $_SESSION['prem_plan_name']['AGEBRO'],
            "AGEDBRO" => $_SESSION['prem_plan_name']['AGEDBRO'],
            "AGEDDOT" => $_SESSION['prem_plan_name']['AGEDDOT'],
            "AGEDFH" => $_SESSION['prem_plan_name']['AGEDFH'],
            "AGEDMH" => $_SESSION['prem_plan_name']['AGEDMH'],
            "AGEDOT" => $_SESSION['prem_plan_name']['AGEDOT'],
            "AGEDSIS" => $_SESSION['prem_plan_name']['AGEDSIS'],
            "AGEDSON" => $_SESSION['prem_plan_name']['AGEDSON'],
            "AGEDSP" => $_SESSION['prem_plan_name']['AGEDSP'],
            "AGEFH" => $_SESSION['prem_plan_name']['AGEFH'],
            "AGEMH" => $_SESSION['prem_plan_name']['AGEMH'],
            "AGESIS" => $_SESSION['prem_plan_name']['AGESIS'],
            "AGESON" => $_SESSION['prem_plan_name']['AGESON'],
            "AGESP" => $_SESSION['prem_plan_name']['AGESP'],
            "APC" => $APC,
            "APPBIRTHID" => $APPBIRTHID,
            "APPDRIVINGID" => $APPDRIVINGID,
            "APPETIN" => $APPETIN,
            "APPNID" => $APPNID,
            "APPOTHERID" => $APPOTHERID,
            "APPPASSPORT" => $APPPASSPORT,
            "APU" => $apu,
            "APREM" => $_SESSION['prem_plan_name']['aprem'],
            "BAACCNO" => $_SESSION['prem_plan_name']['baaccno'],
            "BAADD" => $_SESSION['prem_plan_name']['baadd'],
            "BABRAN" => $_SESSION['prem_plan_name']['babran'],
            "BANAME" => $_SESSION['prem_plan_name']['baname'],
            "BIRTHID" => $_SESSION['prem_plan_name']['BIRTHID'],
            "BRESCAN" => $_SESSION['prem_plan_name']['brescan'],
            "CODE" => $_SESSION['prem_plan_name']['agentcode'],
            "COMDATE" => date_format(date_create($_SESSION['prem_plan_name']['date_com']), "d-M-Y"),
            "COMOK" => $_SESSION['prem_plan_name']['comok'],
            "COSBRO" => $_SESSION['prem_plan_name']['COSBRO'],
            "COSDOT" => $_SESSION['prem_plan_name']['COSDOT'],
            "COSFH" => $_SESSION['prem_plan_name']['COSFH'],
            "COSMH" => $_SESSION['prem_plan_name']['COSMH'],
            "COSSIS" => $_SESSION['prem_plan_name']['COSSIS'],
            "COSSON" => $_SESSION['prem_plan_name']['COSSON'],
            "COSSP" => $_SESSION['prem_plan_name']['COSSP'],
            "DOB" => date_format(date_create($_SESSION['prem_plan_name']['dob']), "d-M-Y"),
            "DOBPLACE" => $_SESSION['prem_plan_name']['DOBPLACE'],
            "DRIVINGEXPDT" => $dexp,
            "DRIVINGID" => $_SESSION['prem_plan_name']['DRIVINGID'],
            "DYBRO" => $_SESSION['prem_plan_name']['DYBRO'],
            "DYDOT" => $_SESSION['prem_plan_name']['DYDOT'],
            "DYFH" => $_SESSION['prem_plan_name']['DYFH'],
            "DYMH" => $_SESSION['prem_plan_name']['DYMH'],
            "DYSIS" => $_SESSION['prem_plan_name']['DYSIS'],
            "DYSON" => $_SESSION['prem_plan_name']['DYSON'],
            "DYSP" => $_SESSION['prem_plan_name']['DYSP'],
            "EDCODE" => $_SESSION['prem_plan_name']['eduqul'],
            "EMAIL" => $_SESSION['prem_plan_name']['EMAIL'],
            "ETIN" => $_SESSION['prem_plan_name']['tin'],
            "EXINFO" => $_SESSION['prem_plan_name']['exinfo'],
            "FAX" => "",
            "FHNAME" => $_SESSION['prem_plan_name']['FHNAME'],
            "HFIT" => $_SESSION['prem_plan_name']['hfit'],
            "HI" => $shi,
            "HINCS" => $_SESSION['prem_plan_name']['hincs'],
            "HIPLAN" => $hipl,
            "ILLNESS" => $_SESSION['prem_plan_name']['illness'],
            "INBRITH" => $_SESSION['prem_plan_name']['inbrith'],
            "INCOMESOURCE" => $_SESSION['prem_plan_name']['INCOMESOURCE'],
            "INCOMEVALIDITY" => $_SESSION['prem_plan_name']['INCOMEVALIDITY'],
            "INSPUR" => $_SESSION['prem_plan_name']['inspur'],
            "JOBDETAILS" => $_SESSION['prem_plan_name']['JOBDETAILS'],
            "JPREM" => $_SESSION['prem_plan_name']['jprem'],
            "JINFO" => $_SESSION['prem_plan_name']['jinfo'],
            "LC_DOB" => $lcdob,
            "LC_MINST" => date_format(date_create($_SESSION['prem_plan_name']['lc_minst']), "d-M-Y"),
            "LILLBRO" => $_SESSION['prem_plan_name']['LILLBRO'],
            "LILLDOT" => $_SESSION['prem_plan_name']['LILLDOT'],
            "LILLFH" => $_SESSION['prem_plan_name']['LILLFH'],
            "LILLMH" => $_SESSION['prem_plan_name']['LILLMH'],
            "LILLSIS" => $_SESSION['prem_plan_name']['LILLSIS'],
            "LILLSON" => $_SESSION['prem_plan_name']['LILLSON'],
            "LILLSP" => $_SESSION['prem_plan_name']['LILLSP'],
            "LUSER" => '',
            "LPREM" => $_SESSION['prem_plan_name']['prem'],
            "MADDR1" => $_SESSION['prem_plan_name']['peraddr1'],
            "MADDR2" => $_SESSION['prem_plan_name']['peraddr2'],
            "MADDR3" => $_SESSION['prem_plan_name']['peraddr3'],
            "MADDR4" => $_SESSION['prem_plan_name']['peraddr4'] . '-' . $_SESSION['prem_plan_name']['pcode'],
            "MATDATE" => date_format(date_create($matu_dt), "d-M-Y"),
            "MHNAME" => $_SESSION['prem_plan_name']['MHNAME'],
            "MON_INCOME" => $_SESSION['prem_plan_name']['MON_INCOME'],
            "MARITAL_STATUS" => $mst,
            "NAME" => $_SESSION['prem_plan_name']['NAME'],
            "NATIONALITY" => "Bangladeshi",
            "NID" => $_SESSION['prem_plan_name']['NID'],
            "NORMDEL" => $_SESSION['prem_plan_name']['normdel'],
            "NUMBRO" => $_SESSION['prem_plan_name']['NUMBRO'],
            "NUMDOT" => $_SESSION['prem_plan_name']['NUMDOT'],
            "NUMFH" => $_SESSION['prem_plan_name']['NUMFH'],
            "NUMMH" => $_SESSION['prem_plan_name']['NUMMH'],
            "NUMSIS" => $_SESSION['prem_plan_name']['NUMSIS'],
            "NUMSON" => $_SESSION['prem_plan_name']['NUMSON'],
            "NUMSP" => $_SESSION['prem_plan_name']['NUMSP'],
            "OCCUP" => $ocup,
            "OFFICE" => $OFFICE,
            "OPTACC" => $_SESSION['prem_plan_name']['optacc'],
            "OTHERID" => $_SESSION['prem_plan_name']['OTHERID'],
            "OUTBRITH" => $_SESSION['prem_plan_name']['outbrith'],
            "O_ADB" => $S_SUMASS_ADB,
            "O_BASIC" => $sumass,
            "O_CI" => $s_ci,
            "O_HI" => $shi,
            "O_IMC" => 0,
            "O_MDB" => 0,
            "O_PDAB" => $S_SUMASS_PDAB,
            "PADDR1" => $_SESSION['prem_plan_name']['add1'],
            "PADDR2" => $_SESSION['prem_plan_name']['add2'],
            "PADDR3" => $_SESSION['prem_plan_name']['add3'],
            "PADDR4" => $_SESSION['prem_plan_name']['add4'] . '-' . $_SESSION['prem_plan_name']['perpcode'],
            "PASSEXPDT" => $passex,
            "PASSPORT" => $_SESSION['prem_plan_name']['PASSPORT'],
            "PAYMODE" => $paymode,
            "PDAB" => $pdab,
            "PHONE" => $_SESSION['prem_plan_name']['PHONE'],
            "PHOTO" => $_SESSION['prem_plan_name']['PHOTO'],
            "PLAN" => $_SESSION['prem_plan_name']['plan'],
            "PLANNAME" => $_SESSION['prem_plan_name']['planname'],
            "POCODE" => "",
            "POCODE_PRE" => "",
            "POLOPT" => "C",
            "POLICY_TYPE" => "D",
            "PREBRO" => $_SESSION['prem_plan_name']['PREBRO'],
            "PREDOT" => $_SESSION['prem_plan_name']['PREDOT'],
            "PREFH" => $_SESSION['prem_plan_name']['PREFH'],
            "PREGN" => $_SESSION['prem_plan_name']['pregn'],
            "PREMH" => $_SESSION['prem_plan_name']['PREMH'],
            "PRESIS" => $_SESSION['prem_plan_name']['PRESIS'],
            "PRESON" => $_SESSION['prem_plan_name']['PRESON'],
            "PRESP" => $_SESSION['prem_plan_name']['PRESP'],
            "PROJECT" => $PRJ_CODE,
            "PROPDAT" => date_format(date_create($_SESSION['prem_plan_name']['date_com']), "d-M-Y"),
            "P_ADB" => '',
            "P_CI" => '',
            "P_HI" => '',
            "P_IMC" => 0,
            "P_MDB" => 0,
            "P_PDAB" => '',
            "SEX" => $_SESSION['prem_plan_name']['sex'],
            "SPJOBDETAILS" => $_SESSION['prem_plan_name']['husocp'],
            "SPMARK" => $_SESSION['prem_plan_name']['spmark'],
            "SPMON_INCOME" => $_SESSION['prem_plan_name']['husmonthinc'],
            "SPNAME" => $_SESSION['prem_plan_name']['SPNAME'],
            "SSCPF" => $sspf,
            "STOM" => $_SESSION['prem_plan_name']['stom'],
            "SUMASS" => $sumass,
            "SUMATRISK" => $_SESSION['prem_plan_name']['sumrisk'],
            "SUSPENSE" => 0,
            "TELHOME" => $_SESSION['prem_plan_name']['PHONE'],
            "TELOFFICE" => "",
            "TERM" => $ter,
            "TOTPREM" => $_SESSION['prem_plan_name']['totprem'],
            "UR" => $ur,
            "WEBPROPOSAL_NO" => $_SESSION['prem_plan_name']['WEBSEQ'],
            "WEIGHT" => $_SESSION['prem_plan_name']['weight'],
        );
        $query_in_val = "INSERT INTO ipl.WEBPROPOSAL (" . implode(",", array_keys($inchar)) . ")" . "  VALUES ('" . implode("','", array_values($inchar)) . "')";
        $this->db->query($query_in_val);
        for ($x = 1; $x <= $_SESSION['prem_plan_name']['nom_num']; $x++) {
            $NOMREL = $_SESSION['prem_plan_name']['NOMREL' . $x];
            $NOMNAME = $_SESSION['prem_plan_name']['NOMNAME' . $x];
            $NID = $_SESSION['prem_plan_name']['NOMID' . $x];
            $NOMID = $x;
            $NFHNAME = $_SESSION['prem_plan_name']['NFHNAME' . $x];
            $NMHNAME = $_SESSION['prem_plan_name']['NMHNAME' . $x];
            $NSPNAME = $_SESSION['prem_plan_name']['NSPNAME' . $x];
            $NOCCUP = $_SESSION['prem_plan_name']['NOCCUP' . $x];
            $NDOB = date_format(date_create($_SESSION['prem_plan_name']['NDOB' . $x]), "d-M-Y");
            $NMOBILE = $_SESSION['prem_plan_name']['NMOBILE' . $x];
            $NOMPAR = $_SESSION['prem_plan_name']['NOMPAR' . $x];
            $PRESENTADDR = $_SESSION['prem_plan_name']['PRESENTADDR' . $x];
            $NOMPURMADD = $_SESSION['prem_plan_name']['NOMPURMADD' . $x];
            $NOMPHOTO = $_SESSION['prem_plan_name']['NOMPHOTO' . $x];
            $NAGE = $this->prevpolicy_model->get_age($_SESSION['prem_plan_name']['NDOB' . $x]);
            $ws = $_SESSION['prem_plan_name']['WEBSEQ'];
            if ($NOMREL == '2') {
                $NOMSEX = 'F';
            }
            if ($NOMREL == '3') {
                $NOMSEX = 'M';
            }
            if ($NOMREL == '4') {
                $NOMSEX = 'F';
            }
            if ($NOMREL == '5') {
                $NOMSEX = 'M';
            }
            if ($NOMREL == '1') {
                  $NOMSEX = 'M';

//                if ($_SESSION['prem_plan_name']['sex'] == 'M') {
//                    $NOMSEX = 'F';
//                } else {
//                    $NOMSEX = 'M';
//                }
            }
                        if ($NOMREL == '11') {
                $NOMSEX = 'M';
            }
                        if ($NOMREL == '12') {
                $NOMSEX = 'F';
            }
            $query_in_nom = "INSERT INTO ipl.WEBNOMINEE
                               (NAGE,NOMPHOTO,NOMSEX,NID,WEBPROPOSAL_NO,NOMREL,NOMNAME,NOMID,NFHNAME,NMHNAME,NSPNAME,NOCCUP,NDOB,NMOBILE,NOMPAR,PRESENTADDR,NOMPURMADD)
                                 VALUES 
                               ('$NAGE','$NOMPHOTO','$NOMSEX','$NID','$ws','$NOMREL','$NOMNAME','$NOMID','$NFHNAME','$NMHNAME','$NSPNAME','$NOCCUP','$NDOB','$NMOBILE','$NOMPAR','$PRESENTADDR','$NOMPURMADD')";
            $this->db->query($query_in_nom);
        }
        for ($x = 0; $x <= count($_SESSION['prem_plan_name']['otpolno']) - 1; $x++) {
            $ws = $_SESSION['prem_plan_name']['WEBSEQ'];
            $OTPOLNO = $_SESSION['prem_plan_name']['otpolno'][$x];
            $OTCM = $_SESSION['prem_plan_name']['otcm'][$x];
            $OTPREM = $_SESSION['prem_plan_name']['otprem'][$x];
            $OTPLA = $_SESSION['prem_plan_name']['otpla'][$x];
            if (empty($_SESSION['prem_plan_name']['otodat'][$x])) {
                $OTODAT = '';
            } else {
                $OTODAT = date_format(date_create($_SESSION['prem_plan_name']['otodat'][$x]), "d-M-Y");
            }
            $OTPROP = $_SESSION['prem_plan_name']['otprop'][$x];
            $query_in_extr = "INSERT INTO ipl.WEBEXTRAPOL
                               (OTPOLNO,OTCM,OTPREM,OTPLA,OTODAT,OTPROP,WEBPROPOSAL_NO)
                                 VALUES 
                               ('$OTPOLNO','$OTCM','$OTPREM','$OTPLA','$OTODAT','$OTPROP','$ws')";
            $this->db->query($query_in_extr);
        }

        return 0;
    }

}
