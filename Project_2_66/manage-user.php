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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#"  data-target="#collapseTwo"
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
                <a class="nav-link collapsed" href="make-room.php"  data-target="#collapsePages"
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
                        <h1 class="h3 mb-0 text-gray-800"> ข้อมูลนักเรียน-นักศึกษา</h1>
                        <button name="insert" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm "data-bs-toggle='modal' data-bs-target='#Modal-manage-user-insert'><i
                                class="fas fa-plus fa-sm text-white-50"></i> เพิ่มข้อมูล</a></button>
                                
                
</div>

  </div>
  <div class="modal fade" id="Modal-manage-user-role" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Role Management</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">แต่งตั้ง Role ให้กับผู้ใช้</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">ยืนยัน</a>
                </div>
            </div>
        </div>
    </div>
  
  <div class="card-body">
  <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        
        <tr>
            <th >ลำดับที่</th>                   
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>รหัสประจำตัวประชาชน</th>
            <th>เบอร์โทร</th>
            <th>สาขา</th>
   
            <th>สถานะ</th>
            <th>หมายเหตุ</th>
        </tr>
</thead>
            <tfoot>
                
                <tr>
            <th >ลำดับที่</th>                   
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>รหัสประจำตัวประชาชน</th>
            <th>เบอร์โทร</th>
            <th>สาขา</th>
   
            <th>สถานะ</th>
            <th>หมายเหตุ</th>
</tr>

</tfoot>
            <?php
        $sql = "SELECT * FROM tb_student";
        $stmt = $conn->prepare($sql);
        $stmt->execute();                               
        $result = $stmt->get_result();
        foreach($result as $result){                                                  
        $_SESSION['id_student'] = $result['id_student'];
?>
        <tr>
        <th scope="row"><?= $result['id_student']; ?></th>
        <td><?= $result['pre_name'].$result['firstname']; ?></td>
        <td><?= $result['lastname']; ?></td>
        <td><?= $result['id_card']; ?></td>
        <td><?=$result['tel']; ?></td>
        <td><?= $result['department']; ?></td>
     
        <td>
          <?php 
            if($result['status_value'] == 'เสร็จสิ้น'){?>
              <i class='fa-solid fa-check'> เสร็จสิ้น</i><?php 
            }
            elseif($result['status_value'] == 'ไม่สำเร็จ'){?>
              <i class='fa-solid fa-x'> ไม่สำเร็จ</i><?php 
            }
            else{?>
             <form name="update_status" method="post" action="check-manage-user.php">
              <input type="hidden" name="id_student" value="<?php echo $result['id_student']?>">
              <input type="hidden" name="department" value="<?php echo $result['department']?>">
              <select name="status_value" >
           
           
              <option>กำลังรอตรวจสอบ</option>
              <option>เสร็จสิ้น</option>
              <option>ไม่สำเร็จ</option>
              </select><input type="submit" value="แก้ไข" name="submit">
             
          <?php  }
            
              
           

         
         ?>
            
          </form>
            <td>
    <button name='info' class='btn btn-info btn-circle btn-sm' data-bs-toggle='modal' data-bs-target='#Modal-manage-user-info<?php echo $result['id_student']; ?>'>
        <i class='fas fa-info-circle'></i>
    </button>
    <button name='fix' class='btn btn-warning btn-circle btn-sm' data-bs-toggle='modal' data-bs-target='#Modal-manage-user-fix<?php echo $result['id_student']; ?>'>
    <i class="fa-solid fa-wrench"></i>
    </button>
    <button name='delete' class='btn btn-danger btn-circle btn-sm' data-bs-toggle='modal' data-bs-target='#Modal-manage-user-delete<?php echo $result['id_student']; ?>'>
    <i class='fas fa-trash'></i>
</button>

</td>
<style>
.container {
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    height: 300px; /* Adjust the height of the container as needed */
}

.container img {
    max-width: 100%; /* Ensure the image doesn't exceed its container's width */
    max-height: 100%; /* Ensure the image doesn't exceed its container's height */
}
</style>
<!-- Modal-info -->
<div class="modal fade" id="Modal-manage-user-info<?php echo $result['id_student']; ?>" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลส่วนตัว</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        <!-- img -->
                <div class="container">
                <br>
                <img class="col-md- -5"src='<?php echo $result["img"]; ?>' alt='Uploaded Image' width='250px'><br>
</div>
            <br>

       
            <div class=" input-group">
               <label class="col-md-3"> ชื่อ - สกุล </label>
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
  <input type="text" value="<?php echo $result["firstname"]." ".$result["lastname"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control" placeholder="ชื่อ - สกุล" aria-label="ชื่อ - สกุล" aria-describedby="basic-addon1">
</div>
<br>
<!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">ระดับการศึกษา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  type="text" value="<?php echo $result["grade_level"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ระดับการศึกษา" aria-label="ระดับการศึกษา" aria-describedby="basic-addon2">
</div>
<br>
<!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">สาขา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  type="text" value="<?php echo $result["department"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สาขา" aria-label="สาขา" aria-describedby="basic-addon2">
</div>
<br>
<!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
  <input  type="text" value="<?php echo $result["tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์" aria-label="เบอร์โทรศัพท์" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">บัตรประจำตัวประชาชน</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-id-card"></i></i></span>
  <input  type="text" value="<?php echo $result["id_card"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="บัตรประจำตัวประชาชน" aria-label="บัตรประจำตัวประชาชน" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">E-mail</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
  <input  type="text" value="<?php echo $result["email"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">วันเกิด</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cake-candles"></i></span>
  <input  type="text" value="<?php echo $result["birthdate"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="วันเกิด" aria-label="วันเกิด" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">สัญชาติ</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-globe"></i></span>
  <input  type="text" value="<?php echo $result["nationality"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สัญชาติ" aria-label="สัญชาติ" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ศาสนา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cross"></i></span>
  <input  type="text" value="<?php echo $result["religion"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ศาสนา" aria-label="ศาสนา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ที่อยู่</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  type="text" value="<?php echo $result["ads"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ที่อยู่" aria-label="ที่อยู่" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<hr class="divider" style="border-top: 1px solid #000;">
<h3>ข้อมูลผู้ปกครอง</h3>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล บิดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
  <input  type="text" value="<?php echo $result["dad_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล บิดา" aria-label="ชื่อ - สกุล บิดา" aria-describedby="basic-addon2">
</div>

<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ บิดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
  <input  type="text" value="<?php echo $result["dad_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ บิดา" aria-label="เบอร์โทรศัพท์ บิดา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล มารดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
  <input  type="text" value="<?php echo $result["mom_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล มารดา" aria-label="ชื่อ - สกุล มารดา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ มารดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
  <input  type="text" value="<?php echo $result["mom_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ มารดา" aria-label="เบอร์โทรศัพท์ มารดา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล ผู้ปกครอง</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
  <input  type="text" value="<?php echo $result["parents_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล ผู้ปกครอง" aria-label="ชื่อ - สกุล ผู้ปกครอง" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ ผู้ปกครอง</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
  <input  type="text" value="<?php echo $result["parents_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ ผู้ปกครอง" aria-label="เบอร์โทรศัพท์ ผู้ปกครอง" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">สถานศึกษาเก่า</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-school"></i></span>
  <input  type="text" value="<?php echo $result["school"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สถานศึกษาเก่า" aria-label="สถานศึกษาเก่า" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เกรดเฉลี่ยสะสม</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  type="text" value="<?php echo $result["parents_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เกรดเฉลี่ยสะสม" aria-label="เกรดเฉลี่ยสะสม" aria-describedby="basic-addon2">
</div>
<br>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        </div>
        <script>
        function updateOptions() {
            var select1 = document.getElementById("select1").value;
            var select2 = document.getElementById("select2");

            // Reset select2 options
            select2.innerHTML = ""; // Remove previous options

            if (select1 == "ประกาศนียบัตรวิชาชีพ (ปวช.)") {
                // If Select 1 equals "ประกาศนียบัตรวิชาชีพ (ปวช.)"
                var options = ["ช่างยนต์/ยานยนต์", "ช่างยนต์/จักรยานยนต์และเครื่องยนต์เล็กอเนกประสงค์", "ช่างกลโรงงาน/เครื่องมือกล", "ช่างเชื่อมโลหะ/ผลิตภัณฑ์", "ช่างไฟฟ้ากำลัง/ไฟฟ้ากำลัง", "ช่างอิเล็กทรอนิกส์/อิเล็กทรอนิกส์", "ช่างก่อสร้าง/ก่อสร้าง", "เครื่องเรือนและตกแต่งภายใน", "สถาปัตยกรรม", "สำรวจ", "โยธา", "ช่างเมคคาทรอนิกส์/เมคคาทรอนิกส์", "ช่างเทคนิคคอมพิวเตอร์/เทคนิคคอมพิวเตอร์", "โลจิสติกส์/โลจิสติกส์", "เทคโนโลยีสารสนเทศ/การโปรแกรมคอมพิวเตอร์ เว็บ และอุปกรณ์เคลื่อนที่", "เทคโนโลยีสารสนเทศ/คอมพิวเตอร์กราฟิก เกม และแอนิเมชัน",]; // Add more options as needed
            } else if (select1 == "ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)") {
                // If Select 1 equals "ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)"
                var options = ["เทคนิคยานยนต์(ม.6)", "เทคโนโลยีงานเชื่อมโครงสร้างโลหะ(ม.6)", "ไฟฟ้ากำลัง(ภาคสมทบ)", "เทคนิคยานยนต์ไฟฟ้า(ม.6)", "ก่อสร้าง(ม.6)", "งานเฟอร์นิเจอร์และตกแต่งภายใน(ม.6)", "เทคนิคสถาปัตยกรรม(ม.6)", "โยธา(ม.6)", "โยธา(ภาคสมทบ)", "เครื่องทำความเย็นและปรับอากาศ(ม.6)", "การจัดการโลจิสติกส์และซัพพลายเชน(ม.6)", "เทคโนโลยีสารสนเทศ/นักพัฒนาซอฟแวร์คอมพิวเตอร์(ม.6)", "เทคโนโลยีสารสนเทศ/นักพัฒนาคอมพิวเตอร์กราฟฟิกฯ(ม6)", "เทคนิคการจัดการพลังงาน(สมทบ)", "เมคคาทรอนิกส์และหุ่นยนต์(ม.6,ทวิภาคี)"]; // Add more options as needed
            } else if (select1 == "ปริญญาตรี") {
                // If Select 1 equals "ปริญญาตรี"
                var options = ["เทคโนโลยียานยนต์", "เทคโนโลยีการผลิต", "เทคโนโลยีไฟฟ้า", "เทคโนโลยีพลังงาน", "เทคโนโลยีสารสนเทศ	"]; // Add more options as needed
            } else {
                var options = []; // Default empty options
            }

            // Populate select2 with options
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.text = options[i];
                select2.add(option);
            }
        }
    </script>
              <!-- Modal-fix-->
 
              <div class="modal fade" id="Modal-manage-user-fix<?php echo $result['id_student']; ?>" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูล</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                         <div class="card">
                            <div class="card-body">
                               
                                <form name="manage-user-update" action="check-manage-user.php" method="post">
                                <input name="id_student"type="hidden" require value="<?php echo $result["id_student"]; ?>">
                                <div class="container">
                <br>
                 <img class="col-md- -5"src='<?php echo $result["img"]; ?>' alt='Uploaded Image' width='250px'><br>
</div><br>          <div class=" input-group">
               <label class="col-md-3"> รูปถ่ายหน้าตรง 1 นิ้ว</label>
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
  <input name="fileToUpload"type="file" value="<?php echo $result["img"]; ?>"   style="background-color: #FFFFFF;" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ" aria-describedby="basic-addon1">
</div>
<br>
                                <div class=" input-group">
               <label class="col-md-3"> ชื่อ</label>
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
  <input name="firstname"type="text" value="<?php echo $result["firstname"]; ?>"   style="background-color: #FFFFFF;" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ" aria-describedby="basic-addon1">
</div>
<br>
<div class=" input-group">
               <label class="col-md-3"> นามสกุล</label>
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
  <input name="lastname"type="text" value="<?php echo $result["lastname"]; ?>"   style="background-color: #FFFFFF;" class="form-control" placeholder="สกุล" aria-label="ชื่อ" aria-describedby="basic-addon1">
</div>
<br>
<!--INPUT -->

<div class=" mt-1 input-group">
<label class="col-md-3">ระดับการศึกษา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <select id="select1" name="grade_level"type="text" class="form-control selectpicker" require value="<?php echo $result['grade_level']; ?>"  style="background-color: #FFFFFF;" placeholder="ระดับการศึกษา" aria-label="ระดับการศึกษา" aria-describedby="basic-addon2"">
  <option value=""></option>
  <option>ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
  <option>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
  <option >ปริญญาตรี</option>
  </select>
</div>



<br>
<!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">สาขา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input id="select2" name="department" type="text" value="<?php echo $result["department"]; ?>"style="background-color: #FFFFFF;" class="form-control selectpicker" placeholder="สาขา" aria-label="สาขา" aria-describedby="basic-addon2">
  </select>
</div>

<br>
<!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
  <input  name="tel" type="text" value="<?php echo $result["tel"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์" aria-label="เบอร์โทรศัพท์" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">บัตรประจำตัวประชาชน</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-id-card"></i></span>
  <input name="id_card" type="text" value="<?php echo $result["id_card"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="บัตรประจำตัวประชาชน" aria-label="บัตรประจำตัวประชาชน" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">E-mail</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
  <input  name="email" type="text" value="<?php echo $result["email"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">วันเกิด</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cake-candles"></i></span>
  <input name="birthdate" type="text" value="<?php echo $result["birthdate"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="วันเกิด" aria-label="วันเกิด" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">สัญชาติ</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-globe"></i></span>
  <input name="nationality" type="text" value="<?php echo $result["nationality"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="สัญชาติ" aria-label="สัญชาติ" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ศาสนา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cross"></i></span>
  <input name="religion" type="text" value="<?php echo $result["religion"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="ศาสนา" aria-label="ศาสนา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ที่อยู่</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="ads" type="text" value="<?php echo $result["ads"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="ที่อยู่" aria-label="ที่อยู่" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล บิดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="dad_name" type="text" value="<?php echo $result["dad_name"]; ?>"  style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล บิดา" aria-label="ชื่อ - สกุล บิดา" aria-describedby="basic-addon2">
</div>

<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ บิดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="dad_tel" type="text" value="<?php echo $result["dad_tel"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ บิดา" aria-label="เบอร์โทรศัพท์ บิดา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล มารดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="mom_name" type="text" value="<?php echo $result["mom_name"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล มารดา" aria-label="ชื่อ - สกุล มารดา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ มารดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="mom_tel" type="text" value="<?php echo $result["mom_tel"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ มารดา" aria-label="เบอร์โทรศัพท์ มารดา" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล ผู้ปกครอง</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="parents_name" type="text" value="<?php echo $result["parents_name"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล ผู้ปกครอง" aria-label="ชื่อ - สกุล ผู้ปกครอง" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ ผู้ปกครอง</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  name="parents_tel"type="text" value="<?php echo $result["parents_tel"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ ผู้ปกครอง" aria-label="เบอร์โทรศัพท์ ผู้ปกครอง" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">สถานศึกษาเก่า</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  name="school" type="text" value="<?php echo $result["school"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="สถานศึกษาเก่า" aria-label="สถานศึกษาเก่า" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เกรดเฉลี่ยสะสม</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  name="GPA" type="text" value="<?php echo $result["GPA"]; ?>"   style="background-color: #FFFFFF;" class="form-control " placeholder="เกรดเฉลี่ยสะสม" aria-label="เกรดเฉลี่ยสะสม" aria-describedby="basic-addon2">
</div>
<!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">สถานะ</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <select name="status"class="form-select" style="background-color: #FFFFFF;" class="form-control " placeholder="สถานะ" aria-label="สถานะ" aria-describedby="basic-addon2">
  <option>เสร็จสิ้น</option>
  <option>กำลังรอตรวจสอบ</option>
  <option>ไม่สำเร็จ</option>
  </select>
</div>
ิ<br>

<div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <input type="submit" name="update"class="btn btn-primary" value="บันทึก"></input>
                          </div>
        </div>
    </div>
</div>
        </div>

            
        </select>
        </div>
                     
                      
                  </div>
              </div>
              </form>
                          </div>
                          </div>
            </div>
    </div>
    </form>
     <!-- Modal-delete-->
     <div class="modal fade" id="Modal-manage-user-delete<?php echo $result['id_student']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="check-manage-user.php" method="post" name="delete">
                        <input name="id_student" type="text" value="<?php echo $result['id_student'];?> " readonly hidden>
                    <!-- Add your content here, such as a confirmation message or additional details -->
                    คุณต้องการลบผู้ใช้ <?php echo "ID : ".$result['id_student']?>&nbsp;<?php echo $result['firstname'];  echo"&nbsp;".$result['lastname']?> ใช่หรือไม่
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php }  ?>
    <?php 

   
   
    ?>

</tr>
</tbody>

    </table>
    
    </div>
  </div>
 </div>




   

     
        <!-- Modal Insert-->
       
        <div class="modal fade" id="Modal-manage-user-insert" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มข้อมูล</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                        
    <form name="manage-user-insert" action="check-manage-user.php" method="post">
    <div class="modal-body">
    <div class="mb-3">
    <div class=" input-group">
               <label class="col-md-3"> ชื่อ</label>
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
  <input name="firstname"type="text" required  value=""   style="background-color: #FFFFFF;" class="form-control" placeholder="ชื่อ" aria-label="ชื่อ" aria-describedby="basic-addon1">
</div>
<br>
<div class=" input-group">
               <label class="col-md-3"> นามสกุล</label>
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
  <input name="lastname"type="text" value=""   style="background-color: #FFFFFF;" class="form-control" placeholder="สกุล" aria-label="ชื่อ" aria-describedby="basic-addon1">
</div>
<br>
<!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">ระดับการศึกษา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <select id="select1" name="grade_level"type="text" class="form-control selectpicker" require value=""  style="background-color: #FFFFFF;" placeholder="ระดับการศึกษา" aria-label="ระดับการศึกษา" aria-describedby="basic-addon2"onchange="updateOptions()">
  <option value="" ></option>
  <option>ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
  <option>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
  <option >ปริญญาตรี</option>
  </select>
</div>
<br>
<!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">สาขา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input id="select2" name="department" type="text" value=""   style="background-color: #FFFFFF;" class="form-control selectpicker" placeholder="สาขา" aria-label="สาขา" aria-describedby="basic-addon2">
  
</div>

<br>
       <!--INPUT -->
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
  <input  name="tel" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์" aria-label="เบอร์โทรศัพท์" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">บัตรประจำตัวประชาชน</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-id-card"></i></span>
  <input name="id_card" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="บัตรประจำตัวประชาชน" aria-label="บัตรประจำตัวประชาชน" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">E-mail</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
  <input  name="email" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">วันเกิด</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cake-candles"></i></span>
  <input name="birthdate" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="วันเกิด" aria-label="วันเกิด" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">สัญชาติ</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-globe"></i></span>
  <input name="nationality" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="สัญชาติ" aria-label="สัญชาติ" aria-describedby="basic-addon2">
</div>
        <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ศาสนา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cross"></i></span>
  <input name="religion" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="ศาสนา" aria-label="ศาสนา" aria-describedby="basic-addon2">
</div>
      <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ที่อยู่</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="ads" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="ที่อยู่" aria-label="ที่อยู่" aria-describedby="basic-addon2">
</div>
        <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล บิดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="dad_name" type="text" value=""  style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล บิดา" aria-label="ชื่อ - สกุล บิดา" aria-describedby="basic-addon2">
</div>
        <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ บิดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="dad_tel" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ บิดา" aria-label="เบอร์โทรศัพท์ บิดา" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล มารดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="mom_name" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล มารดา" aria-label="ชื่อ - สกุล มารดา" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ มารดา</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="mom_tel" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ มารดา" aria-label="เบอร์โทรศัพท์ มารดา" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">ชื่อ - สกุล ผู้ปกครอง</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input name="parents_name" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล ผู้ปกครอง" aria-label="ชื่อ - สกุล ผู้ปกครอง" aria-describedby="basic-addon2">
</div>
        <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เบอร์โทรศัพท์ ผู้ปกครอง</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  name="parents_tel"type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ ผู้ปกครอง" aria-label="เบอร์โทรศัพท์ ผู้ปกครอง" aria-describedby="basic-addon2">
</div>
        <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">สถานศึกษาเก่า</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  name="school" type="text" value=""   style="background-color: #FFFFFF;" class="form-control " placeholder="สถานศึกษาเก่า" aria-label="สถานศึกษาเก่า" aria-describedby="basic-addon2">
</div>
       <!--INPUT -->
<br>
<div class=" mt-1 input-group">
<label class="col-md-3">เกรดเฉลี่ยสะสม</label>
  <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
  <input  name="GPA" type="text" value="" required  style="background-color: #FFFFFF;" class="form-control " placeholder="เกรดเฉลี่ยสะสม" aria-label="เกรดเฉลี่ยสะสม" aria-describedby="basic-addon2">
</div>
            </div>     
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <input type="submit" name="insert"class="btn btn-primary" value="บันทึก"></input>
                          </div>
                      </div>
                  </div>
              </div>
              </form>
            
</li>

    <br><br>  
        </a>
        </li>
        </ul>
        </nav>
        </div>
        </div>
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