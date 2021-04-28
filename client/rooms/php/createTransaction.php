<?php
    include_once('../../../connect.php');


    header("Content-type: application/json; charset=utf-8"); 

    $empID = $_SESSION['employeeID'];
    $room_id = $_POST['room_id'];
    $guestID = $_POST['guestID'];
    $status = false;
    $date = date("Y-m-d");
    $transacID = rand(0,99999999) * 999999;

    $sql_guest = "SELECT * FROM `Guest` WHERE `id` LIKE '".$guestID."' ";
    $sql_check = $conn->query($sql_guest) or die($conn->error);

    if($sql_check->num_rows){
         $sql_create = "INSERT INTO `Transactions` (`transactionID`,`roomID`,`employeeID`,`guestID`,`check_in`,`status`)
                        VALUES(
                            '".$transacID."',
                            '".$room_id."',
                            '".$empID."',
                            '".$guestID."',
                            '".$date."',
                            '".$status."')";
        $update = "UPDATE `Room` SET `status` = '1' WHERE `Room`.`roomID` = '".$room_id."';";
        $ud = $conn->query($update) or die($conn->error);
        $result = $conn->query($sql_create) or die($conn->error);
        if($result){
            echo json_encode(["status"=>true,"message"=>"Successfully create!"]);
        }else{
            echo json_encode(["status"=>false,"message"=>"Create Room Fail!"]);
        }

    }else{
        echo json_encode(["status"=>false,"message"=>"ไม่พบ GuestID!"]);
    }

   

    header('Refresh:0; url= ../../index.php');

?>