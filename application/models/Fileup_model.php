<?php
class Fileup_model extends CI_Model {
    public function get_upfile($orgfile,$imgfolder) {
        if (isset ($orgfile)){
            $simagepath = $_SESSION['prem_plan_name']['WEBSEQ']."_".substr($orgfile['name'],-25);
            $source = $orgfile['tmp_name'];
            $target = "./asset/images/".$imgfolder."/".$simagepath;
            $type=$orgfile["type"];
            if($type=="image/jpeg" || $type=="image/jpg"||$type=="image/png" || $type=="image/gif"){
                move_uploaded_file($source, $target);
                list($width, $height) = getimagesize($target) ;
                $modwidth = 250;
                $diff = $width / $modwidth;
                $modheight = $height / $diff;   
                $tn = imagecreatetruecolor($modwidth, $modheight) ;
                $image = imagecreatefromjpeg($target) ;
                imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
                imagejpeg($tn, $target, 100) ;
            }
            else{
                $simagepath="unsuccessful.jpg";
            }
       }
       return $simagepath;
    }
}