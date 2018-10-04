<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/19/2018
 * Time: 10:28 PM
 */

$username = $_POST['uname'];
$password = $_POST['pswrd'];
session_start();
if(($username=="admin") && ($password=="admin"))
{
    $cookie_name = "admin";
    $cookie_value =session_id();
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie is not set";
    } else {
            $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
            $_SESSION['cookie_value'] =$cookie_value;
            
        echo "<script> location.href='main.php'; </script>";
    }
}
else
{
    echo 'Your not in';
}
