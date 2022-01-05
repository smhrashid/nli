<?php
error_reporting(0);
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {
    public function index(){
        $this->ep();
    }
    public function ep() {
        $this->load->view('eprop_header');
            $this->load->view('impform/vew_plan'); 
        $this->load->view('eprop_footer');
    }
    public function parinfo() {
        $this->load->view('eprop_header');
            unset($_SESSION['policy']);
            unset($_SESSION['prem_plan_name']['ns']);
            unset($_SESSION['prem_plan_name']['nidinfo']);
            unset($_SESSION['prem_plan_name']['nid']);
            unset($_SESSION['prem_plan_name']['dob']);
            unset($_SESSION['prem_plan_name']['policy']);
            unset($_SESSION['prem_plan_name']['tin']);
            unset($_SESSION['prem_plan_name']['sex']);
            unset($_SESSION['prem_plan_name']['submitpol']);
            $this->load->model('prevpolicy_model');
                $this->prevpolicy_model->get_datecom();
                if ($_SESSION['prem_plan_name']['plan']=='501'){
                    $_SESSION['prem_plan_name']=array_merge(array("term"=>1, "paymode"=>0 ),$_SESSION['prem_plan_name']);
                }
            $this->load->view('impform/vew_prevpol'); 
        $this->load->view('eprop_footer');
    }
    public function calprem() {
        $this->load->view('eprop_header');
            $this->load->model('prevpolicy_model');
             $this->prevpolicy_model->get_nid();
             if ($_SESSION['prem_plan_name']['ns']==0){
                 echo'
                     <div class="alert alert-danger" role="alert">
                        Server Error please try again later.
                     </div>
                 ';
             }
             else if ($_SESSION['prem_plan_name']['ns']==1){
                 echo'
                     <div class="alert alert-danger" role="alert">
                        NID Number or Date of birth is not valid <a href="https://plil.pragatilife.com/ep/parinfo" class="alert-link">Click Heare for start again</a>.
                     </div>
                 ';
             }
            else if ($_SESSION['prem_plan_name']['ns']==2||3)  {
                $this->load->view('impform/prop_calprem');
             }
        $this->load->view('eprop_footer');
    }
  public function supli() {
        $this->load->view('eprop_header');
            if (isset($_POST['submitprop'])){
                $_SESSION['prem_plan_name']=array_merge($_POST,$_SESSION['prem_plan_name']);
            }
            if ($_SESSION['prem_plan_name']['plan']=='501'){
                if ($_SESSION['prem_plan_name']['esmopt']==1){
                    $_SESSION['prem_plan_name']['sumass']=500000;
                }
                else if ($_SESSION['prem_plan_name']['esmopt']==2){
                    $_SESSION['prem_plan_name']['sumass']=1000000;
                }
                if (empty($_SESSION['prem_plan_name']['numapp'])){
                    header("location:premcal");
                }
               else {
                   $this->load->view('othform/family');
               }
            }
            else {
                $this->load->view('impform/prop_supli');
            }
        $this->load->view('eprop_footer');
    }  
  public function premcal() {
        $this->load->view('eprop_header');
            if (isset($_POST['submitpropnom'])){
                $_SESSION['prem_plan_name']=array_merge($_POST,$_SESSION['prem_plan_name']);
            }
            $this->load->model('prevpolicy_model');
            $this->load->model('premcal_model');
                $this->premcal_model->get_lprem();
                $this->premcal_model->get_riskprem();
                $this->premcal_model->get_aprem();
                $this->premcal_model->get_sumrisk();
                $this->premcal_model->get_riskpremins();
             if ($_SESSION['prem_plan_name']['plan']=='501'){
                  if (!empty($_SESSION['prem_plan_name']['numapp'])){
                      for ($x = 1; $x <= $_SESSION['prem_plan_name']['numapp']; $x++) {
                          $_SESSION['prem_plan_name']['FAGE'.$x]=$this->prevpolicy_model->get_age($_SESSION['prem_plan_name']['depdob'.$x]);
                      }
                  }
             }
            $this->load->view('impform/vew_premcal');
        $this->load->view('eprop_footer');
    } 
  public function personalinfo() {
        $this->load->view('eprop_header');
        $this->load->model('prevpolicy_model');
            $this->load->view('impform/prop_forminput');
        $this->load->view('eprop_footer');
    }
   public function propformnom() {
        $this->load->view('eprop_header');
        if (isset($_POST['submitprop'])){
            $_SESSION['prem_plan_name']=array_merge($_POST,$_SESSION['prem_plan_name']);
        }
        $this->load->model('fileup_model');
        $this->load->view('impform/prop_formnom'); 
        $this->load->view('eprop_footer');
    }  
    public function appdata() {
        $this->load->view('eprop_header');
            $this->load->model('prevpolicy_model');
            $this->load->model('fileup_model');
            $this->load->model('appdata_model');
            $this->load->view('appdata'); 
        $this->load->view('eprop_footer');
    }
    public function childprotection() {
       $this->load->view('eprop_header');
            $this->load->view('supli/childprotection');
       $this->load->view('eprop_footer');
    }
    public function formhiin() {
       $this->load->view('eprop_header');
            $this->load->view('supli/mos_hifrom');
       $this->load->view('eprop_footer');
    }
  public function formbody() {
      unset($_SESSION['dm']);
       $this->load->view('eprop_header');
            $this->load->model('agent_model');
            //$this->load->view('mos_formbody');
            $this->load->view('mos_formbody');
       $this->load->view('eprop_footer');
    }
  public function vform() {
       $this->load->view('eprop_header');
            $this->load->view('form_search');
       $this->load->view('eprop_footer');
    }
  public function formedit() {
       $this->load->view('eprop_header');
            $this->load->view('editeproposal');
       $this->load->view('eprop_footer');
    }
    public function mchecklist() {
       $this->load->view('eprop_header');
            $this->load->model('prevpolicy_model');
            $this->load->view('m_checklist');
       $this->load->view('eprop_footer');
    }
    public function urmdash() {
        $this->load->view('eprop_header');
            $this->load->model('urm_model');
            $data['urm']=$this->urm_model->get_dash();
            $this->load->view('prop_dash',$data);
        $this->load->view('eprop_footer');
    } 
    public function urm() {
        
        $this->load->view('eprop_header');
            $this->load->model('urm_model');
            $data['urm']=$this->urm_model->get_urm();
            $this->load->view('prop_urm',$data);
        $this->load->view('eprop_footer');
    }       
    public function urmrep() {
        
            $this->load->model('urm_model');
            $data['urm']=$this->urm_model->get_urm();
       //$this->load->view('eprop_header');
            $this->load->view('urmrep',$data);
            
       $this->load->view('eprop_footer');
    }          
   public function process() {
       session_destroy();
       clearstatcache();
       if ( ! headers_sent() ) {
           header_remove();
       }
       $this->output->delete_cache();
       $this->output->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
        $this->output->set_header("Pragma: no-cache");  
        header('Location: ' . base_url()); 
    }
 public function pppdf() {
     $this->load->library('Pdf');
     $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
     $pdf->SetTitle('My Title');
     //$pdf->SetHeaderMargin(30);
     //$pdf->SetTopMargin(20);
     //$pdf->setFooterMargin(20);
     $pdf->SetAutoPageBreak(true);
     $pdf->SetAuthor('Author');
     $pdf->SetDisplayMode('real', 'default');
     $pdf->AddPage();
     $html = <<<EOF
hhhhhhhhhhhhhhhhhhhhhhhhhh
EOF;
 
     $pdf->writeHTML($html, true, false, true, false, '');
     $pdf->Output('My-File-Name.pdf', 'I');
    }
}
