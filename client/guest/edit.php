<?php 
 include_once('../../connect.php');
 require_once('../authen.php');


 $id = $_GET['id'];
$sql = "SELECT * FROM Guest WHERE id = '".$id."'";
$result_trans = $conn->query($sql) or die($conn->error);
$data = mysqli_fetch_array($result_trans);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/MDB-Pro/css/mdb.min.css">
    <link rel="stylesheet" href="../../node_modules/FontAwesomePro/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
    hr {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }
    </style>
</head>

<body class="fixed-sn cyan-skin">

    <!-- Sidebar -->
    <?php require_once('../include/sidebar.php'); ?>
    <!--Main layout-->
    <main>
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-12">
                    <!-- Card -->
                    <div class="card testimonial-card">
                        <!-- <?php print_r($row); ?> -->

                        <!-- Background color -->
                        <div class="top-up indigo lighten-1"></div>




                        <!-- Content -->
                        <div class="card-body">
                            <!-- Name -->

                            <!-- Form -->
                            <form action="" id="form-edit">
                                <h5 class="text-left">Edit infomation</h5>
                                <hr>
                                <!-- Email -->

                                <input type="hidden" id="id" name="id" value="<?php echo $id;?>" requried>


                                <div class="md-form">
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="<?php echo $data['name'];?>" requried>
                                    <label for="name">Name</label>
                                </div>

                                <div class="md-form">
                                    <input type="text" id="tel" name="tel" class="form-control"
                                        value="<?php echo $data['tel'];?>" requried>
                                    <label for="tel">Tel</label>
                                </div>

                                <br>
                                <br>

                                <!-- Sign in button -->
                                <button
                                    class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0"
                                    type="submit">Submit </button>


                            </form>
                            <!-- Form -->

                        </div>
                        <!-- Card -->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../assets/js/block-console.js"></script>

    <script>
    $(document).ready(function() {

        $("#form-edit").submit(function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            console.log(form_data);
            $.ajax({
                type: 'POST',
                url: 'php/editGuest.php',
                data: form_data,
                dataType: 'json',
                success: function(data) {
                    if (data.status) {
                        Swal.fire(
                            'Success!',
                            data.message,
                            'success'
                        ).then(function() {
                            window.location.href = 'index.php';
                        });
                    } else {
                        Swal.fire(
                            'Warning!',
                            data.message,
                            'warning'
                        ).then(function() {
                            window.location.href = 'index.php';
                        });
                    }
                }

            });
        });
    });
    </script>

</body>

</html>