<?php 
include_once('../../connect.php');
require_once('../authen.php');


include_once('../../connect.php');
require_once('../authen.php');

$sql = "SELECT * FROM `Transactions` INNER JOIN `Guest` ON Transactions.telGuest = Guest.tel INNER JOIN Employee ON Transactions.employeeID = Employee.employeeID";
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
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id='form'>
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Check Out</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <input type="text" id="transactionID" name="transactionID" class="form-control validate"
                                    value="<?php echo $_GET['id'];?>">
                                <label data-error="wrong" data-success="right" for="transactionID">Transaction
                                    ID</label>
                            </div>

                            <div class="md-form mb-4">
                                <input type="date" id="date_checkout" name="date_checkout" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Date</label>
                            </div>

                        </div>
                        <div type="submit" class=" modal-footer d-flex justify-content-center">
                            <button class="btn btn-default">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <p style="font-size:35px;">View Transaction</p>
            <div class="row">
                <div class="touch">
                    <div class="card">
                        <div class="card-body">
                            <?php while ($data = mysqli_fetch_array($result)){
                                if($data[0] == $_GET['id']){?>
                            <p></p>

                            <h5>TransactionsID : <?php echo $data['transactionID']?></h5>
                            <p>ชื่อผู้จอง : <?php echo $data['name']?></p>
                            <p>เบอร์โทรศัพท์ผู้จอง : <?php echo $data['telGuest']?></p>
                            <h4>ข้อมูลพนักงาน</h4>
                            <p>พนักงาน : <?php echo $data[15]?></p>
                            <p>ตำแหน่งงาน : <?php echo $data[20]?></p>
                            <h4>ข้อมูลห้องที่จอง</h4>
                            <p>หมายเลขห้อง : <?php echo $data['roomID']?></p>
                            <p>CheckIN : <?php echo $data['check_in']?></p>
                            <p>CheckOut :
                                <?php echo $data['check_out'] == '0000-00-00 00:00:00' ? 'NO DATA':$data['check_out'];?>
                            </p>
                            <p><?php echo $data['status'] == '0' ? 'ยังไม่ชำระเงิน':'ชำระเงินแล้ว';?></p>


                            <div class=" text-center">
                                <a href="" class="btn btn-danger btn-rounded mb-4 <?php echo $data['check_out'] == '0000-00-00 00:00:00' ? ' ':'disabled';?>" data-toggle="modal"
                                    data-target="#modalLoginForm">Check Out</a>
                            </div>
                            <?php }
                        }?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <!--/Main layout-->

    <!-- Footer -->
    <?php require_once('../include/footer.php');?>


    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../node_modules/MDB-Pro/js/mdb.min.js"></script>
    <script src="../../node_modules/mdbootstrap/js/addons/datatables.min.js"></script>
    <script src="../../node_modules/MDB-Pro/src/js/pro/sidenav.js"></script>
    <script src="../assets/js/sidebar.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/datatables.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- <script src="js/allJs.js"></script> -->
    <script src="../../assets/js/block-console.js"></script>


    <script>
    $(document).ready(function() {
     $("#form").submit(function (evennt){
            event.preventDefault();

            var data = $(this).serialize();
            console.log(data)

            $.ajax({
                type:'POST',
                url:'php/checkout.php',
                data:data,
                dataType:'JSON',
                success:function (data){
                    
                    if(data.status){
                        Swal.fire('Success!',data.message,'success').then(()=>{
                            window.location.href = 'index.php';
                        })
                    }else{
                        Swal.fire('Fail!',data.message,'error').then(()=>{
                             window.location.href = 'index.php';
                        })
                    }
                }
            })
        })
    })
    </script>
</body>

</html>