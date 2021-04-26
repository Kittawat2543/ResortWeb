<?php 
    include_once('../../../connect.php');


    header("Content-type: application/json; charset=utf-8"); 

        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $tel = $_POST['tel'];
        $DOB = $_POST['DOB'];
        $salary = floatval($_POST['salary']);
        $gender = $_POST['gender'];
        $job_position = $_POST['job_position'];
        

        $sql_username = "SELECT * FROM `Employee` WHERE `username` LIKE '".$username."' ";
        $sql_check = $conn->query($sql_username) or die($conn->error);

    


        if(!$sql_check->num_rows){
    
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $sql_create = "INSERT INTO `Employee` (`username`, `password`,`name`,`tel`,`dob`,`salary`,`gender`,`job_position`) 
                    VALUES ( '".$username."',
                            '".$hashed_password."',
                            '".$name."',
                            '".$tel."',
                            '".$DOB."',
                            '".$salary."',
                            '".$gender."',
                            '".$job_position."');";
                    
                    $result = $conn->query($sql_create) or die($conn->error);
                    

                    if($result){
                        echo json_encode(["status"=>true,"message"=>"Successfully register!"]);
        
                    }else{
                        echo json_encode(["status"=>false,"message"=>"System error, please contact developer"]);
                    }
                }
        
        
    
        header('Refresh:0; url= ../../index.php');


?>