<style>
    #radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;
    }
  td {
  text-align: right !important;
}
</style>

    <script type="text/javascript">
        function ShowHideDiv(chkPassport) {
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = chkPassport.checked ? "block" : "none";
        }
    </script>

<legend>Premium Calculation</legend>
<div class="row">
    <div class="col-md-7 form-group">

        <?php
        if (in_array($_SESSION['prem_plan_name']['plan'], array(212,213))) {
            $this->load->view('prem/prem_dps');
        }
        if (in_array($_SESSION['prem_plan_name']['plan'], array(108))) {
            $this->load->view('prem/prem_penshon');
        }
        if (in_array($_SESSION['prem_plan_name']['plan'], array(109))) {
            $this->load->view('prem/prem_child');
        }
        if (in_array($_SESSION['prem_plan_name']['plan'], array(501))) {
            $this->load->view('prem/prem_hailt');
        }
        ?>
 <div class="form-horizontal">
            <div class="form-group">
              <div class="col-md-12">
                  <label for="chkPassport">
                      <input type="checkbox" id="chkPassport" onclick="ShowHideDiv(this)" required/>
                      If you agree with above calculations and conditions.
                  </label>
              </div>
            </div>  
</div>
 <div id="dvPassport" style="display: none">       
        <form action="personalinfo" class="form-horizontal" method="post" >
            <fieldset>       
                   <div class="form-group">
                     <div class="col-md-12">
                       <input type="submit" name="submitpropnom" value="Submit" id="button1id" name="button1id" class="btn btn-success" style="width: 100%;">
                     </div>
                   </div>  
            </fieldset>
       </form>
</div>       
    </div>
    <div class="col-md-5 form-group">
        <h4 class="mb-5">Application Relevant Information</h4>
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Plan : </strong><?= $_SESSION['prem_plan_name']['plan'];?> - <?= $_SESSION['prem_plan_name']['planname'];?>
</div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Commencement Date : </strong><?= date_format(date_create($_SESSION['prem_plan_name']['date_com']),"d-M-Y");?>
</div>
  </div>
</div> 
   <div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Date of Birth : </strong><?= date_format(date_create($_SESSION['prem_plan_name']['dob']),"d-M-Y");?>
</div>
  </div>
</div>           
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Age on Commencement Date : </strong><?= $_SESSION['prem_plan_name']['AGE'];?> Year
</div>
  </div>
</div>              
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Term : </strong><?= $_SESSION['prem_plan_name']['term'];?> Year
</div>
  </div>
</div>  

        
 <div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong> Maturity Date: </strong><?php
      $c_om=(($_SESSION['prem_plan_name']['term'])*12);
     echo date('M j, Y', strtotime("+$c_om months", strtotime(($_SESSION['prem_plan_name']['date_com']))));
     $_SESSION['prem_plan_name']['MATDATE']=date('Y-m-d', strtotime("+$c_om months", strtotime(($_SESSION['prem_plan_name']['date_com']))));
?> 
</div>
  </div>
</div> 
 <div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Premium Pay Mode : </strong>
          <?php
          $paymode=$_SESSION['prem_plan_name']['paymode'];
            if($paymode==5){
                $pm='Monthly ';
            }
            if($paymode==4){
                $pm='Quarterly';
            }
            if($paymode==2){
                $pm='Half Yearly';
            }
            if($paymode==1){
                $pm='Yearly';
            }
            if($paymode==0){
                $pm='Single';
            }
            echo $pm;
          ?> 
</div>
  </div>
</div>  
 
                  
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Sum at Risk : </strong><?= $_SESSION['prem_plan_name']['sumrisk'];?> 
</div>
  </div>
</div>                      
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Annual Premium : </strong><?= $_SESSION['prem_plan_name']['aprem'];?> 
</div>
  </div>
</div>    
        
        
    </div>
    </div>
        
           <?php
     $jinfo= array(
            array ("Plan",$_SESSION['prem_plan_name']['plan'].' - '.$_SESSION['prem_plan_name']['planname']),
            array  ("Commencement Date",date_format(date_create($_SESSION['prem_plan_name']['date_com']),"d-M-Y")),
            array ( "Date of Birth",date_format(date_create($_SESSION['prem_plan_name']['dob']),"d-M-Y")),
            array ("Age on Commencement Date",$_SESSION['prem_plan_name']['AGE']),
            array  ("Term",$_SESSION['prem_plan_name']['term']),
            array ("Maturity Date",date('M j, Y', strtotime("+$c_om months", strtotime(($_SESSION['prem_plan_name']['date_com']))))),
            array ("Premium Pay Mode",$pm),
            array ("Sum at Risk",$_SESSION['prem_plan_name']['sumrisk']),  
            array ("Annual Premium",$_SESSION['prem_plan_name']['aprem']),  
    );
      
$_SESSION['prem_plan_name']['jinfo']=json_encode($jinfo, JSON_FORCE_OBJECT);
     ?>