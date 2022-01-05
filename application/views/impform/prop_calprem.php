<?php
 $_SESSION['prem_plan_name']['AGE']=$this->prevpolicy_model->get_age($_SESSION['prem_plan_name']['dob']);
$m_age=$_SESSION['prem_plan_name']['AGE'];
$niddeco=json_decode ($_SESSION['prem_plan_name']['nidinfo'],true);
?>
<style>
    #radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;

</style>
<legend>Information for Calculate Insurance Premiums</legend>
<div class="row">
    <div class="col-md-5 form-group">
<form action="supli" method="POST" class="form-horizontal" >
    <fieldset>
      <?php 
      if ($_SESSION['prem_plan_name']['plan']!='501'){   
?>  
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
              <span class="input-group-addon">Occupation</span>
                <select name="OCCUP" class="form-control" required>
                    <option value="" disabled selected>Select Occupation</option>
                                  <?php 
                                  $query_ocup = "SELECT * FROM ipl.OCCUP where occup IN (3,12,14,55,58,59,60,61,62,63,64,76,79,90,95,96) order by occup asc";
                                  $q_ocup = $this->db->query($query_ocup);
                                  foreach ($q_ocup->result() as $r_ocup):
                                      $asd=$r_ocup->OCCUP;
                                      echo '<option value='.$asd.'>'.$r_ocup->OCCUPNAME.'</option>';
                                  endforeach;
                                  ?>
                </select>
            </div>
          </div>
        </div>
        
<div style="font-size:min(2.75vw, 14px);">
   <?php 

 if ($_SESSION['prem_plan_name']['plan']=='212'){   

        if ($m_age<=50){
            echo '
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="input-group">
                    <label>Term </label> 
                    <label><input type="radio" name="term" value="10" required checked/> 10 Year  </label>
                    <label><input type="radio" name="term" value="15"/> 15 Year   </label>
                </div></div></div>';
        }
        else{
                  echo'
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
                       <span class="input-group-addon">Term </span> 
                       <input type="number"  class="form-control" name="term" value="10" readonly>
                       </div>
                   </div></div>';
        }
        if($m_age>45){
             echo '
        <div class="form-group">
          <div class="col-md-12">
          <div class="input-group">
                    <span class="input-group-addon">Premium </span> 
                    <input type="number"  class="form-control" name="prem" required  value="6000">
                    </div>
                </div></div>';
        }
        else{
                 echo '
            <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
        <span class="input-group-addon">Sum Assured </span> 
        <input type="number"  class="form-control" name="sumass" required value="500000">
        </div>
    </div></div>';
        }
 }
 else if ($_SESSION['prem_plan_name']['plan']=='213'){  ?>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
        <span class="input-group-addon">Term </span> 
         
              <select name="term" class="form-control" required>
                  <option value="" disabled selected>Select Term</option>
                                <?php 
                                $pp=$_SESSION['prem_plan_name']['plan'];
                                $query_ocup = "select distinct(term) from IPL.RATE where plan='213' and  AGE='$m_age' and term <>'00' order by term asc";
                                $q_ocup = $this->db->query($query_ocup);
                                foreach ($q_ocup->result() as $r_ocup):
                                    $asd=$r_ocup->TERM;
                                    echo '<option value='.$asd.'>'.$asd.' Year</option>';
                                endforeach;
                                ?>
              </select>
        </div> </div>
    </div>
    <?php
 echo '
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
        <span class="input-group-addon">Premium </span> 
        <input type="number"  class="form-control" name="prem" required value="6000">
        </div> </div>
    </div>';
 }
 else {
     if($_SESSION['prem_plan_name']['plan']=='109'){
        $cdob=$_SESSION['prem_plan_name']['chdob'];
        $c_age=$this->prevpolicy_model->get_age($cdob);
        $ddd= 14-($c_age-1);
               echo'
                    <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
                       <span class="input-group-addon">Term </span> 
                       <input type="number"  class="form-control" name="term" value="'.$ddd.'" readonly>
                       </div>
                   </div> </div>';
     }
     else {
     ?>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
        <span class="input-group-addon">Term </span> 
        
 
              <select name="term" class="form-control" required>
                  <option value="" disabled selected>Select Term</option>
                                <?php 
                               // $this->db = $this->load->database('second', TRUE);
                                $pp=$_SESSION['prem_plan_name']['plan'];
                                $query_ocup = "select distinct(term) from IPL.RATE where plan='$pp' and  AGE='$m_age' and term <>'00' order by term asc";
                                $q_ocup = $this->db->query($query_ocup);
                                foreach ($q_ocup->result() as $r_ocup):
                                    $asd=$r_ocup->TERM;
                                    echo '<option value='.$asd.'>'.$asd.' Year</option>';
                                endforeach;
                                ?>
              </select>
        </div>
    </div> </div>
    <?php  
     }
   if($_SESSION['prem_plan_name']['plan']=='108'){?>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Yearly Pension  </span> 
                <input type="number"  class="form-control" name="apu" onChange="myChangeFunction(this)" required value="100000">

               </div>
           </div></div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
               <span class="input-group-addon">Sum at Risk (Maximum 10 times of annual pension) </span> 
               <input type="number"  class="form-control" name="sumass" id="mysumass" value="100000">
               </div>
           </div>
       </div>

            <script type="text/javascript">
              function myChangeFunction(apu) {
                var sumass = document.getElementById('mysumass');
                sumass.value = (apu.value)*10;
                    sumass.max = (apu.value)*10;
              }
            </script>
         <?php
     }
     else if($_SESSION['prem_plan_name']['plan']=='109'){?>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Number of Unit</span> 
               <input type="number"  class="form-control" name="apu" onChange="myChangeFunction(this)" required value="10">

               </div>
           </div></div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
               <span class="input-group-addon">Sum Assured</span> 
               <input type="number"  class="form-control" name="sumass" id="mysumass" value="50000">
               </div>
           </div>
  </div>
    
            <script type="text/javascript">
              function myChangeFunction(apu) {
                var sumass = document.getElementById('mysumass');
                var price = (apu.value)*20000;
                if (price > 499999) {
                    var nprice = 500000;
                  } else {
                    var nprice = price;
                  }
                sumass.value = nprice;
                sumass.max = nprice;
              }
            </script>
         <?php
     }
 }
      }
      else {?>
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
        <div class="radio">
            <label for="radios-0">
                <input type="radio" name="esmopt" id="radios-0" value="1" required checked>
                <span style='font-size:12.0pt;line-height:115%'>Option -1</span>
            </u>
            </b>
            <span style='font-size:12.0pt;line-height:115%'> : Life & Hospitalization Cover =<strong> BDT 5, 00,000</strong></span>
            </label>
        </div>
        <div class="radio">
            <label for="radios-1">
                <input type="radio" name="esmopt" id="radios-1" value="2" required>
                <span style='font-size:12.0pt;line-height:115%'>Option -2</span></u></b><span style='font-size:12.0pt;line-height:115%'> : Life & Hospitalization Cover =<strong> BDT 10, 00,000</strong></span>
                </label>
        </div>
    </div>
  </div>
</div>
            
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon">Number of applicant</span>
      <input id="prependedtext" name="numapp" class="form-control" type="number" minlength="10" maxlength="10" value="3">
    </div>
    
  </div>
</div>


    <?php  }
   ?> 
<div class="form-group">
  <div class="col-md-12">
    <input type="submit" name="submitprop" value="Submit" id="button1id" name="button1id" class="btn btn-success" style="width: 100%;">
  </div>
</div>
   
</fieldset>
</form>
    </div>
    <div class="col-md-4 form-group">
        <h4 class="mb-5">Application Relevant Information</h4>
        
        
  <div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Name : </strong><?= $niddeco['Name(English)'];?>
</div>
  </div>
</div>      
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
      <strong>Commencement Date : </strong><?= date_format(date_create($_SESSION['prem_plan_name']['date_com']),"d-M-Y");?>
</div>
  </div>
</div> 
   <div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Date of Birth : </strong><?= date_format(date_create($_SESSION['prem_plan_name']['dob']),"d-M-Y");;?>
</div>
  </div>
</div>           
<div class="form-group">
  <div class="col-md-12"> 
    <div class="input-group">
      <strong>Age on Commencement Date : </strong><?= $_SESSION['prem_plan_name']['AGE'];?>
</div>
  </div>
</div> 
    </div>
      <div class="col-md-3 form-group">
          <img src="https://plil.pragatilife.com/mnt_nid/<?= $_SESSION['prem_plan_name']['nid'];?>.jpg" width="150" height="200">
      </div>  
        
        </div>
