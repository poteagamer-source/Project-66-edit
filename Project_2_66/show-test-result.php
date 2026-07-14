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
    <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
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
        th, td {
  font-family: 'Itim', cursive;
  font-weight: 400;
  font-style: normal;
}
    .card-header{
        
    }
   

    </style>
  <?php
        session_start();
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
        echo "<script>window.location.href='http://localhost/Project_2_66/login.php';</script>";
    }
    }
   
    ?>

</head>

<body id="page-top">
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
      <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center" style="height: 45px;">
          <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Hatyai Songkhla,Thailand</small>
          <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>074-212300</small>
          <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@htc.ac.th</small>
        </div>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <div class="d-inline-flex align-items-center" style="height: 45px;">

          <small class="text-light"><i class="fa-solid fa-user"></i>info@htc.ac.th</small>

        </div>
      </div>
    </div>
  </div>
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
            <li class="nav-item ">
                <a class="nav-link collapsed" href="make-room.php"  data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Room</span>
                </a>
                
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="test-result.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Exam Results</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
               About Website
            </div>
            <li class="nav-item">
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
                <div class="card shadow mb-4">
  <div class="card-header">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <?php
                    if(isset($_POST['depart'])){
                        $_SESSION['depart'] = $_POST['depart'];
                    }
                    else{

                    }

                    
                 

                     ?>
                    <a href="test-result.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a><h1 class="h3 mb-0 text-gray-800"> แผนก<?php echo  $_SESSION['depart'];?> ห้องสอบที่ 
                    <span id="examRoomNumber">1</span></h1>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      
                        <button name="insert" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm "data-bs-toggle='modal' data-bs-target='#Modal-insert-score'><i
                                class="fas fa-plus fa-sm text-white-50"></i> ใส่คะแนนสอบ</a></button>
                                
                
</div>
                
</div>
  </div>
  <script>
    $(document).ready(function() {
        var dataTable = $('#dataTable').DataTable({
            "lengthChange": false,
            "pageLength": 40,
            // Event listener for when the page changes
            "drawCallback": function(settings) {
                var currentPage = this.api().page() + 1; // Current page index starts from 0
                $('#examRoomNumber').text(currentPage); // Update the exam room number in h1
            }
        });
    });
</script>
  
  <div class="card-body">
  <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        
        <tr>
        <th>เลขที่นั่งสอบ</th>                   
                <th>เลขประจำตัวประชาชน</th>
            <th>ชื่อ - นามสกุล</th>
            <th>คะแนนสอบวิชาสามัญ</th>
            <th>คะแนนสอบวิชาเฉพาะทาง</th>
            <th>ผลการสอบ</th>
            
     
            <th>หมายเหตุ</th>
        </tr>
</thead>
            <tfoot>
                
                <tr>
                <th>เลขที่นั่งสอบ</th>                   
                <th>เลขประจำตัวประชาชน</th>
            <th>ชื่อ - นามสกุล</th>
            <th>คะแนนสอบวิชาสามัญ</th>
            <th>คะแนนสอบวิชาเฉพาะทาง</th>
            <th>ผลการสอบ</th>
            
     
            <th>หมายเหตุ</th>
            
</tr>

</tfoot>
<?php
// Fetching data securely from session
$depart = $conn->real_escape_string($_SESSION['depart']);

// SQL query to fetch student data
$sql2 = "SELECT * FROM tb_student WHERE department = '$depart' AND status_value = 'เสร็จสิ้น'";
$result2 = $conn->query($sql2);

// Generating table structure

echo '<tbody>';
$num = 1;
// Loop through student data
while ($row2 = $result2->fetch_assoc()) {
    // Fetching test data for each student
    $id_card_result = $row2['id_card'];
    $sql4 = "SELECT * FROM tb_test Where id_card_result = '$id_card_result'";
    $result4 = $conn->query($sql4);
    $row4 = $result4->fetch_assoc();
    
    // Outputting table rows
    echo '<tr>';
    echo '<td>';
    if($row2['id_test'] <=40 ){
        
        echo $num-40;
        $num++;
    }
    elseif($row2['id_test'] >40 ){
        
        echo $num;
        $num++;
    }
    
    echo '</td>';
    echo '<td>' . $row2['id_card'] . '</td>';
    echo '<td>' . $row2['pre_name'] . $row2['firstname'] . ' ' . $row2['lastname'] . '</td>';
    echo '<td>'; if(!isset($row4['test_normal']))
    {
        echo"0 </td>";
    }
    else{
        echo $row4['test_normal'].'</td>';
    } 
    echo '<td>'; if(!isset($row4['test_expert']))
    {
        echo"0 </td>";  
    }
    else{
        echo $row4['test_expert'].'</td>';
    } 
    echo "<td>";
    // Outputting modal button
    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal' . $row2['id_test'] . '">กรอกข้อมูล</button>';

    // Outputting modal
    echo '<div class="modal" id="exampleModal' . $row2['id_test'] . '" tabindex="-1" role="dialog">';
    echo '<div class="modal-dialog" role="document">';
    echo '<div class="modal-content">';
    echo '<div class="modal-header"><h5 class="modal-title">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    echo '<div class="modal-body d-flex justify-content-center align-items-center">';
    echo '<form action="check-test-result.php" method="post">';
    echo '<input type="hidden" name="id_card" value="' . $row2['id_card'] . '">';
    echo '<input type="text" name="test_normal" placeholder="กรอกผลการสอบวิชาสามัญ"><br><br><br>';
    echo '<input type="text" name="test_specialized" placeholder="กรอกผลการสอบวิชาเฉพาะทาง">';
    echo '</div>';
    echo '<div class="modal-footer">';
    echo '<input type="submit" name="submit_test" class="btn btn-primary">';
    echo '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
    echo '</div></form></div></div></div>';
    echo '<td></td>';
    echo '</td></tr>';
}

echo '</tbody></table>';
?>

       
            <!-- Footer -->
            <div class="footer_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="footer_text">
            <div class="footer_logo"><img src="./images/logohtc.png" alt=""></div>
            <p class="jonson_text">วิทยาลัยเทคนิคหาดใหญ่
              Hatyai Technical Collage
            </p>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-3 margin_left_0">
          <h5 class="information_text">contact</h5>
          <p class="many_text_1">7 ถ.กาญจนวณิช ต. คอหงส์ อ.หาดใหญ่ จ.สงขลา 90110
            โทร 074-212300</p>
        </div>
        <div class="col-sm-3">
          <h5 class="information_text">E-mail</h5>
          <p class="many_text_1">htc@htc.com</p>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">วิทยาลัยเทคนิคหาดใหญ่<a href="#">Hatyai Technical Collage</a></p>
    </div>
  </div>
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