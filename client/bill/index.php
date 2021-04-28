<?php 
 include_once('../../connect.php');
 require_once('../authen.php');


include_once('../../connect.php');
require_once('../authen.php');

 $sql = "SELECT * FROM Payment INNER JOIN Transactions ON Payment.transactionID = Transactions.transactionID ORDER BY Transactions.transaction_date ASC";
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

    .switch label input[type="checkbox"]:checked+.lever {
        background-color: #a5d6a7;
    }

    .switch label input[type="checkbox"]:checked+.lever:after {
        left: 1.5rem;
        background-color: rgba(76, 175, 80, 0.7);
    }

    @media only screen and (max-width: 767px) {

        .dataTables_filter,
        .pagination {
            float: left;
        }
    }
    </style>
</head>

<body class="fixed-sn cyan-skin">

    <!-- Sidebar -->
    <?php require_once('../include/sidebar.php'); ?>
    <!--Main layout-->
    <main>
        <div class="container-fluid mb-5">
            <div class="card text-left">
                <div class="card-body">
                    <h1 style="text-align:ceter">Bill</h1>

                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Payment ID</th>
                                <th scope="col">transactionID</th>
                                <th scope="col">RoomID</th>
                                <th scope="col">GuestID</th>
                                <th scope="col">Total Bill</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            </tr>
                            <?php while ($data = mysqli_fetch_array($result)) {
                                // print_r($data);
                                    ?>
                            <tr>
                                <td><?php echo $data[0]; ?></td>
                                <td><?php echo $data['transactionID']; ?></td>
                                <td><?php echo $data['roomID']; ?></td>
                                <td><?php echo $data['guestID']; ?></td>
                                <td><?php echo $data['total_bill']; ?></td>

                                <td><?php echo $data['status'] == 0 ? 'ยังไม่ชำระเงิน' : 'ชำระเงินเสร็จสิ้น'; ?></td>
                                <td>
                                    <a href="confirm.php?id=<?php echo $data[0]; ?>" class="btn btn-danger btn-sm px-3">
                                        ยืนยันการชำระเงิน
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

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


</body>

</html>