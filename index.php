<?php
// by yellowface

include 'core/settings.php';
//include 'core/common.php';

$type = $_GET["type"];

if(empty($type)){
    include 'core/common.php';
}else{
    if($type == "api"){
        include 'core/api.php';
    }else{
        include 'core/common.php';
    }
}




?>