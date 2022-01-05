<?php
if (isset($_SESSION['ch'])){
    $cp=$_SESSION['ch'];
}
 else{   
$wp= $_SESSION['fprint']['WEBSEQ'];
    $query_cp = "select * from ipl.WEB_CHILDPROTECTION where WEBPROPOSAL_NO='$wp'";
    $q_cp  = $this->db->query($query_cp);
               foreach ($q_cp->result() as $r_cp){
               $cp[] =$r_cp;
           }
 }      
           for ($x = 0; $x <= count ($cp)-1; $x++) {
            $date1=date_create(date("Y-m-d"));
            $date2=date_create($cp[$x]->DOB);
            $diff=date_diff($date1,$date2);
            $cage= round (($diff->format("%a"))/365);
    if($cp[$x]->HEALTHY=='y'){
        $hl='Yes';
    }
    else{
        $hl='No';
    }
        if($cp[$x]->DISABLEMENT=='y'){
        $di='Yes';
    }
    else{
        $di='No';
    }
if($cp[$x]->VACCINATION=='y'){
        $va='Yes';
    }
    else{
        $va='No';
    }
?>
<page size="A4"mim  ng-app="">
    <style>
            .item1 { grid-area: header; }
            .grid-container {
              display: grid;
              grid-gap: 10px;
              padding: 10px;
              position: absolute;

            }
            .grid-container > div { 
              text-align: center;
            }
</style>
    <img src="<?php echo base_url();?>asset/images/childform.jpg"style="height: 29.7cm; width: 21cm">
    <div style="position: absolute;top: 199px;left: 590px;"><?=$_SESSION['fprint']['PROPNO'];?></div>
<div style="position: absolute;top: 240px;left: 220px;"><?=$cp[$x]->NAME;?></div>
<div style="position: absolute;top: 240px;left: 620px;"><?=$cp[$x]->NICKNAME;?></div>
<div style="position: absolute;top: 270px;left: 180px;"><?=$cp[$x]->FTHER;?></div>
<div style="position: absolute;top: 270px;left: 480px;"><?=$cp[$x]->MOTHER;?></div>
<div style="position: absolute;top: 300px;left: 200px;"><?=$cp[$x]->PREM;?></div>
<div style="position: absolute;top: 300px;left: 440px;"><?=$cp[$x]->AGE;?></div>
<div style="position: absolute;top: 300px;left: 600px;"><?=$cp[$x]->REL;?></div>
<div style="position: absolute;top: 330px;left: 180px;"><?=$cp[$x]->DOB;?></div>
<div style="position: absolute;top: 330px;left: 290px;"><?=$cage;?></div>
<div style="position: absolute;top: 330px;left: 400px;"><?=$cp[$x]->HIGHT;?></div>
<div style="position: absolute;top: 330px;left: 600px;"><?=$cp[$x]->WEIGHT;?></div>
<div style="position: absolute;top: 385px;left: 290px;"><?=$hl;?></div>
<div style="position: absolute;top: 405px;left: 420px;"><?=$di;?></div>
<div style="position: absolute;top: 443px;left: 355px;"><?=$va;?></div>
<?php

         if($cp[$x]->SICK=='n'){
             echo '<div style="position: absolute;top: 485px;left: 688px;"><div class="fooch black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 485px;left: 658px;"><div class="foo black"></div></div>';
        }
        
         if($cp[$x]->TREATMENT=='n'){
             echo '<div style="position: absolute;top: 504px;left: 688px;"><div class="fooch black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 504px;left: 658px;"><div class="foo black"></div></div>';
        } 
        
         if($cp[$x]->DIAGNOSED=='n'){
             echo '<div style="position: absolute;top: 523px;left: 688px;"><div class="fooch black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 523px;left: 658px;"><div class="foo black"></div></div>';
        }     
        
         if($cp[$x]->STOMACH=='n'){
             echo '<div style="position: absolute;top: 542px;left: 688px;"><div class="fooch black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 542px;left: 658px;"><div class="foo black"></div></div>';
        }        
         if($cp[$x]->COUGHING=='n'){
             echo '<div style="position: absolute;top: 575px;left: 688px;"><div class="fooch black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 575px;left: 658px;"><div class="foo black"></div></div>';
        }       
         if($cp[$x]->ABNORMALITIES=='n'){
             echo '<div style="position: absolute;top: 594px;left: 688px;"><div class="fooch black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 594px;left: 658px;"><div class="foo black"></div></div>';
        }
?>
<div style="position: absolute;top: 631px;left: 100px;"><?=$cp[$x]->DETAILS;?></div>
</page>
           <?php }?>