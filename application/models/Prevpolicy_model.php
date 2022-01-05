<?php
class Prevpolicy_model extends CI_Model {
    public function get_datecom() {
        $plan=$this->input->post('plan');
        if (isset($plan)){
           date_default_timezone_set('Asia/Dhaka');
            $date_c = date("d", time());
            $date_co = date("Y-m-d", time());
            if ($date_c==29){
                $date_com = date("Y-m-d", strtotime("-1 days"));
            }
            elseif ($date_c==30){
                $date_com =date("Y-m-d", strtotime("-2 days"));
            }
             elseif ($date_c==31){
                $date_com =date("Y-m-d", strtotime("-3 days"));
            }
            else {
                $date_com =$date_co;
            }
            $_POST['date_com']=$date_com;
            $_SESSION['prem_plan_name'] = $_POST;
        }
        return $_SESSION['prem_plan_name'] ;
    }
    public function get_age($dob){
            if(!empty($dob)){
                $dcom=date_create($_SESSION['prem_plan_name']['date_com']);
                $birthdate=date_create($dob);
                $diff=date_diff($dcom,$birthdate);
                $m_age= round (($diff->format("%a"))/365);  
                return $m_age;
            }
            else{
                return 0;
            }
    }
    public function get_policy() {
           $poln= $_SESSION['prem_plan_name']['policy'];
           //policy information retriev
           $query_pol = "SELECT * from IPL.ALL_POLICY where policy='$poln'";
           $q_pol = $this->db->query($query_pol);
           foreach ($q_pol->result() as $r_pol){
               $_SESSION['policy'] =$r_pol;
           }
        return $_SESSION['policy'] ;
    }
    public function get_nid() {
        
          
                    $nidno= $_SESSION['prem_plan_name']['nid'];
                    $dob= $_SESSION['prem_plan_name']['dob'];
                    $this->db2 = $this->load->database('second', TRUE);
                    $query_nid = "SELECT *,count(nid) cc FROM findnid where nid='$nidno' and dob='$dob'";
                    $q_nid = $this->db2->query($query_nid);
                    foreach ($q_nid->result() as $r_nid){
                        $nid =$r_nid->nid;
                        $dobn =$r_nid->dob;
                        $nidinfo =$r_nid->nidbang;
                        $cc =$r_nid->cc;
                    }
                    If($cc==1){
                         $_SESSION['prem_plan_name']['ns']=3;
                         $_SESSION['prem_plan_name']['nidinfo']= $nidinfo;
                    }
                    else If($cc==0){
                        $url='http://192.168.1.227:8000/api/?nid='.$nidno.'&dob='.$dob;
                        $handle = curl_init();
                        curl_setopt($handle, CURLOPT_URL, $url);
                        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
                        $output = curl_exec($handle);
                        curl_close($handle);
                        $niddeco=json_decode ($output,true);
                        if ($output=='Internal Server Error'){
                            //Server error
                            $_SESSION['prem_plan_name']['ns']=0;
                        }
                        if (isset($niddeco['status'])&&$niddeco['status']==200){
                            //information is not ok
                            $_SESSION['prem_plan_name']['ns']=1;
                        }
                        if (isset($niddeco['National ID'])&&($niddeco['National ID']==$nidno||$niddeco['Pin']==$nidno)){
                            //nid found
                            $_SESSION['prem_plan_name']['ns']=2;
                            $_SESSION['prem_plan_name']['nidinfo']= $output;
                            $query_n ="INSERT INTO findnid (nid, dob, nidbang) VALUES ('$nidno', '$dob', '$output')";
                            $q_n = $this->db2->query($query_n);
                        }
                    }
           
        return 0;
    }
}
?>