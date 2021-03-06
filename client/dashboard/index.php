<?php
 include_once('../../connect.php');
 require_once('../authen.php');

 $sql = "SELECT * FROM Room";
 $result = mysqli_query($conn,$sql);
 

?>
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
                    <h1 style="text-align:ceter">ห้องพัก</h1>

                    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Add room</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body mx-3">

                                    <form class="text-center" method="POST" action="php/createRoom.php" id="form">
                                        <div class="md-form mb-5">
                                            <input type="text" id="room_number" name="room_number" class="form-control validate" required>
                                            <label data-error="wrong" data-success="right"
                                                for="room_number">หมายเลขห้อง</label>
                                        </div>

                                        <div class="md-form mb-5">
                                            <input type="text" id="type" name="type" class="form-control validate" required>
                                            <label data-error="wrong" data-success="right"
                                                for="type">ประเภทของห้อง</label>
                                        </div>

                                        <div class="md-form mb-5">
                                            <input type="text" id="person" name="person" class="form-control validate" required>
                                            <label data-error="wrong" data-success="right"
                                                for="person">จำนวนผู้เข้าพัก</label>
                                        </div>

                                        <div class="md-form mb-5">
                                            <input type="number" id="price" name="price" class=" form-control validate" required>
                                            <label data-error="wrong" data-success="success" for="form34">ราคา</label>
                                        </div>

                                </div>
                                
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-unique" type="submit">Create room <i
                                            class="fas fa-paper-plane-o ml-1"></i></button>
                                </div>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="" class="btn btn-success btn-rounded btn-sm mb-4" data-toggle="modal"
                            data-target="#modalContactForm">Add room</a>
                    </div>

                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Room Type</th>
                                <th scope="col">Person</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            </tr> -->
                            <?php while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                <tr>
                                    <td><?php echo $data['roomID']; ?></td>
                                    <td><?php echo $data['roomType']; ?></td>
                                    <td><?php echo $data['person']; ?></td>
                                    <td><?php echo $data['price']; ?></td>
                                    <td><?php echo $data['status'] == 0 ? 'ว่าง' : 'ไม่ว่าง'; ?></td>
                                    <!-- <td> <button type="button" class="btn btn-danger btn-sm px-3">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </td> -->
                                </tr>
                                <?php }?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>



    </main>
    <!--/Main layout -->




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

    <script>
    $(document).ready(function(){

        $("#form").submit(function (evennt){
            event.preventDefault();

            var data = $(this).serialize();
            console.log(data)

            $.ajax({
                type:'POST',
                url:'php/createRoom.php',
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