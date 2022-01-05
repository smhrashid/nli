<?php
foreach ($this->premcal_model->get_hospi($_SESSION['prem_plan_name']['AGE']) as $r_hospi):
    $self[]=array ("name"=>"Self","age"=>$_SESSION['prem_plan_name']['AGE'],"lprem"=>$r_hospi->LPREM,"hprem"=>$r_hospi->HPREM,"stamp"=>495,"hcard"=>300);
endforeach;


if (!empty($_SESSION['prem_plan_name']['numapp'])){
    for ($x = 1; $x <= $_SESSION['prem_plan_name']['numapp']; $x++) {
        if ($_SESSION['prem_plan_name']['FAGE'.$x]<=18){
            $fage=18;
        }
        else {
            $fage=$_SESSION['prem_plan_name']['FAGE'.$x];
        }
        
        foreach ($this->premcal_model->get_hospi($fage) as $r_hospi):
            $fam[] = array ("name"=>$_SESSION['prem_plan_name']['depname'.$x],"age"=>$_SESSION['prem_plan_name']['FAGE'.$x],"lprem"=>0,"hprem"=>$r_hospi->HPREM,"stamp"=>0,"hcard"=>300);
        endforeach;
    }
}
$allper=array_merge($self,$fam);
?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Life<br>Premium</th>
        <th>Health<br>Premium</th>
        <th>Stamp<br>Fees</th>
        <th>Health<br>Card</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <?php
  for ($x = 0; $x <= $_SESSION['prem_plan_name']['numapp']; $x++) {
    ?>    
      <tr>
        <th><?=$allper[$x]['name'];?></th>
        <td><?=$allper[$x]['age'];?></td>
        <td><?=$allper[$x]['lprem'];?></td>
        <td><?=$allper[$x]['hprem'];?></td>
        <td><?=$allper[$x]['stamp'];?></td>
        <td><?=$allper[$x]['hcard'];?></td>
        <td><?=$allper[$x]['lprem']+$allper[$x]['hprem']+$allper[$x]['stamp']+$allper[$x]['hcard'];?></td>
      </tr>  
  <?php
  $y[]=$allper[$x]['lprem']+$allper[$x]['hprem']+$allper[$x]['stamp']+$allper[$x]['hcard'];
 
  }
  $_SESSION['prem_plan_name']['aprem']=array_sum($y);
  ?>          
      <tr>
        <td colspan="6">Total</td>
        <td><?=array_sum($y);?></td>
      </tr>     
    </tbody>
  </table>