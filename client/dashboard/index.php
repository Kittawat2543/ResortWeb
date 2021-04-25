<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Dashboard</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/MDB-Pro/css/mdb.min.css">
    <link rel="stylesheet" href="../../node_modules/FontAwesomePro/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/datatables.min.css" />

    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;

    }

    tr:hover {
        -webkit-box-shadow: 2px 3px 108px -17px rgba(0, 0, 0, 0.25);
        -moz-box-shadow: 2px 3px 108px -17px rgba(0, 0, 0, 0.25);
        box-shadow: 2px 3px 108px -17px rgba(0, 0, 0, 0.25);


    }

    .break {
        word-break: break-all;
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
                    <h1>ห้องพัก</h1>
                    <table class="table table-bordered">
                        <tr>
                            <th>รหัสห้อง</th>
                            <th>รหัสห้อง</th>
                            <th>รหัสห้อง</th>
                            <th>รหัสห้อง</th>
                            <th>รหัสห้อง</th>
                        </tr>

                    </table>

                </div>
            </div>
        </div>



    </main>
    <!--/Main layout -->



    <!-- Modal: modalPoll -->
    <div class="modal  fade bd-example-modal-lg" id="modalCart" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">
                    <h4 class="card-title text-center" style="color: cornflowerblue;"><i class="fad fa-cart-arrow-down"
                            style="font-size: 30px;"></i> Cart
                    </h4>
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-lg table-striped w-100">
                            <!--Table head-->
                            <thead>
                                <tr class="text-center">
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Total</th>
                                    <th>Clear</th>

                                </tr>
                            </thead>
                            <!--Table head-->
                            <!--Table body-->
                            <tbody class="show-cart">

                            </tbody>
                            <!--Table body-->
                        </table>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="pl-5">Total price : <span class="total-cart"></span> ฿</h5>
                            <div class="md-form ml-5">
                                <input type="number" min="0" id="income" name="income" class="form-control" required>
                                <label for="form1">Money received</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="md-form ml-5 mt-5">
                                <input type="text" id="coupon" name="coupon" class="form-control" required>
                                <label for="form1">คูปองส่วนลด</label>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="check-out btn btn-primary waves-effect waves-light">Check out
                        <i class="fa fa-paper-plane ml-1"></i>
                    </a>
                    <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: modalPoll -->



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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/datatables.min.js">
    </script>
    <script src="../assets/js/cart.js"></script>
    <script src="../../assets/js/block-console.js"></script>

    <script>
    $('#dataTable').DataTable({
        "order": [0, 'asc']
    });
    </script>
</body>

</html>