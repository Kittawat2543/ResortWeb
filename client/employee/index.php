<?php 
//  include_once('../../connect.php');
//  require_once('../authen.php');

//  $sql = "SELECT * FROM members WHERE `username` LIKE '".$_SESSION['username']."'";
//  $result = $conn->query($sql);
//  $row = $result->fetch_assoc();
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/MDB-Pro/css/mdb.min.css">
    <link rel="stylesheet" href="../../node_modules/FontAwesomePro/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<style>
    hr {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }
    .top-up {
        height: 50px;
        overflow: hidden;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }

    table,tr,td {
        
        border: 1px solid darkgrey;
        border-collapse: collapse;
        padding: 20px;
        width: 50%;    
        background-color: white;
        font-size: 30px;
    }

    th {
        padding: 20px;
       
    }

</style>

<body class="fixed-sn cyan-skin">

    <!-- Sidebar -->
    <?php require_once('../include/sidebar.php'); ?>
    <!--Main layout-->
    <main>
        <div class="container-fluid mb-5">
            <div class="card text-left">

              <div class="card-body">

              <p style="font-size:40px;">จัดการพนักงาน</p>
                <table style="width:100%">

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Tel</th> 
                        <th>Dob</th>
                        <th>Salary</th>
                        <th>Gender</th>
                        <th>Job</th>
                        
                    </tr>
                    
                    <tr>
                        <td>123456</td>
                        <td>Jill</td>
                        <td>056546123</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>123456</td>
                        <td>Eve</td>
                        <td>05216544</td>
                        <td>94</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>123456</td>
                        <td>John</td>
                        <td>0561649874</td>
                        <td>80</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>

                    
                </table>
                
                <button type="button" class="btn btn-danger">Edit</button>
                <button type="button" class="btn btn-success">Save</button>
              </div>
                
            </div>
            
        </div>
        
    </main>
    <!--/Main layout-->

    <!-- Footer -->
    <?php require_once('../include/footer.php');?>


    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../node_modules/MDB-Pro/js/mdb.min.js"></script>
    <script src="../../node_modules/mdbootstrap/js/addons/datatables.min.js"></script>
    <script src="../../node_modules/MDB-Pro/src/js/pro/sidenav.js"></script>
    <script src="../assets/js/sidebar.js"></script>
    <script src="../../assets/js/block-console.js"></script>
</body>

</html>