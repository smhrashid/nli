<?php 
//unset($_SESSION['dm']);
if (isset($_POST['submit'])){
    $_POST['HIGHT'] =  $_POST['hft'].'f'.$_POST['hinc'].'i';
    unset ($_POST['hft']);
    unset ($_POST['hinc']);
   array_push($_SESSION['dm'],$_POST['SL']);
    unset($_POST['submit']);
    $_POST['WEBPROPOSAL_NO'] = $_SESSION['prem_plan_name']['WEBSEQ'];
    if (isset($_POST['DOB'])){
        $DOB=$_POST['DOB'];
        unset($_POST['DOB']);
        $_POST['DOB'] = date_format(date_create($DOB),"d-M-Y");
    }
    if (count($_POST)==18){
        $query_in_val= "INSERT INTO ipl.WEB_CHILDPROTECTION (".implode(",",array_keys($_POST)).")"."  VALUES ('".implode("','",array_values($_POST))."')";
    }
    else{
        $query_in_val= "INSERT INTO ipl.WEB_MC_AUDULT (".implode(",",array_keys($_POST)).")"."  VALUES ('".implode("','",array_values($_POST))."')";
    }
    echo $query_in_val;
    $this->db->query($query_in_val);
}
$ms[]='<li><a data-toggle="tab" href="#home">Self</a></li>';
                for ($x = 1; $x <= $_SESSION['prem_plan_name']['numapp']; $x++) {
                    $md[]= '<li><a data-toggle="tab" href="#Dependent'.$x.'">Dependent '.$x.'</a></li>';
                }
$menu[]=array_merge($ms,$md);
$_SESSION['dm']=array_unique($_SESSION['dm']);

    if(!isset($_SESSION['dm'])){
   $_SESSION['dm']=array();
    }
    else {
        foreach($_SESSION['dm'] as $value){
            unset($menu[0][$value]);
        }
    }
foreach($menu as $v){
    $ep= substr(strip_tags(implode($v)),9,2);
}
?>
<div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
        <?php 
               foreach($menu as $item){
                  echo implode($item);
              } 
       ?>
 </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade <?php if (count($_SESSION['dm'])==0){echo 'in active';}?>">
        <form role="form" method="POST">
            <input type="hidden"  name="REL" value="Self">
            <input type="hidden" name="SL" value="0">   
                <?php
                echo $_SESSION['prem_plan_name']['NAME'];
                        $this->load->view('mc/mcadult');
                 ?>
            <input type="submit" name="submit" class="btn btn-default" style="width: 100%;"  value="Submit">
        </form>
    </div>
          <?php 
                for ($x = 1; $x <= $_SESSION['prem_plan_name']['numapp']; $x++) {
                    if ((int)$ep==$x){
                       echo '<div id="Dependent'.$x.'" class="tab-pane fade in active">'; 
                    }
                    else {
                        echo '<div id="Dependent'.$x.'" class="tab-pane fade">'; 
                    }
          echo $_SESSION['prem_plan_name']['depname'.$x];
            $hight=$_SESSION['prem_plan_name']['dephhfit'.$x].'f'.$_SESSION['prem_plan_name']['dephhincs'.$x].'i';
            $d_age= $this->prevpolicy_model->get_age($_SESSION['prem_plan_name']['depdob'.$x]);
            ?>

      <?php
            if ($d_age>18) {
                $_SESSION['mcdep']='y';
                ?>
              <form role="form" method="POST">
                <input type="hidden" name="NAME" value="<?=$_SESSION['prem_plan_name']['depname'.$x];?>">
                <input type="hidden" name="DOB" value="<?=$_SESSION['prem_plan_name']['depdob'.$x];?>">
                <input type="hidden" name="REL"  value="<?=$_SESSION['prem_plan_name']['deprel'.$x];?>">
                <table>
                      <tbody>
                          <tr>
                              <td style="padding: 0px 0px;">
                                  <div class="input-group">
                                      <span class="input-group-addon">উচ্চতা</span>
                                      <input type="number" class="form-control" style=" max-width:65px;" name="hft" placeholder="ফুট" value="5">
                                      <input type="number" class="form-control" style=" max-width: 65px;" name="hinc" placeholder="ইঞ্চি" value="5">
                                  </div>
                              </td>
                              <td  style="padding: 0px 0px;">
                                  <div class="input-group">
                                      <span class="input-group-addon">ওজন</span>
                                      <input type="number" class="form-control" style=" max-width:65px;" name="DWEIGHT" placeholder="KG" value="51">
                                  </div>
                              </td>
                              <td  style="padding: 0px 0px;">
                                  <div class="input-group">
                                      <span class="input-group-addon">বুকের মাপ</span>            
                                      <input type="number" class="form-control" style=" max-width: 65px;" name="CHEAST" placeholder="ইঞ্চি" value="29">
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                </table>
                <input type="hidden" name="SL" value="<?=$x;?>">   
              <?php
                $this->load->view('mc/mcadult');
                echo ' 
                <input type="submit" name="submit" class="btn btn-default" style="width: 100%;"  value="Submit">
             </form>'; 
            }
            else {
                $_SESSION['mcch']='y';
                ?>
              <form role="form" method="POST">
                <input type="hidden" name="NAME" value="<?=$_SESSION['prem_plan_name']['depname'.$x];?>">
                <input type="hidden" name="DOB" value="<?=$_SESSION['prem_plan_name']['depdob'.$x];?>">
                <input type="hidden" name="REL"  value="<?=$_SESSION['prem_plan_name']['deprel'.$x];?>">
                <table>
                      <tbody>
                          <tr>
                              <td style="padding: 0px 0px;">
                                  <div class="input-group">
                                      <span class="input-group-addon">উচ্চতা</span>
                                      <input type="number" class="form-control" style=" max-width:65px;" name="hft" placeholder="ফুট" value="5">
                                      <input type="number" class="form-control" style=" max-width: 65px;" name="hinc" placeholder="ইঞ্চি" value="5">
                                  </div>
                              </td>
                              <td  style="padding: 0px 0px;">
                                  <div class="input-group">
                                      <span class="input-group-addon">ওজন</span>
                                      <input type="number" class="form-control" style=" max-width:65px;" name="DWEIGHT" placeholder="KG" value="51">
                                  </div>
                              </td>
                              <td  style="padding: 0px 0px;">
                                  <div class="input-group">
                                      <span class="input-group-addon">বুকের মাপ</span>            
                                      <input type="number" class="form-control" style=" max-width: 65px;" name="CHEAST" placeholder="ইঞ্চি" value="29">
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                </table>
                <input type="hidden" name="SL" value="<?=$x;?>">  
              <?php
                $this->load->view('mc/mcchild');
                echo ' 
                <input type="submit" name="submit" class="btn btn-default" style="width: 100%;"  value="Submit">
             </form>'; 
            }
      ?>
    </div>
  <?php  }
  if(count($_SESSION['dm'])== $_SESSION['prem_plan_name']['numapp']+1){
      header('Location: formbody');
  }
    ?>
  </div>
</div>
