<style>
    #radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;
    }
</style>


<legend>Personal Information of Applicant</legend>
<div class="row">
    <div class="col-md-6 form-group">
        
<form class="form-horizontal" action="" method="POST">
<fieldset>

<!-- Form Name -->
<!-- Prepended text-->
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon">NID Number</span>
      <input id="prependedtext" name="nid" class="form-control" type="text" minlength="10" maxlength="17" required="required" value="8673583269">
    </div>
    
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon">Date of Birth</span>
      <input id="prependedtext" name="dob" class="form-control" type="date" required="required" value="1976-10-22">
    </div>
    
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon">Previous Policy With Pragati Life </span>
      <input id="prependedtext" name="policy" class="form-control" placeholder="Policy Number" type="text" value="013401741-7">
    </div>
    
  </div>
</div>
<!-- Prepended text-->
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon">ETIN Number</span>
      <input id="prependedtext" name="tin" class="form-control" type="text" minlength="10" maxlength="17" required="required" value="8217065518">
    </div>
    
  </div>
</div>


<?php
if ($_SESSION['prem_plan_name']['plan']=='109'){
echo'
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
              <span class="input-group-addon">Date Of Birth (Child)</span>
              <input id="prependedtext" name="chdob" class="form-control" type="date" required="required"  required value="2011-11-11">
            </div>
          </div>
        </div>';
}
?>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <div class="col-md-12"> 
      <label class="col-md-4 control-label" for="radios">SEX</label>
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="sex" id="radios-0" value="M" checked>
      Male
    </label> 
    <label class="radio-inline" for="radios-1">
        <input type="radio" name="sex" id="radios-1" value="F" required>
      Female
    </label> 

  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <div class="col-md-12">
      <input type="submit" name="submitpol" value="Submit" id="button1id" name="button1id" class="btn btn-success" style="width: 100%;">
  <!-- <input type="submit" name="skippol" value="Skip"  id="button2id" name="button2id" class="btn btn-danger"> -->
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
      <strong>Commencement Date : </strong><?= date_format(date_create($_SESSION['prem_plan_name']['date_com']),"d-M-Y");?>
</div>
  </div>
</div> 
    </div>
</div>

<?php 
$_SESSION['prem_plan_name']=array_merge($_POST,$_SESSION['prem_plan_name']);

if(isset($_POST['nid'])){
    $nidno=$_POST['nid'];
    if (strlen($nidno==10)){
            $this->db2 = $this->load->database('second', TRUE);
            $query_nid = "SELECT nideng FROM nidinfo where nid='$nidno'";
            $q_nid = $this->db2->query($query_nid);
            foreach ($q_nid->result() as $r_nid):
                $rr =$r_nid;
            endforeach;
            if (!isset($rr)){?>

                    <script type='text/javascript'>
                           function submitform()
                           {
                               feeds.submit();
                           }
                    </script>
                   <form name = 'feeds' action='https://plil.pragatilife.com/bangtrans/' method='post'>
                       <input type='hidden'  name='nid' value ='<?= $_POST['nid'];?>' />
                       <input type='hidden'  name='dob' value ='<?= $_POST['dob'];?>' />
                   </form>
                   <script>
                       window.onload = submitform;
                   </script>    

            <?php }
            else {
                if (($rr->nidbang)!='null'){
                    $_SESSION['nid']= get_object_vars(json_decode ($rr->nidbang));
                    header("Location: calprem");
                }
            }
    }
    else {
        header("Location: calprem");
    }
}



?>