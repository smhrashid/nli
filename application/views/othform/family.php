

<style>

.box{ display: none; }
    #radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;
    }
</style>
<legend>Family Information</legend>

<div class="row">
    <div class="col-md-7 form-group">
<form action="premcal" class="form-horizontal" method="post" >
    <fieldset>



<div class="form-group">
  <div class="col-md-12">
        <table class="table table-condensed">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Relation</th>
        <th>Date of Birth</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        for ($x = 1; $x <= $_SESSION['prem_plan_name']['numapp']; $x++) {
        ?>
      <tr>
        <td><?=$x;?></td>
        <td>
        <input id="prependedtext" name="depname<?=$x;?>" class="form-control" type="text" style="width: 300px;" required value="depname<?=$x;?>">
        </td>
        <td>
            <select name="deprel<?=$x;?>"  class="form-control" required style="max-width: 155px;">
                <option disabled selected>Choose an Option</option>
                <option value="1">স্বামী/স্ত্রী</option>
                <option value="2">পিতা</option>
                <option value="3">মাতা </option>
                <option value="4" selected>পুত্র</option>
                <option value="5">কন্যা</option>
            </select>
        </td>
        <td>
            <input id="prependedtext" name="depdob<?=$x;?>" class="form-control"  type="date" style="max-width: 152px;" required value="2011-11-11">
        </td>
      </tr>
        <?php }?>
    </tbody>
  </table>
  </div>
</div>  
<div class="form-group">
  <div class="col-md-12">
    <input type="submit" name="submitpropnom" value="Submit" id="button1id" name="button1id" class="btn btn-success" style="width: 100%;">
  </div>
</div>  

</fieldset>
</form>
        </div>
    <div class="col-md-5 form-group">
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
      $c_om=12;
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
        
