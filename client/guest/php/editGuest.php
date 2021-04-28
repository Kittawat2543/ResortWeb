<?php 
    include_once('../../../connect.php');


    header("Content-type: application/json; charset=utf-8"); 

        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $id = $_POST['id'];

        $sql_username = "SELECT * FROM `Guest` WHERE `id` LIKE '".$id."' ";
        $sql_check = $conn->query($sql_username) or die($conn->error);

    


        if($sql_check->num_rows){
    
                    $sql_create = "UPDATE `Guest` SET `name` = '".$name."',`tel` = '".$tel."' WHERE `Guest`.`id` = '".$id."';";
                    
                    $result = $conn->query($sql_create) or die($conn->error);
                    

                    if($result){
                        echo json_encode(["status"=>true,"message"=>"Successfully Edit guest!"]);
        
                    }else{
                        echo json_encode(["status"=>false,"message"=>"System error, please contact developer"]);
                    }
                }else{
                    echo json_encode(["status"=>false,"message"=>"ไม่พบผู้ใช้งาน"]);
                }
        
        
    
        header('Refresh:0; url= ../../index.php');


?>