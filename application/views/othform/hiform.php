   <?php
  // $wp= 00000125;
   $wp= $_SESSION['fprint']['WEBSEQ'];
            $query_f_hi = "select * from  ipl.WEB_HI_PROPOSAL where WEBPROPOSAL_NO='$wp'";
            $q_f_hi  = $this->db->query($query_f_hi);
            foreach ($q_f_hi ->result() as $r_f_hi){
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
    <img src="<?php echo base_url();?>asset/images/pphi1.jpg"style="height: 29.7cm; width: 21cm">
    <div style="position: absolute;top: 194px;left: 265px;"><?=$r_f_hi->NAME;?></div>
    <div style="position: absolute;top: 218px;left: 100px;">
        
                <?php
                    for ($x = 0; $x < count($_SESSION['occ']); $x++) {
                   if($_SESSION['occ'][$x]->OCCUP==$r_f_hi->OCCUP){
                       echo $_SESSION['occ'][$x]->OCCUPNAME;
                   }   
               } 
                ?>
      
    </div>
    <div class="grid-container" style="top: 222px;left: 248px; width: 333px;line-height: 0.8;"><div class="item1"><?=$r_f_hi->JOBADD;?></div></div>
    <div style="position: absolute;top: 242px;left: 657px;"><?=$r_f_hi->JOBDETAILS;?></div>
    <div class="grid-container" style="top: 248px;left: 120px; width: 633px;line-height: 0.8;"><div class="item1"><?=$r_f_hi->PADDR;?></div></div>
    <div style="position: absolute;top: 290px;left: 130px;"><?=$r_f_hi->DOB;?></div>
    <div style="position: absolute;top: 290px;left: 340px;"><?=$r_f_hi->PHONE;?></div>
         <?php
     if (strtolower($r_f_hi->SEX)=='f'){
         echo '<div style="position: absolute;top: 289px;left: 683px;"><div class="foohi black"></div></div>'; 
     }
     elseif (strtolower($r_f_hi->SEX)=='m'){
         echo '<div style="position: absolute;top: 289px;left: 630px;"><div class="foohi black"></div></div>'; 
     }

     ?>
    <?php 
    if (!empty($r_f_hi->SPNAME)){
        echo '<div style="position: absolute;top: 313px;left: 236px;"><div class="foohi black"></div></div>'; 
       
        if (strtolower($r_f_hi->SEX)=='m'){
           $r='Wife';
        }
         elseif (strtolower($r_f_hi->SEX)=='f'){
             $r='Husband';
         }
    }
    else{
         echo '<div style="position: absolute;top: 313px;left: 156px;"><div class="foohi black"></div></div>'; 
     }
    ?>
    <div style="position: absolute;top: 362px;left: 600px;"><?=$r;?></div></div>
    <div style="position: absolute;top: 313px;left: 650px;"><?=$r_f_hi->NOCHILD;?></div>
      <div style="position: absolute;top: 362px;left: 110px;"><?=$r_f_hi->SPNAME;?></div>
      <div style="position: absolute;top: 362px;left: 470px;"><?=$r_f_hi->SPDOB;?></div>
      <div style="position: absolute;top: 362px;left: 600px;"><?=$r_f_hi->SPREL;?></div>

      <div style="position: absolute;top: 410px;left: 110px;"><?=$r_f_hi->FCNAME;?></div>
      <div style="position: absolute;top: 410px;left: 470px;"><?=$r_f_hi->FCDOB;?></div>
      <?php
      if ($r_f_hi->FCREL=='s'){
          $frel='Son';
      }
      if ($r_f_hi->FCREL=='d'){
          $frel='Daughter ';
      }
 
      ?>
      <div style="position: absolute;top: 410px;left: 600px;"><?=$frel;?></div>      

      <div style="position: absolute;top: 432px;left: 110px;"><?=$r_f_hi->SCNAME;?></div>
      <div style="position: absolute;top: 432px;left: 470px;"><?=$r_f_hi->SCDOB;?></div>
      <?php
      if ($r_f_hi->SCREL=='s'){
          $srel='Son';
      }
      if ($r_f_hi->SCREL=='d') {
          $srel='Daughter ';
      }
      ?>
      <div style="position: absolute;top: 432px;left: 600px;"><?=$srel;?></div>      
      
      <?php
                if ($r_f_hi->REL=='SL'){
                    $sl=1;
                }
                if ($r_f_hi->REL=='SP'){
                    $sp=2;
                }
                if ($r_f_hi->REL=='DN'){
                    $dn=3;
                }
                if ($r_f_hi->REL=='SN'){
                    $sn=3;
                }
                $tr=$sl+$sp+$dn+$sn;
                if($tr==1){
                    echo '<div style="position: absolute;top: 482px;left: 155px;"><div class="foohi black"></div></div>'; 
                }
               elseif($tr==3){
                        echo '<div style="position: absolute;top: 482px;left: 290px;"><div class="foohi black"></div></div>'; 
                   }
              else {
                    echo '<div style="position: absolute;top: 482px;left: 398px;"><div class="foohi black"></div></div>'; 
                }
      ?>
      
      
      
      <?php
            $hiplan= $r_f_hi->PLAN;
      ?>
      <?php
                if ($hiplan==45000){
                    echo '<div style="position: absolute;top: 528px;left: 114px;"><div class="foohi black"></div></div>'; 
                }
                elseif ($hiplan==75000){
                    echo '<div style="position: absolute;top: 528px;left: 186px;"><div class="foohi black"></div></div>'; 
                }
                elseif ($hiplan==100000){
                    echo '<div style="position: absolute;top: 528px;left: 396px;"><div class="foohi black"></div></div>'; 
                }
                elseif ($hiplan==150000){
                    echo '<div style="position: absolute;top: 528px;left: 470px;"><div class="foohi black"></div></div>'; 
                }
     ?>
     <?php
     if ($r_f_hi->HIDEG=='n'){
         echo '<div style="position: absolute;top: 774px;left: 382px;"><div class="foohi black"></div></div>'; 
         $degn='N/A';
         $degd='N/A';
         $degn1='N/A';
         $degd1='N/A';
     }
     elseif ($r_f_hi->HIDEG=='y'){
         echo '<div style="position: absolute;top: 774px;left: 318px;"><div class="foohi black"></div></div>'; 
         $degn=$r_f_hi->DEG1;
         $degd=$r_f_hi->DEGDUR1;
         $degn1=$r_f_hi->DEG2;
         $degd1=$r_f_hi->DEGDUR2;
     }
     ?>
      <div style="position: absolute;top: 830px;left: 320px;"><?=$degn;?></div>
      <div style="position: absolute;top: 830px;left: 510px;"><?=$degd;?></div>
      <div style="position: absolute;top: 850px;left: 320px;"><?=$degn1;?></div>
      <div style="position: absolute;top: 850px;left: 510px;"><?=$degd1;?></div>
     <?php
     if ($r_f_hi->DOCCH=='n'){
         echo '<div style="position: absolute;top: 901px;left: 596px;"><div class="foohi black"></div></div>'; 
     }
     elseif ($r_f_hi->DOCCH=='y'){
         echo '<div style="position: absolute;top: 901px;left: 541px;"><div class="foohi black"></div></div>'; 
     }
     ?>
    <?php
     if ($r_f_hi->HIINS=='n'){
         echo '<div style="position: absolute;top: 932px;left: 616px;"><div class="foohi black"></div></div>'; 
         $com1='N/A';
         $hipremdt1='N/A';
         $com2='N/A';
         $hipremdt2='N/A';
     }
     elseif ($r_f_hi->HIINS=='y'){
         echo '<div style="position: absolute;top: 932px;left: 561px;"><div class="foohi black"></div></div>'; 
         $com1=$r_f_hi->COM1;
         $hipremdt1=$r_f_hi->HIPREMDT1;
         $com2=$r_f_hi->COM2;
         $hipremdt2=$r_f_hi->HIPREMDT2;
     }
     ?>
      <div style="position: absolute;top: 980px;left: 320px;"><?=$com1;?></div>
      <div style="position: absolute;top: 980px;left: 510px;"><?=$hipremdt1;?></div>
      <div style="position: absolute;top: 1000px;left: 320px;"><?=$com2;?></div>
      <div style="position: absolute;top: 1000px;left: 510px;"><?=$hipremdt2;?></div>
</page>
<page size="A4">
    <img src="<?php echo base_url();?>asset/images/pphi2.jpg"style="height: 29.7cm; width: 21cm">
         <?php
     if ($r_f_hi->DISB=='n'){
         echo '<div style="position: absolute;top: 81px;left: 597px;"><div class="foohi black"></div></div>'; 
         $admi1='N/A';
         $admidt1='N/A';
         $admist1='N/A';
         $admi2='N/A';
         $admidt2='N/A';
         $admist2='N/A';
     }
     elseif ($r_f_hi->DISB=='y'){
         echo '<div style="position: absolute;top: 81px;left: 547px;"><div class="foohi black"></div></div>'; 
         $admi1=$r_f_hi->ADMI1;
         $admidt1=$r_f_hi->ADMIDT1;
         $admist1=$r_f_hi->ADMIST1;
         $admi2=$r_f_hi->ADMI2;
         $admidt2=$r_f_hi->ADMIDT2;
         $admist2=$r_f_hi->ADMIST2;
     }
     ?>
    <div style="position: absolute;top: 125px;left: 320px;"><?=$admi1;?></div>
    <div style="position: absolute;top: 125px;left: 430px;"><?=$admidt1;?></div>
    <div style="position: absolute;top: 125px;left: 510px;"><?=$admist1;?></div>
    
    <div style="position: absolute;top: 147px;left: 320px;"><?=$admi2;?></div>
    <div style="position: absolute;top: 147px;left: 430px;"><?=$admidt2;?></div>
    <div style="position: absolute;top: 147px;left: 510px;"><?=$admist2;?></div>
             <?php
     if ($r_f_hi->HOST=='n'){
         echo '<div style="position: absolute;top: 186px;left: 665px;"><div class="foohi black"></div></div>'; 
         $exn1='N/A';
         $exndt1='N/A';
         $exst1='N/A';
         $exn2='N/A';
         $exndt2='N/A';
         $exst2='N/A';     
     }
     elseif ($r_f_hi->HOST=='y'){
         echo '<div style="position: absolute;top: 186px;left: 628px;"><div class="foohi black"></div></div>'; 
         $exn1=$r_f_hi->EXN1;
         $exndt1=$r_f_hi->EXNDT1;
         $exst1=$r_f_hi->EXST1;
         $exn2=$r_f_hi->EXN2;
         $exndt2=$r_f_hi->EXNDT2;
         $exst2=$r_f_hi->EXST2;
     }
     ?>
    <div style="position: absolute;top: 230px;left: 320px;"><?=$exn1;?></div>
    <div style="position: absolute;top: 230px;left: 450px;"><?=$exndt1;?></div>
    <div style="position: absolute;top: 230px;left: 533px;"><?=$exst1;?></div>
    
    <div style="position: absolute;top: 246px;left: 320px;"><?=$exn2;?></div>
    <div style="position: absolute;top: 246px;left: 450px;"><?=$exndt2;?></div>
    <div style="position: absolute;top: 246px;left: 533px;"><?=$exst2;?></div>
                 <?php
     if ($r_f_hi->HIOT=='n'){
         echo '<div style="position: absolute;top: 310px;left: 522px;"><div class="foohi black"></div></div>'; 
         $otre1='N/A';
         $otdt1='N/A';
         $otst1='N/A';
         $otre2='N/A';
         $otdt2='N/A';
         $otst2='N/A';
     }
     elseif ($r_f_hi->HIOT=='y'){
         echo '<div style="position: absolute;top: 310px;left: 471px;"><div class="foohi black"></div></div>'; 
         $otre1=$r_f_hi->OTRE1;
         $otdt1=$r_f_hi->OTDT1;
         $otst1=$r_f_hi->OTST1;
         
         $otre2=$r_f_hi->OTRE2;
         $otdt2=$r_f_hi->OTDT2;
         $otst2=$r_f_hi->OTST2;
        
     }
     ?>
    <div style="position: absolute;top: 357px;left: 320px;"><?=$otre1;?></div>
    <div style="position: absolute;top: 357px;left: 430px;"><?=$otdt1;?></div>
    <div style="position: absolute;top: 357px;left: 533px;"><?=$otst1;?></div>
    
    <div style="position: absolute;top: 377px;left: 320px;"><?=$otre2;?></div>
    <div style="position: absolute;top: 377px;left: 430px;"><?=$otdt2;?></div>
    <div style="position: absolute;top: 377px;left: 533px;"><?=$otst2;?></div>
    
                     <?php
     if ($r_f_hi->HISTOP=='n'){
         echo '<div style="position: absolute;top: 395px;left: 698px;"><div class="foohi black"></div></div>'; 
    
            $inscom1='N/A';
            $isdt1='N/A';
            $poltp1='N/A';
            $inscom2='N/A';
            $isdt2='N/A';
            $poltp2='N/A';

     }
     elseif ($r_f_hi->HISTOP=='y'){
         echo '<div style="position: absolute;top: 395px;left: 648px;"><div class="foohi black"></div></div>'; 
         $inscom1=$r_f_hi->INSCOM1;
         $isdt1=$r_f_hi->ISDT1;
         $poltp1=$r_f_hi->POLTP1;
         $inscom2=$r_f_hi->INSCOM2;
         $isdt2=$r_f_hi->ISDT2;
         $poltp2=$r_f_hi->POLTP2;
        
     }
     ?>
    <div style="position: absolute;top: 440px;left: 320px;"><?=$inscom1;?></div>
    <div style="position: absolute;top: 440px;left: 430px;"><?=$isdt1;?></div>
    <div style="position: absolute;top: 440px;left: 533px;"><?=$poltp1;?></div>
    
    <div style="position: absolute;top: 455px;left: 320px;"><?=$inscom2;?></div>
    <div style="position: absolute;top: 455px;left: 430px;"><?=$isdt2;?></div>
    <div style="position: absolute;top: 455px;left: 533px;"><?=$poltp2;?></div>
    <?php
    if ($r_f_hi->HIFPREG=='y'){
         echo '<div style="position: absolute;top: 498px;left: 181px;"><div class="foohi black"></div></div>'; 
         $pregdu=$r_f_hi->PREGDU;
         $pregdt=$r_f_hi->PREGDT;
         }
         else {
             echo '<div style="position: absolute;top: 498px;left: 231px;"><div class="foohi black"></div></div>'; 
         $pregdu='N/A';
         $pregdt='N/A';
         }
     ?>
        <div style="position: absolute;top: 542px;left: 320px;"><?=$pregdu;?></div>
        <div style="position: absolute;top: 542px;left: 460px;"><?=$pregdt;?></div>
            <?php
    if ($r_f_hi->PREGCOMP=='y'){
          echo '<div style="position: absolute;top: 579px;left: 389px;"><div class="foohi black"></div></div>'; 
         $pregcomp1=$r_f_hi->PREGCOMP1;
         $pregtype1=$r_f_hi->PREGTYPE1;
         
         $pregcomp2=$r_f_hi->PREGCOMP2;
         $pregtype2=$r_f_hi->PREGTYPE2;
       
         }
         else {
             
            echo '<div style="position: absolute;top: 579px;left: 439px;"><div class="foohi black"></div></div>'; 
         $pregcomp1='N/A';
         $pregtype1='N/A';
         $pregcomp2='N/A';
         $pregtype2='N/A';
         }
     ?>
        <div style="position: absolute;top: 622px;left: 320px;"><?=$pregcomp1;?></div>
        <div style="position: absolute;top: 622px;left: 460px;"><?=$pregtype1;?></div>
        <div style="position: absolute;top: 642px;left: 320px;"><?=$pregcomp2;?></div>
        <div style="position: absolute;top: 642px;left: 460px;"><?=$pregtype2;?></div>
   
                     <?php
     if ($r_f_hi->BDES=='n'){
         echo '<div style="position: absolute;top: 685px;left: 482px;"><div class="foohi black"></div></div>'; 
            $bdes1='N/A';
            $bdes2='N/A';
     }
     elseif ($r_f_hi->BDES=='y'){
         echo '<div style="position: absolute;top: 685px;left: 432px;"><div class="foohi black"></div></div>'; 
            $bdes1=$r_f_hi->BDES1;
            $bdes2=$r_f_hi->BDES2;
         
     }
     ?>
        <div style="position: absolute;top: 730px;left: 320px;"><?=$bdes1;?></div>
        <div style="position: absolute;top: 750px;left: 320px;"><?=$bdes2;?></div>
</page>
 <?php
          }
?>