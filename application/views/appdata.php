<?php
if (isset($_SESSION['fprint'])){
    header("location:formbody");
}
else{
       if (isset($_POST['submitpropnom'])){
            for ($x = 1; $x <= $_SESSION['prem_plan_name']['nom_num']; $x++) {
                $_POST['NOMPHOTO'.$x]=$this->fileup_model->get_upfile($_FILES['NOMPHOTO'.$x],'nomphoto');
                $_POST['NOMIDF'.$x]=$this->fileup_model->get_upfile($_FILES['NOMIDF'.$x],'nomid');
            }
            for ($y = 0; $y <count($_FILES['UPFILE']['name']); $y++) {
                $_FILES['oth'.$y]=array(
                    "name"=>$_FILES['UPFILE']['name'][$y],
                    "type"=>$_FILES['UPFILE']['type'][$y],
                    "tmp_name"=>$_FILES['UPFILE']['tmp_name'][$y],
                    "error"=>$_FILES['UPFILE']['error'][$y],
                    "size"=>$_FILES['UPFILE']['size'][$y]
                        );
                $_POST['oth'.$y]=$this->fileup_model->get_upfile($_FILES['oth'.$y],'other');
            }
            $_SESSION['prem_plan_name']=array_merge($_POST,$_SESSION['prem_plan_name']);
        }
            
                $this->appdata_model->get_appdata();
            unset ($_SESSION['nid']);
            unset ($_SESSION['policy']);
            if ($_SESSION['prem_plan_name']['plan']=='213'||$_SESSION['prem_plan_name']['plan']=='212'){
                if ($_SESSION['prem_plan_name']['hipl']==0){
               header("location:formbody");
                    }
                    else{
                        header("location:formhiin");
                    }
               }  
               if ($_SESSION['prem_plan_name']['plan']=='501'){
                   header("location:mchecklist");
               }  
               if ($_SESSION['prem_plan_name']['plan']=='109'){
                   header("location:childprotection");
               } 
               if ($_SESSION['prem_plan_name']['plan']=='108'){
                   header("location:formbody");
               } 
}
?>