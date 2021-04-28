<?php
    include_once('../../../connect.php');


    header("Content-type: application/json; charset=utf-8"); 

    $transactionID = $_POST['transactionID'];
    $date = $_POST['date_checkout'];
    $status = false;

    $sql = "SELECT * FROM `Transactions` WHERE `transactionID` LIKE '".$transactionID."'";
    $sql_check = $conn->query($sql) or die($conn->error);
    $data = mysqli_fetch_array($sql_check);

    $roomID = $data['roomID'];

    $room = "SELECT * FROM Room WHERE roomID LIKE '".$roomID."'";
    $rerult_room = $conn->query($room) or die($conn->error);
    $data_room = mysqli_fetch_array($rerult_room);
    
    $check_in = $data['check_in'];
    $price = doubleval($data_room['price']);
    $type = $data_room['roomType'];

    $date_beet = CalDate($check_in,$date);
    $sum_price = intval($date_beet) * $price;


   $payID = rand(0,99999999) * 999999;
    
    if($sql_check->num_rows){

            $checkout = "UPDATE `Transactions` SET `check_out` = '".$date."' WHERE `Transactions`.`transactionID` = '".$transactionID."';";
            
            $result_check_out = $conn->query($checkout) or die($conn->error);
            $sql_room = "UPDATE `Room` SET `status` = '0' WHERE `Room`.`roomID` = '".$roomID."';";
            $result = $conn->query($sql_room) or die($conn->error);

            $payment = "INSERT INTO `Payment` (`paymentID`, `transactionID`, `room_price`, `total_bill`, `status`) 
                        VALUES ('".$payID."', '".$transactionID."', '".$price."', '".$sum_price ."', '0');";
            $result_payment = $conn->query($payment) or die($conn->error);

        if($result_check_out == True && $result_payment == True){
            echo json_encode(["status"=>true,"message"=>"Successfully create!"]);
        }else{
            echo json_encode(["status"=>false,"message"=>"Update check-out fail Fail!"]);
        }
    }else{
        echo json_encode(["status"=>false,"message"=>"ไม่พบหมายเลข Transaction!"]);
    }

    header('Refresh:0; url= ../../index.php');


    function CalDate($time1,$time2){
        
        $time1=strtotime($time1);
        $time2=strtotime($time2);
        
        
        $distanceInSeconds = round(abs($time2 - $time1));
        $distanceInMinutes = round($distanceInSeconds / 60); 
        
        $days = floor(abs($distanceInMinutes / 1440)); 
        $hours = floor(fmod($distanceInMinutes, 1440)/60); 
        $minutes = floor(fmod($distanceInMinutes, 60));
        
        return $days;
 }

?>