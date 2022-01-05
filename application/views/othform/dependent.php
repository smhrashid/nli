<?php
    for($i = 0; $i < count($_SESSION['ch']); $i++){
        $cell = $_SESSION['ch'][$i];
        $nc[]=array("NAME"=>$cell->NAME,"DOB"=>$cell->DOB,"REL"=>$cell->REL,"HIGHT"=>$cell->HIGHT,"WEIGHT"=>$cell->DWEIGHT,"CHEAST"=>$cell->CHEAST);
    }
   for($i = 0; $i < count($_SESSION['aud'])+1; $i++){
        $cell = $_SESSION['aud'][$i];
        if ($cell->REL<>'Self'){
            $na[]=array("NAME"=>$cell->NAME,"DOB"=>$cell->DOB,"REL"=>$cell->REL,"HIGHT"=>$cell->HIGHT,"WEIGHT"=>$cell->DWEIGHT,"CHEAST"=>$cell->CHEAST);
        }
    } 
   $ba=array_merge($nc,$na);     
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
    <img src="<?php echo base_url();?>asset/images/dependent.jpg"style="height: 29.7cm; width: 21cm">
    <div style="position: absolute;top: 370px;left: 80px;">
     <table>
    <?php    
    for($i = 0; $i < count($ba)-1; $i++){
        
        if($ba[$i]['REL']==1){
            $rel='Spouse';
        }
        if($ba[$i]['REL']==2){
            $rel='Father';
        }        
        if($ba[$i]['REL']==3){
            $rel='Mother';
        }        
        if($ba[$i]['REL']==4){
            $rel='Son';
        }        
        if($ba[$i]['REL']==5){
            $rel='Daughter';
        }        
       
       echo '
            <tr>
              <td width="55">'.($i+1).'</td>
              <td  width="200">'.$ba[$i]['NAME'].'</td>
              <td>'. date_format(date_create($ba[$i]['DOB']),"d-M-Y").'</td>
              <td width="80">'. $rel.'</td>
              <td width="80">'. str_replace("i","″",str_replace("f","′",$ba[$i]['HIGHT'])).'</td>
              <td  width="70">'.$ba[$i]['WEIGHT'].' KG</td>
              <td>'.$ba[$i]['CHEAST'].' ″</td>
            </tr>
';

          
    }
    
    ?>
         </table>
 </div>   
</page>