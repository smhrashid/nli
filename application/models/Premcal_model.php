<?php
class Premcal_model extends CI_Model {
    public function get_hospi($AGE) {
        $opt=$_SESSION['prem_plan_name']['esmopt'];
        $query_hospi="select age,lprem,hprem from ipl.WEB_HEALTHPLAN where opt='$opt' and age='$AGE'";
        $q_hospi = $this->db->query($query_hospi)->result();
        return $q_hospi;
    }        
    public function get_supli($splan,$ssum,$AGE) {
        $PLAN=$_SESSION['prem_plan_name']['plan'];
        $PMODE=$_SESSION['prem_plan_name']['paymode'];
        $OCCUP=$_SESSION['prem_plan_name']['OCCUP'];
        $query_supli="select BILLAL.F_S_PREM($PLAN, $splan,$PMODE,$OCCUP,$ssum,$AGE) supli from dual";
        $q_supli = $this->db->query($query_supli);
        foreach ($q_supli->result() as $r_supli):
            $l_supli=$r_supli->SUPLI;
        endforeach;
        return $l_supli;
    }
    public function get_suplihi($AGE,$rel,$per) {
        $hip=$_SESSION['prem_plan_name']['hipl'];
        if ($hip==45000){
            $hipn='ECONOMY';
        }
        else if ($hip==75000){
            $hipn='EXECUTIVE';
        }
        else if ($hip==100000){
            $hipn='CORPORATE';
        }
        else if ($hip==150000){
            $hipn='CORPORATE_PLUS';
        }
        $query_shi="SELECT * FROM (select $hipn plan  from ipl.WEB_HI_PLAN where MAXAGE >=$AGE and relation='$rel') WHERE ROWNUM = 1";
        $q_shi = $this->db->query($query_shi);
        foreach ($q_shi->result() as $r_shi):
            $l_shi=(($r_shi->PLAN)-($r_shi->PLAN*($per/100)))*0.093;
        endforeach;
        return $l_shi;
    }
    public function get_lprem() {
        if (!isset($_SESSION['prem_plan_name']['prem'])){
            $plan=$_SESSION['prem_plan_name']['plan'];
            if (isset($_SESSION['prem_plan_name']['apu'])){
                 $apu=$_SESSION['prem_plan_name']['apu'];
            }
            else{
                $apu=0;
            }
            $sumass=$_SESSION['prem_plan_name']['sumass'];
            $paymode=$_SESSION['prem_plan_name']['paymode'];
            $term=$_SESSION['prem_plan_name']['term'];
            $age=$_SESSION['prem_plan_name']['AGE'];
            $query_ns="select  BILLAL.F_LPREM('$plan' ,'$apu' ,'$sumass' ,'$paymode' ,TO_CHAR($term, 'FM00'),'0' ,'0' ,'$age') lp from dual";
            $q_ns = $this->db->query($query_ns);
            foreach ($q_ns->result() as $r_ns):
                $lp=$r_ns->LP;
            endforeach;
            $_SESSION['prem_plan_name']['prem']=$lp;
            return $lp;
        }
        else {
            return 0;
        }
    }    
    public function get_ocupextra() {
        $ocup=$_SESSION['prem_plan_name']['OCCUP'];
        if (in_array($ocup, array(3,12,14,31,53,54,55,58,59,60,61,62,63,64,71,72,73,74,76,77,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,99))) {
            return 0;
        }
        else{
            if ($_SESSION['prem_plan_name']['supli']==1){
                $ss='PDAB';
            }
            else if ($_SESSION['prem_plan_name']['supli']==2){
                $ss='ADB';
            }
            else if ($_SESSION['prem_plan_name']['supli']==0){
                $ss=0;
            }
            $s_sum=$_SESSION['prem_plan_name']['S_SUMASS'];
            $sum_a=$_SESSION['prem_plan_name']['sumass'];
            $occup=$_SESSION['prem_plan_name']['OCCUP'];
            $query_oe="SELECT ROUND((($ss*$s_sum)/1000)+((EXTRA*$sum_a)/1000)) oc FROM ipl.OCCUP where OCCUP='$occup'";
            $q_oe = $this->db->query($query_oe);
            foreach ($q_oe->result() as $r_oe):
                $oe=$r_oe->OC;
            endforeach;
            return $oe;
        }
    }
    public function get_riskprem() {
        $sumass=$_SESSION['prem_plan_name']['sumass'];
        $plan=$_SESSION['prem_plan_name']['plan'];
        $age=$_SESSION['prem_plan_name']['AGE'];
        $query_rr="select RATE from ipl.rate where plan ='$plan' and AGE='$age' and TYPE='R'";
        $q_rr = $this->db->query($query_rr);
        foreach ($q_rr->result() as $r_rr):
            $rr=$r_rr->RATE;
        endforeach;
        if (isset($rr)){
            $_SESSION['prem_plan_name']['riskprem']=($rr*$sumass)/1000;
            return ($rr*$sumass)/1000;
        }
        else{
            return 0;
        }
    }
    public function get_aprem() {
        $plan=$_SESSION['prem_plan_name']['plan'];
        if (isset($_SESSION['prem_plan_name']['apu'])){
            $apu=$_SESSION['prem_plan_name']['apu'];
        }
        else{
            $apu=0;
        }
        $sumass=$_SESSION['prem_plan_name']['sumass'];
        $age=$_SESSION['prem_plan_name']['AGE'];
        $term=$_SESSION['prem_plan_name']['term'];
        $paymode=$_SESSION['prem_plan_name']['paymode'];
        $query_ap="SELECT BILLAL.F_APREM('$plan' , '$apu' ,'$sumass' ,(select RATE from ipl.rate where plan='$plan' and age='$age' and term=TO_CHAR($term, 'FM00') and type='Y') , '$paymode' , TO_CHAR($term, 'FM00') ) aprem from  dual";
        $q_ap = $this->db->query($query_ap);
        foreach ($q_ap->result() as $r_ap):
            $ap=$r_ap->APREM;
        endforeach;
        $_SESSION['prem_plan_name']['aprem']=$ap;
        return $ap;
    }
   public function get_riskpremins() {
        $sumass=$_SESSION['prem_plan_name']['sumass'];
        $plan=$_SESSION['prem_plan_name']['plan'];
        if (isset($_SESSION['prem_plan_name']['riskprem'])){
            $riskprem=$_SESSION['prem_plan_name']['riskprem'];
        }
        else $riskprem=0;
        $apreme=$_SESSION['prem_plan_name']['aprem'];
        $term=$_SESSION['prem_plan_name']['term'];
        $paymode=$_SESSION['prem_plan_name']['paymode'];
        
        if (isset($_SESSION['prem_plan_name']['apu'])){
            $apu=$_SESSION['prem_plan_name']['apu'];
        }
        else{
            $apu=0;
        }
        $query_rpi="SELECT BILLAL.F_RPREM('$plan' ,'$apu' ,'$sumass','$riskprem' ,'$paymode',TO_CHAR($term, 'FM00')) RPREM FROM DUAL";
                       
        $q_rpi = $this->db->query($query_rpi);
        foreach ($q_rpi->result() as $r_rpi):
            $rpi=$r_rpi->RPREM;
        endforeach;
        $_SESSION['prem_plan_name']['riskpremins']=$rpi;
            return $rpi;
     }
    public function get_sumrisk() {
        $sumass=$_SESSION['prem_plan_name']['sumass'];
        $plan=$_SESSION['prem_plan_name']['plan'];
        $age=$_SESSION['prem_plan_name']['AGE'];
        $apreme=$_SESSION['prem_plan_name']['aprem'];
        $term=$_SESSION['prem_plan_name']['term'];
        $paymode=$_SESSION['prem_plan_name']['paymode'];
        
        if (isset($_SESSION['prem_plan_name']['apu'])){
            $apu=$_SESSION['prem_plan_name']['apu'];
        }
        else{
            $apu=0;
        }
        $query_sr="select round(BILLAL.F_sumrisk('$plan',TO_CHAR($term, 'FM00') ,'$paymode' ,'$sumass' , '$apu' ,'$apreme' ,sysdate,sysdate,sysdate),0 ) sr from dual";
        $q_sr = $this->db->query($query_sr);
        foreach ($q_sr->result() as $r_sr):
            $sr=$r_sr->SR;
        endforeach;
        $_SESSION['prem_plan_name']['sumrisk']=$sr;
            return $sr;
        
    }
}