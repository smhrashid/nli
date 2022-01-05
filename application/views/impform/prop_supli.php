<?php

        if (isset($_SESSION['prem_plan_name']['prem'])){
    $m_term=$_SESSION['prem_plan_name']['term'];
    $m_age= $_SESSION['prem_plan_name']['AGE'];
    $m_premium=$_SESSION['prem_plan_name']['prem'];
    $pp=$_SESSION['prem_plan_name']['plan'];

       $query_bas_sum="SELECT BILLAL.F_SUMMASS('$pp' ,'5' ,TO_CHAR($m_term, 'FM00'),'$m_age' ,'$m_premium') sumass FROM dual";
       $q_bas_sum = $this->db->query($query_bas_sum);
                foreach ($q_bas_sum->result() as $r_bas_sum){
                    $ss=$r_bas_sum->SUMASS; 
                }
                $_SESSION['prem_plan_name']['sumass']=$ss;
} 
else if (isset($_SESSION['prem_plan_name']['sumass'])){
    $ss=$_SESSION['prem_plan_name']['sumass'];
}
        
        if ($ss>=1000000){
            $mm_sumass=1000000;
            
        }
        else {
            $mm_sumass=$ss;
        }
        ?>
<style>

.box{ display: none; }
    #radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;
    }
</style>
<legend>Supplementary & Mode of Payment</legend>

<div class="row">
    <div class="col-md-6 form-group">
<form action="premcal" class="form-horizontal" method="post" >
    <fieldset>

<?php

 if ($_SESSION['prem_plan_name']['plan']!='109'&&$_SESSION['prem_plan_name']['plan']!='212'){    ?>
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group"> 
        <label>Supplementary  Insurance </label><br>
        <label><input type="radio" name="supli" id="supli_watch" value="1"/>  Permanent Disability Accidental Benefit (PDAB) </label><br>
        <label><input type="radio" name="supli" id="supli_watch"  value="2" /> Accidental Death Benefit (ADB) </label><br>
        <label><input type="radio" name="supli" value="0" checked /> Not Required </label>
    </div>
  </div>
</div>
<div class="preg box" id="supli_show">
    <div class="form-group">
        <div class="col-md-12">
            <div class="input-group">
              <span class="input-group-addon">Supplementary Sum Assured</span>
              <input type="number" value="<?=$mm_sumass;?>" class="form-control" name="S_SUMASS" max="<?=$mm_sumass;?>">
          </div>
        </div>
    </div>
 </div>
<script>
	$(document).ready(function() {
	   $('input[name="supli"]').click(function() {
		   if($(this).attr('id') == 'supli_watch') { $('#supli_show').show(500); }
		   else { $('#supli_show').hide(500); }
	   });            
	});      

</script>

<?php
 }          
 if ($_SESSION['prem_plan_name']['plan']=='213'||$_SESSION['prem_plan_name']['plan']=='212'){               
           //     $ss=300000;
      if(($ss/2)>1000000){
            $ciss=1000000;
        }
        else{
            $ciss=$ss/2;
        }
            if($ss>=200000 && $ss<300000 ){
        $hi_in='
                <label class="radio-inline"><input type="radio" value=45000 name="hipl" id="hipl_watch">Economy (45000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=0 name="hipl" checked>Not Required </label>';
        
      }
    else if($ss>=300000 && $ss<450000 ){
        $hi_in='
                <label class="radio-inline"><input type="radio" value=45000 name="hipl" id="hipl_watch">Economy (45000 BDT)</label>
                <label class="radio-inline"><input type="radio" value=75000  name="hipl" id="hipl_watch">Executive (75000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=0 id="econ" name="hipl" checked>Not Required </label>';
      }
     else if($ss>=450000 && $ss<550000 ){
        $hi_in='
                <label class="radio-inline"><input type="radio" value=45000 name="hipl" id="hipl_watch">Economy (45000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=75000 name="hipl" id="hipl_watch">Executive (75000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=100000 name="hipl" id="hipl_watch">Corporate (100000 BDT)</label><label class="radio-inline"><input type="radio" value=0 id="econ" name="hipl" >Not Required </label>
                <label class="radio-inline"><input type="radio" value=0 name="hipl" checked>Not Required </label>';
      }
    else if($ss>=550000 ){
        $hi_in='
                <label class="radio-inline"><input type="radio" value=45000 name="hipl" id="hipl_watch">Economy (45000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=75000 name="hipl" id="hipl_watch">Executive (75000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=100000 name="hipl" id="hipl_watch">Corporate (100000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=150000 name="hipl" id="hipl_watch">Corporate+ (150000 BDT)</label><br>
                <label class="radio-inline"><input type="radio" value=0 name="hipl" checked>Not Required </label>';
      }
      else{
          $hi_in='';
      }

        ?>
    <div class="row">
        <?php  if ($_SESSION['prem_plan_name']['plan']!='212'){ ?>
        <div class="form-group">
  <div class="col-md-12">
      <label control-label" for="checkboxes">Critical Illness Insurance</label>
    <div class="input-group">
            <label class="checkbox-inline" for="checkboxes-0">
                <input type="checkbox" name="cichk" id="checkboxes-0" value="1">
                CI For BDT <?=$ciss;?>
                <input type="hidden" name="ciss" id="checkboxes-0" value="<?=$ciss;?>">
            </label>
        </div></div></div>
        <?php }?>
        <div class="form-group">
            
  <div class="col-md-12">
      <label control-label" for="checkboxes">Hospital Insurance</label>
    <div class="input-group">
            <?=$hi_in;?>
        </div></div></div>
        <?php if($ss>=200000){?>
        <div class="preg box" id="hipl_show">
            <label control-label" for="checkboxes">Insurance for</label>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="input-group">  
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Spouse</th>
                                    <th>Children 1</th>
                                    <th>Children 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input id="prependedtext" name="spdob" class="form-control" placeholder="placeholder" type="date">
                                    </td>
                                    <td>
                                        <input id="prependedtext" name="fcdob" class="form-control" placeholder="placeholder" type="date">
                                    </td>
                                    <td>
                                        <input id="prependedtext" name="scdob" class="form-control" placeholder="placeholder" type="date">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
	$(document).ready(function() {
            
         
	   $('input[name="hipl"]').click(function() {
		   if($(this).attr('id') == 'hipl_watch') { $('#hipl_show').show(500); }
		   else { $('#hipl_show').hide(500); }
	   });
	});      

</script>
        <?php }?>
    </div>
<input name="sumass" type="hidden" value="<?=$ss;?>">
 <?php
  }
    if ($_SESSION['prem_plan_name']['plan']=='212'){
          echo
           '<div class="form-group">
  <div class="col-md-12">
    <div class="input-group"><div><label>Mode of Payment </label></div>
               <label><input type="radio" name="paymode" value="5" required/>  Monthly  </label>&nbsp;
               <label><input type="radio" name="paymode" value="0" required/>  Signal    </label>
           </div></div></div>';
       }
       else if ($_SESSION['prem_plan_name']['plan']=='213'){
                     echo
           '<input type="hidden" name="paymode" value="5"/>';
       }
       else if($_SESSION['prem_plan_name']['plan']=='109'){
                      echo
           '<div class="form-group">
  <div class="col-md-12">
    <div class="input-group"><div><label>Mode of Payment </label></div>
               <label><input type="radio" name="paymode" value="4" required/>  Quarterly </label>&nbsp;
               <label><input type="radio" name="paymode" value="2" required/>  Half Yearly   </label>&nbsp;
               <label><input type="radio" name="paymode" value="1" required/>  Yearly   </label>&nbsp;
               <label><input type="radio" name="paymode" value="0" required/>  Signal    </label>
           </div></div></div>';
       }
   else{
           echo
           '<div class="form-group">
  <div class="col-md-12">
    <div class="input-group"><div><label>Mode of Payment </label></div>
               <label><input type="radio" name="paymode" value="5" required/>  Monthly  </label>&nbsp;
               <label><input type="radio" name="paymode" value="4" required/>  Quarterly </label>&nbsp;
               <label><input type="radio" name="paymode" value="2" required/>  Half Yearly   </label>&nbsp;
               <label><input type="radio" name="paymode" value="1" required/>  Yearly   </label>&nbsp;
               <label><input type="radio" name="paymode" value="0" required/>  Signal    </label>
           </div></div></div>';

       }

       ?>

<div class="form-group">
  <div class="col-md-12">
    <input type="submit" name="submitpropnom" value="Submit" id="button1id" name="button1id" class="btn btn-success" style="width: 100%;">
  </div>
</div>  

</fieldset>
</form>
        </div>
    <div class="col-md-6 form-group">
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
      <strong>Commencement Date : </strong><?= date_format(date_create($_SESSION['prem_plan_name']['date_com']),"M j, Y");?>
</div>
  </div>
</div> 
   <div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Date of Burth : </strong><?= date_format(date_create($_SESSION['prem_plan_name']['dob']),"M j, Y");;?>
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
 <?php 
 if ($_SESSION['prem_plan_name']['plan']=='108'){?>
             
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Yearly Pension : </strong><?= $_SESSION['prem_plan_name']['apu'];?> BDT
</div>
  </div>
</div>
                     
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Sum at Risk : </strong><?= $_SESSION['prem_plan_name']['sumass'];?> BDT
</div>
  </div>
</div>
<?php    
 }
 ?>

 <?php 
 if ($_SESSION['prem_plan_name']['plan']=='109'){?>
             
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Number of Unit : </strong><?= $_SESSION['prem_plan_name']['apu'];?> UNIT
</div>
  </div>
</div>
                     
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Sum at Risk : </strong><?= $_SESSION['prem_plan_name']['sumass'];?> BDT
</div>
  </div>
</div>
<?php    
 }
 ?>        
 
 <?php 
 if ($_SESSION['prem_plan_name']['plan']=='212'||$_SESSION['prem_plan_name']['plan']=='213'){?>
             
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Sum Assured : </strong><?= $_SESSION['prem_plan_name']['sumass'];?> BDT
</div>
  </div>
</div>
 <?php 
 if (isset($_SESSION['prem_plan_name']['prem'])){
 ?>                   
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Life Premium : </strong><?= $_SESSION['prem_plan_name']['prem'];?> BDT
</div>
  </div>
</div>
<?php    
 }}
 ?>    
    </div>
    </div>
        
