<?php 
 include_once('../../connect.php');
 require_once('../authen.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add employee</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/MDB-Pro/css/mdb.min.css">
    <link rel="stylesheet" href="../../node_modules/FontAwesomePro/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/datatables.min.css" />

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

table,
tr,
td {

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

                    <p style="font-size:40px;">Add employee</p>
                    <form class="text-center" method="POST" action="assets/php/register.php" id="form">

                        <div class="md-form">
                            <input type="text" id="username" name="username" class="form-control" required>
                            <label for="username">Username</label>
                        </div>

                        <div class="md-form">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="name" name="name" class="form-control" required>
                            <label for="name">Name</label>
                        </div>

                        <div class="md-form">
                            <input type="text" id="tel" name="tel" class="form-control" required>
                            <label for="tel">Tel</label>
                        </div>

                        <div class="md-form">
                            <input type="date" id="DOB" name="DOB" class="form-control" required>
                            <label for="DOB">DOB</label>
                        </div>

                        <div class="md-form">
                            <input type="number" id="salary" name="salary" class="form-control" required>
                            <label for="salary">Salaly</label>
                        </div>

                        <select class="mdb-select md-form" name="gender" id="gender">
                            <option value="" disabled selected>Choose your gender</option>
                            <option value="M">Male</option>
                            <option value="G">Femel</option>
                            <option value="Other">Other</option>
                        </select>

                        <div class="md-form">
                            <input type="text" id="job_position" name="job_position" class="form-control" required>
                            <label for="job_position">ตำแหน่งงาน</label>
                        </div>


                        <button class="btn btn-outline-primary btn-rounded my-4 waves-effect z-depth-0"
                            type="submit">Register</button>

                    </form>

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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/af-2.3.5/b-1.6.5/datatables.min.js">
    </script>
    <script src="../../assets/js/block-console.js"></script>
    <script src="../../assets/js/register.js"></script>
    <script>
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    })
    </script>
</body>

</html>