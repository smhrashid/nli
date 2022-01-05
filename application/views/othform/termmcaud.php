<?php
for($x = 0; $x < count($_SESSION['aud']); $x++){
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
            table {
                    width: 100%;
                    border-collapse: collapse;

                  }
                  
 table td, table th {
    padding: 6px !important;
}
</style>
    <img src="<?php echo base_url();?>asset/images/termh.jpg"style="height: 29.7cm; width: 21cm">
    <div style="position: absolute;top: 178px;left: 170px;"><?=$_SESSION['aud'][$x]->NAME;?></div>
    <?php
         if($_SESSION['aud'][$x]->SUGAR=='n'){
             echo '<div style="position: absolute;top: 249px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 249px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->HEART=='n'){
             echo '<div style="position: absolute;top: 278px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 278px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->NERVOUS=='n'){
             echo '<div style="position: absolute;top: 307px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 307px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->INDIGESTION=='n'){
             echo '<div style="position: absolute;top: 370px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 370px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->AIDS=='n'){
             echo '<div style="position: absolute;top: 415px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 415px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->CANCER=='n'){
             echo '<div style="position: absolute;top: 444px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 444px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->ASTHMA=='n'){
             echo '<div style="position: absolute;top: 490px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 490px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->ANXIETY=='n'){
             echo '<div style="position: absolute;top: 518px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 518px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->ARTHRITIS=='n'){
             echo '<div style="position: absolute;top: 545px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 545px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->THYROID=='n'){
             echo '<div style="position: absolute;top: 590px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 590px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->COUGH=='n'){
             echo '<div style="position: absolute;top: 617px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 617px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->EATING=='n'){
             echo '<div style="position: absolute;top: 645px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 645px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->BLEEDING=='n'){
             echo '<div style="position: absolute;top: 673px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 673px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->WEIGHT=='n'){
             echo '<div style="position: absolute;top: 701px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 701px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->TUMOR=='n'){
             echo '<div style="position: absolute;top: 729px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 729px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->EPILEPSY=='n'){
             echo '<div style="position: absolute;top: 773px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 773px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->BILE=='n'){
             echo '<div style="position: absolute;top: 801px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 801px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->OTHER=='n'){
             echo '<div style="position: absolute;top: 829px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 829px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->HOSPITAL=='n'){
             echo '<div style="position: absolute;top: 885px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 885px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->HOSPITALIZED=='n'){
             echo '<div style="position: absolute;top: 948px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 948px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->CHECKUP=='n'){
             echo '<div style="position: absolute;top: 977px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 977px;left: 686px;"><div class="fooaud black"></div></div>';
        }
        if($_SESSION['aud'][$x]->BIOPSY=='n'){
             echo '<div style="position: absolute;top: 1021px;left: 735px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 1021px;left: 686px;"><div class="fooaud black"></div></div>';
        }
    ?>
</page>
<page size="A4"mim  ng-app="">
    <img src="<?php echo base_url();?>asset/images/termh1.jpg"style="height: 29.7cm; width: 21cm">
        <?php
         if($_SESSION['aud'][$x]->SMOKE=='n'){
             echo '<div style="position: absolute;top: 37px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 37px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->SURGERY=='n'){
             echo '<div style="position: absolute;top: 81px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 81px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->REJECTED=='n'){
             echo '<div style="position: absolute;top: 144px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 144px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->TREATMENT=='n'){
             echo '<div style="position: absolute;top: 206px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 206px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->OCCUPATION=='n'){
             echo '<div style="position: absolute;top: 270px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 270px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->ADVANTAGE=='n'){
             echo '<div style="position: absolute;top: 313px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 313px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->ABSENT=='n'){
             echo '<div style="position: absolute;top: 358px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 358px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->FAMILY=='n'){
             echo '<div style="position: absolute;top: 396px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 396px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->PREGNANT=='n'){
             echo '<div style="position: absolute;top: 440px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 440px;left: 686px;"><div class="fooaud black"></div></div>';
        }
         if($_SESSION['aud'][$x]->GYNECOLOGY=='n'){
             echo '<div style="position: absolute;top: 478px;left: 733px;"><div class="fooaud black"></div></div>';
         }
        else {
            echo '<div style="position: absolute;top: 478px;left: 686px;"><div class="fooaud black"></div></div>';
        }
      ?>
</page>
<?php
}
?>