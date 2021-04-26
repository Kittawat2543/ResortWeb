<?php
    include_once('../../../connect.php');


    header("Content-type: application/json; charset=utf-8"); 

    $room_number = $_POST['room_number'];
    $type = $_POST['type'];
    $person = $_POST['person'];
    $price = floatval($_POST['price']);
    $status = false;

    $sql_roomNum = "SELECT * FROM `Room` WHERE `roomID` LIKE '".$room_number."' ";
    $sql_check = $conn->query($sql_roomNum) or die($conn->error);
    
    if(!$sql_check->num_rows){
        $sql_create = "INSERT INTO `Room` (`roomID`,`roomType`,`person`,`price`,`status`)
                        VALUES('".$room_number."',
                            '".$type."',
                            '".$person."',
                            '".$price."',
                            '".$status."')";

        $result = $conn->query($sql_create) or die($conn->error);
        if($result){
            echo json_encode(["status"=>true,"message"=>"Successfully create!"]);
        }else{
            echo json_encode(["status"=>false,"message"=>"Create Room Fail!"]);
        }
    }else{
        echo json_encode(["status"=>false,"message"=>"Room ID ซ้ำ!"]);
    }

    header('Refresh:0; url= ../../index.php');

?>