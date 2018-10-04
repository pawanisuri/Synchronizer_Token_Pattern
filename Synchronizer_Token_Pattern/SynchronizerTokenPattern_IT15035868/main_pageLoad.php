<?php
session_start();
$sid=session_id();
// echo $sid;
if(isset($_SESSION['csrf_token'])&&($_SESSION['cookie_value'])==$sid){
    echo ($_SESSION['csrf_token']);    
}else{
    echo 'Token Error';
}

?>
