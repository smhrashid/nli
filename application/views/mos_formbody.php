
<head>
    <style>

        body {

            background: rgb(204,204,204);
        }
        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        page[size="A4"] {
            position: relative;
            width: 21cm;
            height: 29.7cm;
        }
        page[size="A4"][layout="portrait"] {
            width: 29.7cm;
            height: 21cm;
        }
        @media print {
            body, page {
                margin: 0;
                box-shadow: 0;
            }
        }
        .foo {
            float: left;
            width: 15px;
            height: 15px;
            margin: 5px;
            border: 8px solid rgb(0 0 0);
        }
        .foohi {
            float: left;
            width: 9px;
            height: 9px;
            margin: 5px;
            border: 5px solid rgb(0 0 0);
        }
        .fooch {
            float: left;
            width: 14px;
            height: 14px;
            margin: 5px;
            border: 7px solid rgb(0 0 0);
        }
        .fooaud {
            float: left;
            width: 8px;
            height: 8px;
            margin: 5px;
            border: 1px solid rgb(0 0 0);
        }
        .black {
        }
        .propimg {
            width:100px;
            height:auto;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['subpropsearch'])) {
        unset($_SESSION['fprint']);
        $propno = $_POST['poropnum'];
        $query_se = "select PLAN,WEBPROPOSAL_NO WEBSEQ from ipl.WEBPROPOSAL where PROPNO='$propno'";
        $q_se = $this->db->query($query_se);
        foreach ($q_se->result() as $r_se) {
            $_SESSION['fprint'] = array(
                "PLAN" => $r_se->PLAN,
                "WEBSEQ" => $r_se->WEBSEQ,
                "PROPNO" => $propno,
                "NVEW" => 1
            );
        }
    }



    if (!isset($_SESSION['fprint'])) {
        $_SESSION['fprint'] = array("PLAN" => $_SESSION['prem_plan_name']['plan'],
            "WEBSEQ" => $_SESSION['prem_plan_name']['WEBSEQ']);
    }
    unset($_SESSION['prem_plan_name']);
    unset($_SESSION['selfre']);
    unset($_SESSION['nt']);

    $this->load->view('mainform');
    if ($_SESSION['fprint']['PLAN'] == '109') {
        $this->load->view('othform/childform');
    }
    if ($_SESSION['fprint']['PLAN'] == '213' || $_SESSION['fprint']['PLAN'] == '212') {
        $this->load->view('othform/hiform');
    }

    if ($_SESSION['fprint']['PLAN'] == '501') {
        $wq = $_SESSION['fprint']['WEBSEQ'];
        if (!isset($_SESSION['aud'])) {
            $query_ah = "select * from ipl.WEB_MC_AUDULT where WEBPROPOSAL_NO='$wq'";
            $q_ah = $this->db->query($query_ah);
            foreach ($q_ah->result() as $r_ah) {
                $a[] = $r_ah;
            }
            $_SESSION['aud'] = $a;
        }
        if (isset($_SESSION['mcch']) && !isset($_SESSION['ch'])) {
            $query_ch = "select * from ipl.WEB_CHILDPROTECTION where WEBPROPOSAL_NO='$wq'";
            $q_ch = $this->db->query($query_ch);
            foreach ($q_ch->result() as $r_ch) {
                $b[] = $r_ch;
            }
            $_SESSION['ch'] = $b;
        }

        if (isset($_SESSION['mcdep']) || isset($_SESSION['mcch'])) {
            $this->load->view('othform/dependent');
        }

        $this->load->view('othform/termmcaud');

        if (isset($_SESSION['mcch'])) {
            $this->load->view('othform/childform');
        }
    }
    $this->load->view('premcal');
    ?>
</body>
</html>
    <?php
    //}?>