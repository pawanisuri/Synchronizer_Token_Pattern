<?php
    session_start();
    // echo $_SESSION['csrf_token'];
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
        echo '<script language="javascript">';
        echo 'alert("Successfully ")';
        echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Not successful")';
            echo '</script>';
        }
        echo "<script> location.href='main.php'; </script>";
  
?>