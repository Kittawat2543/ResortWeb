<?php
    include_once('../../../connect.php');
    header("Content-type: application/json; charset=utf-8"); 
   
    $user_id = $_POST['id'];
    
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $gender = $_POST['gender'];
    $job_position = $_POST['job_position'];
    $salary = $_POST['salary'];
    
    // print_r($_POST);
        $sql = "UPDATE `Employee` SET 
                `name`= '".$name."',
                `tel`= '".$tel."',
                `salary`= '".$salary."',
                `gender`= '".$gender."',
                `job_position`= '".$job_position."' WHERE `employeeID` = '".$user_id."'";
        $query = $conn->query($sql) or die($conn->error);

        
        if($query){
            echo json_encode(["status"=>true,"message"=>"แก้ไขข้อมูลสำเร็จ !"]);

        }else{
            echo json_encode(["status"=>false,"message"=>"แก้ไขข้อมูลไม่สำเร็จ !"]);

        }

?>