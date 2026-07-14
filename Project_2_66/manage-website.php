<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom fonts for this template-->
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Table -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="test.css" rel="stylesheet">
    <style>
           table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #CBFFF6;
        }
     
        /* Add the following CSS rules to apply the Kanit font family */
        body,
        h1, h2, h3, h4, h5, h6,
        p,
        a,
        li,
        th, td ,b{
  font-family: 'Itim', cursive;
  font-weight: 400;
  font-style: normal;
}
    .card-header{
        
    }
   

    </style>
    <?php
    include('connect.php'); 
    if (isset($_SESSION['userrole'])) {
        if($_SESSION['userrole'] == 'admin'){

       
        $user_id = $_SESSION['userrole'];
        $sql = "SELECT * FROM tb_register WHERE ID_User = '$user_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
    else{
        echo "<script>alert('คุณไม่มีสิทธิ์เข้าถึง');</script>";
        echo "<script>window.location.href='/login.php';</script>";
    }
    }
   
    ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminindex.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Admin Only</div>
            </a>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="adminindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
           

            <!-- Heading -->
            <div class="sidebar-heading">
                Account
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="manage-user.php"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manage user Information</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="status.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Status</span>
                </a>
               
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               About Exam
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="manage-website.php"  data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Room</span>
                </a>
                
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="test-result.php">
                <i class="fas fa-fw fa-table"></i>
                    <span>Exam Results</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
               About Website
            </div>
            <li class="nav-item active">
                <a class="nav-link collapsed" href="manage-website.php"  data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Manage Website</span>
                </a>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                     

                        <!-- Nav Item - User Information -->
                         <!-- Nav Item - User Information -->
                         <li class="nav-item dropdown arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php 
echo " <h6>". $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ."</h6>";
                                
                                ?></span>
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ออกจากระบบ</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">กดปุ่ม Logout เพื่อออกจากระบบ</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">สถานะของเว็บไซต์</h1>
   
</div>

<!-- Content Row -->
<div class="row">

  <!-- ประกาศผู้มีสิทธิ์สอบ -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        <h4>การประกาศผู้มีสิทธิ์สอบ</h4>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        $sql = "SELECT * FROM tb_an";
                        $result = mysqli_query($conn, $sql);
                        $row = $result->fetch_assoc();
                        if ($row['an_regis'] == 'ยังไม่ประกาศ') {
                            echo "ยังไม่ประกาศ";
                        ?>
                        <br><br>
                        <form action="" method="get">
                            <div class="form-check form-check-inline d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="an_option" id="inlineRadio2" value="ประกาศ">
                                <label class="form-check-label" for="inlineRadio2">ประกาศ</label>
                            </div>
                            <div class="text-right"> <!-- เพิ่มคลาส text-right เพื่อจัดตำแหน่งปุ่มไปทางขวา -->
                                <input type="submit" value="แก้ไข"name="an_submit_regis" class="btn btn-primary ml-2">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['an_submit_regis'])) {
                                $an = $_GET['an_option'];
                                $sql = "UPDATE tb_an SET an_regis = '$an'
                                WHERE an_regis = 'ยังไม่ประกาศ'";
                                $conn->query($sql);
                                echo "<script>window.location.href='/manage-website.php';</script>";
                            }
                        } else {
                            echo "ประกาศแล้ว";
                        ?>
                        <br><br>
                        <form action="" method="get">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cancel_option" id="inlineRadio1" value="ยังไม่ประกาศ">
                                <label class="form-check-label" for="inlineRadio1">ยกเลิกการประกาศ</label>
                            </div>
                            <div class="text-right"> <!-- เพิ่มคลาส text-right เพื่อจัดตำแหน่งปุ่มไปทางขวา -->
                                <input type="submit" value="แก้ไข"name="cancel_submit_regis" class="btn btn-secondary ml-2">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['cancel_submit_regis'])) {
                                $cancel = $_GET['cancel_option'];
                                $sql = "UPDATE tb_an SET an_regis = '$cancel'";
                                $conn->query($sql);
                                echo "<script>window.location.href='/manage-website.php';</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                
                </div>
            </div>
        </div>
    </div>
</div>



   
   <!-- ประกาศห้องสอบ -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        <h4>การประกาศรายชื่อห้องสอบ</h4>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        if ($row['an_test'] == 'ยังไม่ประกาศ') {
                            echo "ยังไม่ประกาศ";
                        ?>
                        <br><br>
                        <form action="" method="get">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="an_option" id="inlineRadio2" value="ประกาศ">
                                <label class="form-check-label" for="inlineRadio2">ประกาศ</label><br>
                            </div>
                            <div class="text-right"> <!-- เพิ่มคลาส text-right เพื่อจัดตำแหน่งปุ่มไปทางขวา -->
                                <input type="submit"value="แก้ไข" name="an_submit_test" class="btn btn-primary">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['an_submit_test'])) {
                                $an = $_GET['an_option'];
                                $sql = "UPDATE tb_an SET an_test = '$an'";
                                $conn->query($sql);
                                echo "<script>window.location.href='/manage-website.php';</script>";
                            }
                        } else {
                            echo "ประกาศแล้ว";
                        ?>
                        <br><br>
                        <form action="" method="get">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cancel_option" id="inlineRadio1" value="ยังไม่ประกาศ">
                                <label class="form-check-label" for="inlineRadio1">ยกเลิกการประกาศ</label>
                            </div>
                            <div class="text-right"> <!-- เพิ่มคลาส text-right เพื่อจัดตำแหน่งปุ่มไปทางขวา -->
                                <input type="submit" value="แก้ไข"name="cancel_submit_test" class="btn btn-secondary">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['cancel_submit_test'])) {
                                $cancel = $_GET['cancel_option'];
                                $sql = "UPDATE tb_an SET an_test = '$cancel'";
                                $conn->query($sql);
                                echo "<script>window.location.href='/manage-website.php';</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- ประกาศผู้ผ่านการสอบ -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                       <h4>การประกาศรายชื่อผู้ผ่านการสอบ</h4>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                    if ($row['an_test_result'] == 'ยังไม่ประกาศ') {
                        echo "ยังไม่ประกาศ";
                    ?>
                        <br><br>
                        <form action="" method="get">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="an_option" id="inlineRadio2" value="ประกาศ">
                                <label class="form-check-label" for="inlineRadio2">ประกาศ</label>
                            </div>
                            <div class="text-right"> <!-- เพิ่มคลาส text-right เพื่อจัดตำแหน่งปุ่มไปทางขวา -->
                                <input type="submit" value="แก้ไข"name="an_submit_test_result" class="btn btn-primary ml-2">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['an_submit_test_result'])) {
                                $an = $_GET['an_option'];
                                $sql = "UPDATE tb_an SET an_test_result = '$an'";
                                $conn->query($sql);
                               
                                echo "<script>window.location.href='/manage-website.php';</script>";
                            }
                    } else {
                        echo "ประกาศแล้ว";
                    ?>
                        <br><br>
                        <form action="" method="get">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cancel_option" id="inlineRadio1" value="ยังไม่ประกาศ">
                                <label class="form-check-label" for="inlineRadio1">ยกเลิกการประกาศ</label>
                            </div>
                            <div class="text-right"> <!-- เพิ่มคลาส text-right เพื่อจัดตำแหน่งปุ่มไปทางขวา -->
                                <input type="submit" value="แก้ไข" name="cancel_submit_test_result" class="btn btn-secondary ml-2">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['cancel_submit_test_result'])) {
                                $cancel = $_GET['cancel_option'];
                                $sql = "UPDATE tb_an SET an_test_result = '$cancel'";
                                $conn->query($sql);
                                echo "<script>window.location.href='/manage-website.php';</script>";
                               
                      

                            }
                    }
                        ?>

                    </div>
                </div>
                <div class="col-auto">
              
                </div>
            </div>
        </div>
    </div>
</div>
<!-- อื่น ๆ  -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-auto py-2 "> <!-- ใช้คลาส h-auto เพื่อให้มีความสูงเท่ากับเนื้อหา -->
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        <h4>อื่น ๆ </h4>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                       Rolemanagement <br>
                       เพิ่มสาขา  
                    </div>
                </div>
                <div class="col-auto">
              
                </div>
            </div>
        </div>
    </div>
</div>

 
    
   


   

    
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="manage-userainer my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="vendor/datatables/datatables-demo.js"></script>


</body>

</html>