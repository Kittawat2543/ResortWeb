<?php 
    include_once('../../../connect.php');


    header("Content-type: application/json; charset=utf-8"); 
        $ID = rand(0,99999999) * 999999;
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        

        $sql_guest = "SELECT * FROM `Guest` WHERE `tel` LIKE '".$tel."' ";
        $sql_check = $conn->query($sql_guest) or die($conn->error);

    
        if(!$sql_check->num_rows){
            
                    $sql_create = "INSERT INTO `Guest` (`id`,`name`, `tel`) 
                    VALUES ('".$ID."',
                            '".$name."',
                            '".$tel."');";
                    
                    $result = $conn->query($sql_create) or die($conn->error);
                    

                    if($result){
                        echo json_encode(["status"=>true,"message"=>"Successfully add guest!"]);
        
                    }else{
                        echo json_encode(["status"=>false,"message"=>"System error, please contact developer"]);
                    }
                }else{
                    echo json_encode(["status"=>false,"message"=>"เบอร์โทรศัพท์ซ้ำ"]);
                }
        
        
    
        header('Refresh:0; url= ../../index.php');


?>