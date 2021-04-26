<?php
require_once('../authen_verify.php');
if(!$_SESSION['employeeID']){
    header('Location: ../../index.php');
}


?>