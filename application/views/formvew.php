<?php
//if(isset($_POST['subpropsearch'])){
unset($_SESSION['fprint']);
    $propno='0134210000744';
    $query_se = "select PLAN,WEBPROPOSAL_NO WEBSEQ from ipl.WEBPROPOSAL where PROPNO='$propno'";
         $q_se  = $this->db->query($query_se);
        foreach ($q_se->result() as $r_se){
              $_SESSION['fprint'] = array(
                                    "PLAN"=>$r_se->PLAN,
                                    "WEBSEQ"=>$r_se->WEBSEQ,
                                    "PROPNO"=>$propno
                      );
       }
  print_r($inchar);
//}

?>