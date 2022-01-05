
       <?php
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
        <th>Permanent Disability Accidental Benefit</th>
        <td>$ssum </td>
        <td>$ladb </td>
      </tr>";
           }
       }
       if (isset($_SESSION['prem_plan_name']['cichk'])){
           $ciss=round($_SESSION['prem_plan_name']['sumass']);
           $cil= round($this->premcal_model->get_supli(5,$ciss,$aage));
               $cit="
      <tr>
        <th>Critical Illness </th>
        <td>$ciss </td>
        <td>$cil </td>
      </tr>";
           
       }     
       if (isset($_SESSION['prem_plan_name']['hipl'])&&$_SESSION['prem_plan_name']['hipl']>44000){
           $per=0;
           $mas='';
       }
       if (!empty($_SESSION['prem_plan_name']['spdob'])){
           $per=5;
           $mas='(Discount 5%)';
       }
       
       if (!empty($_SESSION['prem_plan_name']['fcdob'])){
           $per=10;
           $mas='(Discount 10%)';
       }
       
       if (!empty($_SESSION['prem_plan_name']['scdob'])){
           $per=10;
           $mas='(Discount 10%)';
       }
       if (isset($_SESSION['prem_plan_name']['hipl'])&&$_SESSION['prem_plan_name']['hipl']>44000){
           $_SESSION['prem_plan_name']['shi']=1;
           $shi=round($_SESSION['prem_plan_name']['hipl']);
           $shil= round($this->premcal_model->get_suplihi($aage,'s',$per));
               $hist="
      <tr>
        <th>Hospital Insurance Self $mas</th>
        <td>$shi </td>
        <td>$shil </td>
      </tr>";
           if (isset($_SESSION['prem_plan_name']['spdob']) && !empty($_SESSION['prem_plan_name']['spdob'])){
               $_SESSION['prem_plan_name']['sspo']=1;
                $date_com = new DateTime($_SESSION['prem_plan_name']['date_com']);
                $sdob    = new DateTime($_SESSION['prem_plan_name']['spdob']);
                if ($date_com > $sdob) {
                    $sage=$this->prevpolicy_model->get_age($_SESSION['prem_plan_name']['spdob']);
                    $sphil= round($this->premcal_model->get_suplihi($sage,'s',$per));
               $sphit="
      <tr>
        <th>Hospital Insurance Spouse $mas</th>
        <td>$shi </td>
        <td>$sphil </td>
      </tr>";
                    
                }
           }
           if (isset($_SESSION['prem_plan_name']['fcdob']) && !empty($_SESSION['prem_plan_name']['fcdob'])){
               $fc=1;
                $date_com = new DateTime($_SESSION['prem_plan_name']['date_com']);
                $fcdob    = new DateTime($_SESSION['prem_plan_name']['fcdob']);
                if ($date_com > $fcdob) {
                    $fcage=$this->prevpolicy_model->get_age($_SESSION['prem_plan_name']['fcdob']);
                    $fchil= round($this->premcal_model->get_suplihi($fcage,'c',10));
                    
               $fchit="
      <tr>
        <th>Hospital Insurance Children1 $mas</th>
        <td>$shi </td>
        <td>$fchil </td>
      </tr>";
                }
           }
           if (isset($_SESSION['prem_plan_name']['scdob']) && !empty($_SESSION['prem_plan_name']['scdob'])){
               $sc=1;
                $date_com = new DateTime($_SESSION['prem_plan_name']['date_com']);
                $scdob    = new DateTime($_SESSION['prem_plan_name']['scdob']);
                if ($date_com > $scdob) {
                    $scage=$this->prevpolicy_model->get_age($_SESSION['prem_plan_name']['scdob']);
                    $schil =round($this->premcal_model->get_suplihi($scage,'c',10));
                                        
               $schit="
      <tr>
        <th>Hospital Insurance Children2 $mas</th>
        <td>$shi </td>
        <td>$schil </td>
      </tr>";
                }
           }
           $_SESSION['prem_plan_name']['numch']=$sc+$fc;
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
        <th>Life</th>
        <td><?=round($_SESSION['prem_plan_name']['sumass']);?> </td>
        <td><?=round($_SESSION['prem_plan_name']['prem']);?>  </td>
      </tr>
       <?=$pdabt;?>
       <?=$adbt;?>
       <?=$cit;?>
      <?=$hist;?>
      <?=$sphit;?>
      <?=$fchit;?>
<?=$schit;?>
      <?=$oet;?>
      
     <?php
     
     ?>
            <tr>
        <td></td>
        <th>Total Premium</th>
        <td><?=$_SESSION['prem_plan_name']['prem']+$oe+$schil+$fchil+$sphil+$lpdab+$ladb+$cil+$shil;?>  </td>
      </tr>
    </tbody>
  </table>

<?php
$_SESSION['prem_plan_name']['totprem']=$_SESSION['prem_plan_name']['prem']+$oe+$schil+$fchil+$sphil+$lpdab+$ladb+$cil+$shil;

$jprem= array(
    array ("","","Premium"),
    array ( "Life",$_SESSION['prem_plan_name']['sumass'],$_SESSION['prem_plan_name']['prem']),
    array ("Permanent Disability Accidental Benefit",$ssum,$lpdab),
    array  ("Accidental Death Benefit",$ssum,$ladb),
    array  ("Critical Illness",$ciss,$cil),
    array  ("Hospital Insurance Self ".$mas,$shi,$shil),
    array  ("Hospital Insurance Spouse ".$mas,$shi,$sphil),
    array  ("Hospital Insurance Children1 ".$mas,$shi,$fchil),
    array  ("Hospital Insurance Children2 ".$mas,$shi,$schil),
    array ("Occupation Extra","",$oe),
    array ("","Total Premium",$_SESSION['prem_plan_name']['prem']+$oe+$schil+$fchil+$sphil+$lpdab+$ladb+$cil+$shil)
    );
$_SESSION['prem_plan_name']['jprem']=json_encode($jprem, JSON_FORCE_OBJECT);
?>
  