<?php 
 include_once('../../connect.php');
 require_once('../authen.php');

if (!$_GET['id']){
    header( "location: /" );
    exit(0);
}

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
    <title>Booking Room</title>
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


            <div class="touch">
                <div class="card">
                    <div class="card-body">
                        <p>รายละเอียดการจอง</p>
                        <!-- Form -->
                        <form id="form" class="text-center" style="color: #757575;">

                            <!-- Email -->
                            <div class="md-form">
                                <input type="text" id="room_id" name="room_id" class="form-control"
                                    value="<?php echo $_GET['id'];?>">
                                <label for="room_id">เบอร์ห้อง</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="text" id="tel" name="tel" id="materialLoginFormPassword"
                                    class="form-control">
                                <label for="tel">เบอร์โทรศัพท์ผู้จอง</label>
                            </div>



                            <!-- Sign in button -->
                            <button type="submit" class="btn btn-deep-orange">Submit</button>

                        </form>
                        <!-- Form -->
                    </div>
                </div>
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
    $(document).ready(function() {

        $("#form").submit(function(evennt) {
            event.preventDefault();

            var data = $(this).serialize();
            console.log(data)

            $.ajax({
                type: 'POST',
                url: 'php/createTransaction.php',
                data: data,
                dataType: 'JSON',
                success: function(data) {

                    if (data.status) {
                        Swal.fire('Success!', data.message, 'success').then(() => {
                            window.location.href = 'index.php';
                        })
                    } else {
                        Swal.fire('Fail!', data.message, 'error').then(() => {
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