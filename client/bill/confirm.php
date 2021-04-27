<?php
 include_once('../../connect.php');
 require_once('../authen.php');


include_once('../../connect.php');
require_once('../authen.php');


$id = $_GET['id'];
$sql = "SELECT transactionID FROM Payment WHERE paymentID = '".$id."'";
$result_trans = $conn->query($sql) or die($conn->error);
$data = mysqli_fetch_array($result_trans);

$transactionID = $data['transactionID'];

$sql_update_payment = "UPDATE `Payment` SET `status` = '1' WHERE `Payment`.`paymentID` = '".$id."';";
$result_update_payment = $conn->query($sql_update_payment) or die($conn->error);


$sql_update_transaction = "UPDATE `Transactions` SET `status` = '1' WHERE `Transactions`.`transactionID` = '".$transactionID."';";
$result_update_transaction = $conn->query($sql_update_transaction) or die($conn->error);

if($sql_update_transaction == True && $result_update_transaction){
    alert("อัพเดท การชำระเงินสำเร็จ");
}else{
    alert("อัพเดท การชำระเงิน ไม่สำเร็จ");
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
    header( "location: index.php" );
    exit(0);
}

?>
