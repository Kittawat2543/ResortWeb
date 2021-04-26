<?php
 include_once('../connect.php');
header( "location: dashboard/index.php" );
 if($_SESSION['employeeID']){
  
   header( "location: dashboard/index.php" );
   exit(0);
 }else{
    header( "location: ../index.php" );
    exit(0);
 }

?>