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
        <th>Number of unit</th>
        <td><?=$_SESSION['prem_plan_name']['apu'];?> Unit</td>
        <td><?=$lp;?></td>
      </tr>  
                  
      <tr>
        <th>Risk Premium </th>
        <td><?=$_SESSION['prem_plan_name']['sumass'];?></td>
        <td><?=$_SESSION['prem_plan_name']['riskpremins'];?></td>
      </tr>
      <?=$oet;?>
                         
      <tr>
        <td></td>
        <th>Total Premium</th>
        <td><?=$_SESSION['prem_plan_name']['riskpremins']+$lp+$oet;?></td>
      </tr>
    </tbody>
  </table>
<?php
$_SESSION['prem_plan_name']['totprem']=$_SESSION['prem_plan_name']['riskpremins']+$lp+$oet;

$jprem= array(
    array ("","","Premium"),
    array  ("Number of unit",$_SESSION['prem_plan_name']['apu'].' Unit',$lp),
    array ( "Risk Premium",$_SESSION['prem_plan_name']['sumass'],$_SESSION['prem_plan_name']['riskpremins']),
    array ("Occupation Extra",'',$oe),
    array ("","Total Premium",$_SESSION['prem_plan_name']['riskpremins']+$lp+$oet)
    );
$_SESSION['prem_plan_name']['jprem']=json_encode($jprem, JSON_FORCE_OBJECT);
?>