<?php 
 include_once('../../connect.php');
 require_once('../authen.php');

 $employeeID = $_SESSION['employeeID'];

  include_once('../../connect.php');
 require_once('../authen.php');

 $sql = "SELECT * FROM Room WHERE status = 0";
 $result = mysqli_query($conn,$sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/MDB-Pro/css/mdb.min.css">
    <link rel="stylesheet" href="../../node_modules/FontAwesomePro/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/datatables.min.css" />


    <style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: .5em;
    }

    .dataTables_filter,
    .pagination {
        float: right;
    }

    .dataTables_empty,
    th,
    td {
        text-align: center;
    }

    .bord {
        background-color: tomato;
        color: white;
        border: 2px solid black;
        margin: 10px;
        padding: 20px;
    }
    </style>
</head>

<body class="fixed-sn cyan-skin">

    <!-- Sidebar -->
    <?php require_once('../include/sidebar.php'); ?>
    <!--Main layout-->
    <main>
        <div class="container-fluid mb-5">
            <p style="font-size:35px;">Room Booking</p>
            <div class="row">
                <?php while ($data = mysqli_fetch_array($result)) {
                    
                ?>
                <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4">
                    <!-- Card Narrower -->
                    <div class="card card-cascade narrower">

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Title -->
                            <h4 class="font-weight-bold card-title"><?php echo $data['roomID']?></h4>
                            <!-- Text -->
                            <p class="card-text">ประเภทของห้อง : <?php echo $data['roomType']?></p>
                            <p class="card-text">จำนวนคนเข้าพัก : <?php echo $data['person']?></p>

                            <!-- Button -->
                            <a class="btn btn-blue" href="booking.php?id=<?php echo $data['roomID']?>">จองห้อง</a>

                        </div>
                    </div>
                </div>
                <?php }?>






            </div>





        </div>
    </main>

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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/datatables.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="js/allJs.js"></script>
    <script src="../../assets/js/block-console.js"></script>

    <script>
    $('#dataTable').DataTable({
        "order": [0, 'asc'],
        "language": [{
            "emptyTable": `<div class="col-md-12 mt-5">
            <center style="opacity: 0.5;">
            <i class="fad fa-file-times" style="font-size: 100px; color:red;"></i>
            <p class="text-center">ไม่มีข้อมูลใบเสร็จ</p>
            </center>
        </div>`
        }],
    });

    $.fn.dataTable.ext.classes.sPageButton = 'button primary_button';
    </script>

</body>

</html>