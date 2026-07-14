<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<?php
if (session_status() === PHP_SESSION_NONE) {
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
        th, td {
  font-family: 'Itim', cursive;
  font-weight: 400;
  font-style: normal;
}
</style>

</head>

<body id="page-top">
<?php
    include('connect.php'); 
    if (isset($_SESSION['userrole'])) {
        if($_SESSION['userrole'] == 'staff'){

       
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

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">STAFF Only</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link active" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
    
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Heading -->
            <div class="sidebar-heading">
               Account
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="staff-user.php"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User Information</span>
                </a>
               
            </li>

           

         

            <!-- Nav Item - Tables -->
           
            <!-- Divider -->
        

       


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

                     

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></span>        
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ภาพรวมทั้งหมด</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- ปวช -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               <h4>ภาพรวมการสมัครระดับชั้น ปวช.</h4> </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
                                            $sql = "SELECT COUNT(*) FROM tb_student WHERE grade_level ='ประกาศนียบัตรวิชาชีพ (ปวช.)'";                                        
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                            $count = $row['COUNT(*)']; // Access the count value
                                            echo $count ; 
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fa fa-child fa-2x text-gray-300" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ปวส -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h4>ภาพรวมการสมัครระดับชั้น ปวส.</h4></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
                                            $sql = "SELECT COUNT(*) FROM tb_student WHERE grade_level ='ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)'";                                        
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                            $count = $row['COUNT(*)']; // Access the count value
                                            echo $count ; 
                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-male fa-2x text-gray-300" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ป ตรี -->
                       <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                               <h4>ภาพรวมการสมัครระดับชั้น ป.ตรี</h4></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
                                            $sql = "SELECT COUNT(*) FROM tb_student WHERE grade_level ='ปริญญาตรี'";                                        
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                            $count = $row['COUNT(*)']; // Access the count value
                                            echo $count ; 
                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-graduation-cap fa-2x text-gray-300" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- ทั้งหมด -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                              <h4> จำนวนคนสมัครทั้งหมด</h4></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php 
                                            $sql = "SELECT COUNT(*) FROM tb_student";                                        
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                            $count = $row['COUNT(*)']; // Access the count value
                                            echo $count ; 
                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-users fa-2x text-gray-300" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                       
                       
               

                </div>
                <!-- /.container-fluid -->

                <?php
                $labels = [];
                $data = [];
                $sql = "SELECT grade_level, COUNT(*) AS count FROM tb_student WHERE grade_level IN ('ประกาศนียบัตรวิชาชีพ (ปวช.)','ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)','ปริญญาตรี') GROUP BY grade_level";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $labels[] = $row['grade_level'];
                    $data[] = $row['count'];

                  
                }
                $labels_json = json_encode($labels);
                $data_json = json_encode($data);

                echo "<h1>".$labels."</h1>";
                ?>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- chart-->
<script>
    
    // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: <?php echo $labels;?>,
    datasets: [{
      data: <?php echo $data;?>,
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
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
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    
   

</body>

</html>