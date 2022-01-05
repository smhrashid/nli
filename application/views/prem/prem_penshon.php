<?php
$lp=round($_SESSION['prem_plan_name']['prem']);
$rp=round($this->premcal_model->get_riskprem());

$pdabt='';
       $adbt='';
       $cit='';
      $hist='';
      $sphit='';
      $fchit='';
      $schit='';
      $oet='';
       $aage=$_SESSION['prem_plan_name']['AGE'];
       if (isset($_SESSION['prem_plan_name']['supli'])){
           $ssum=round($_SESSION['prem_plan_name']['S_SUMASS']);
           if ($_SESSION['prem_plan_name']['supli']==1){
               $lpdab=round($this->premcal_model->get_supli(1,$ssum,$aage));
               $pdabt="
      <tr>
        <th>Permanent Disability Accidental Benefit</th>
        <td>$ssum </td>
        <td>$lpdab </td>
      </tr>";
           }
           else if ($_SESSION['prem_plan_name']['supli']==2){
               $ladb= round($this->premcal_model->get_supli(2,$ssum,$aage));
               
               $adbt="
      <tr>
        <th>Accidental Death Benefit</th>
        <td>$ssum </td>
        <td>$ladb </td>
      </tr>";
           }
       }
       
        $oe= $this->premcal_model->get_ocupextra();
        if($oe>0){
               $oet="
      <tr>
        <th>Occupation Extra </th>
        <td> </td>
        <td>$oe </td>
      </tr>";
        }
        
?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th>Premium</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Yearly Pension</th>
        <td><?=$_SESSION['prem_plan_name']['apu'];?></td>
        <td><?=$lp;?></td>
      </tr>      
      <tr>
        <th>Sum at Risk </th>
        <td><?=$_SESSION['prem_plan_name']['sumass'];?></td>
        <td><?=$_SESSION['prem_plan_name']['riskpremins'];?></td>
      </tr> 

       <?=$pdabt;?>
       <?=$adbt;?>
      <?=$oet;?>
                                
      <tr>
        <td></td>
        <th>Total Premium</th>
        <td><?=$_SESSION['prem_plan_name']['riskpremins']+$lp+$oet+$ladb+$lpdab;?></td>
      </tr>
    </tbody>
  </table>
<?php

$_SESSION['prem_plan_name']['totprem']=$_SESSION['prem_plan_name']['riskpremins']+$lp+$oet+$ladb+$lpdab;
$jprem= array(
    array ("","","Premium"),
    array  ("Yearly Pension",$_SESSION['prem_plan_name']['apu'],$lp),
    array ( "Sum at Risk",$_SESSION['prem_plan_name']['sumass'],$_SESSION['prem_plan_name']['riskpremins']),
    array ("Permanent Disability Accidental Benefit",$ssum,$lpdab),
    array  ("Accidental Death Benefit",$ssum,$ladb),
    array ("Occupation Extra","",$oe),
    array ("","Total Premium",$_SESSION['prem_plan_name']['riskpremins']+$lp+$oet+$ladb+$lpdab)
    );
$_SESSION['prem_plan_name']['jprem']=json_encode($jprem, JSON_FORCE_OBJECT);
?>
