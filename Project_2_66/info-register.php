<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
     <!-- Bootstrap core JavaScript-->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sb-admin-2.min.js"></script>
<style>
  .navbar-brand, .navbar-nav .nav-link {
    font-family: 'kanit', cursive; /* เปลี่ยน 'Charm' เป็นชื่อฟอนต์ที่คุณต้องการใช้ */
  }
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
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
    <?php
    include("connect.php")
      ?>
    

     
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/index.php">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about.php">รายละเอียด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register-exam.php">ลงทะเบียนสมัคร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/info-register.php">ตรวจสอบผล</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">ช่องทางการติดต่อ</a>
                </li>
                <?php
                if (isset($_SESSION['userrole'])) {
                  if ($_SESSION['userrole'] == 'admin') {
                    echo '<li class="nav-item">
                                <a class="nav-link" href="adminindex.php">Admin panel</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">-- <b>' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . '</b></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                               
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                    </a>
                                </div>
                            </li>';
                  } elseif ($_SESSION['userrole'] == 'staff') {
                    echo '<li class="nav-item">
                                <a class="nav-link" href="staff.php">Staff panel</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">-- <b>' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . '</b></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                 
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> 
                                    </a>
                                </div>
                            </li>';
                  } else {
                    echo '
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">-- <b>' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . '</b></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                       
                          <a class="dropdown-item" href="/logout.php" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                          </a>
                      </div>
                  </li>';
                  }
                } else {
                  echo '<li class="nav-item">
                            <a class="nav-link" href="/login.php">เข้าสู่ระบบ</a>
                        </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
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
<div class="card">
  <h5 class="card-header">แบบฟอร์มตรวจสอบข้อมูล</h5>
  <div class="card-body">
    <h5 class="card-title">ตรวจสอบข้อมูลการสมัคร</h5>
    <form action="check-info-register.php" method="post"> 
    <div class="form-group">
        <div class="col-md-4 input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <input name="id_card" class="form-control" placeholder="รหัสประจำตัวประชาชน 13 หลัก" type="text">
            <div class="input-group-btn">
                <button type="submit" name="check-id" class="btn btn-default">
                    <i class="glyphicon glyphicon-search"></i> ตรวจสอบ
                </button>
            </div>
        </div>
    </div>
</form>
  </div>
</div>
<!-- Form Name -->
<?php

?>

<?php
if (isset($_SESSION['id_card_check'])) {
  $id_card = $_SESSION['id_card_check'];
  $sql = "SELECT * FROM tb_student WHERE id_card = '$id_card'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $_SESSION['id_student'] = $row['id_student'];
  ?>
          <div class="card-body">
      <blockquote class="blockquote mb-0">
    
      <br><br>
      <div class="card">
    <div class="card-body">
      <h5 class="card-title">สถานะการสมัคร</h5>
    
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ชื่อ - นามสกุล</th>
            <th scope="col">สาขาวิชา</th>
            <th scope="col">สถานะการสมัคร</th>
            <th scope="col">หมายเหตุ</th>
          </tr>
        </thead>
        <tbody>
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
          <tr>
            <td><?php echo $_SESSION['pre_name_check'] . $_SESSION['firstname_check'] . "&nbsp;" . $_SESSION['lastname_check']; ?></td>
            <td><?php echo $_SESSION['department_check']; ?></td>
            <td>
            <?php
            if ($_SESSION['status_value'] == 'เสร็จสิ้น') {
              ?><i class="fa-solid fa-check"><?php echo "&nbsp;" . $_SESSION['status_value'] . "</td></i>";
            } elseif ($_SESSION['status_value'] == 'ไม่สำเร็จ') {
              ?><i class="fa-solid fa-x"><?php echo "&nbsp;" . $_SESSION['status_value'] . "</td></i>";
            } else {
              ?><i class="fa fa-spinner"><?php echo "&nbsp;" . $_SESSION['status_value'] . "</td></i>";
            }
            ?>
              <td>
            
      
                <?php

                if ($_SESSION['status_value'] == 'เสร็จสิ้น') {
                  ?> print
                <?php } elseif ($_SESSION['status_value'] == 'ไม่สำเร็จ') {
                  echo " <p name='info' class='' data-bs-toggle='modal' data-bs-target='#Modal-manage-user-fix'>
                แก้ไขข้อมูล
               </p>";
                  ?><div class="modal fade" id="Modal-manage-user-fix" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                   <div class="modal-dialog modal-dialog-centered modal-xl">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลส่วนตัว</h5>
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                       <!-- img -->
                               <div class="container">
                               <br>
                               <img class="col-md- -5"src='<?php echo $row["img"]; ?>' alt='Uploaded Image' width='250px'><br>
               </div>
                           <br>
           
                  
                           <div class=" input-group">
                              <label class="col-md-3"> ชื่อ - สกุล </label>
                 <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                 <input type="text" value="<?php echo $row["firstname"] . " " . $row["lastname"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control" placeholder="ชื่อ - สกุล" aria-label="ชื่อ - สกุล" aria-describedby="basic-addon1">
               </div>
               <br>
               <!--INPUT -->
               <div class=" mt-1 input-group">
               <label class="col-md-3">ระดับการศึกษา</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
                 <input  type="text" value="<?php echo $row["grade_level"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ระดับการศึกษา" aria-label="ระดับการศึกษา" aria-describedby="basic-addon2">
               </div>
               <br>
               <!--INPUT -->
               <div class=" mt-1 input-group">
               <label class="col-md-3">สาขา</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
                 <input  type="text" value="<?php echo $row["department"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สาขา" aria-label="สาขา" aria-describedby="basic-addon2">
               </div>
               <br>
               <!--INPUT -->
               <div class=" mt-1 input-group">
               <label class="col-md-3">เบอร์โทรศัพท์</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
                 <input  type="text" value="<?php echo $row["tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์" aria-label="เบอร์โทรศัพท์" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">บัตรประจำตัวประชาชน</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-id-card"></i></i></span>
                 <input  type="text" value="<?php echo $row["id_card"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="บัตรประจำตัวประชาชน" aria-label="บัตรประจำตัวประชาชน" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">E-mail</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
                 <input  type="text" value="<?php echo $row["email"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">วันเกิด</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cake-candles"></i></span>
                 <input  type="text" value="<?php echo $row["birthdate"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="วันเกิด" aria-label="วันเกิด" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">สัญชาติ</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-globe"></i></span>
                 <input  type="text" value="<?php echo $row["nationality"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สัญชาติ" aria-label="สัญชาติ" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">ศาสนา</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cross"></i></span>
                 <input  type="text" value="<?php echo $row["religion"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ศาสนา" aria-label="ศาสนา" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">ที่อยู่</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
                 <input  type="text" value="<?php echo $row["ads"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ที่อยู่" aria-label="ที่อยู่" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <hr class="divider" style="border-top: 1px solid #000;">
               <h3>ข้อมูลผู้ปกครอง</h3>
               <div class=" mt-1 input-group">
               <label class="col-md-3">ชื่อ - สกุล บิดา</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
                 <input  type="text" value="<?php echo $row["dad_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล บิดา" aria-label="ชื่อ - สกุล บิดา" aria-describedby="basic-addon2">
               </div>
           
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">เบอร์โทรศัพท์ บิดา</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
                 <input  type="text" value="<?php echo $row["dad_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ บิดา" aria-label="เบอร์โทรศัพท์ บิดา" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">ชื่อ - สกุล มารดา</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
                 <input  type="text" value="<?php echo $row["mom_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล มารดา" aria-label="ชื่อ - สกุล มารดา" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">เบอร์โทรศัพท์ มารดา</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
                 <input  type="text" value="<?php echo $row["mom_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ มารดา" aria-label="เบอร์โทรศัพท์ มารดา" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">ชื่อ - สกุล ผู้ปกครอง</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
                 <input  type="text" value="<?php echo $row["parents_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล ผู้ปกครอง" aria-label="ชื่อ - สกุล ผู้ปกครอง" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">เบอร์โทรศัพท์ ผู้ปกครอง</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
                 <input  type="text" value="<?php echo $row["parents_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ ผู้ปกครอง" aria-label="เบอร์โทรศัพท์ ผู้ปกครอง" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">สถานศึกษาเก่า</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-school"></i></span>
                 <input  type="text" value="<?php echo $row["school"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สถานศึกษาเก่า" aria-label="สถานศึกษาเก่า" aria-describedby="basic-addon2">
               </div>
               <!--INPUT -->
               <br>
               <div class=" mt-1 input-group">
               <label class="col-md-3">เกรดเฉลี่ยสะสม</label>
                 <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
                 <input  type="text" value="<?php echo $row["parents_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เกรดเฉลี่ยสะสม" aria-label="เกรดเฉลี่ยสะสม" aria-describedby="basic-addon2">
               </div>
               <br>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           </div>
                       </div>
                   </div>
               </div>
                       </div>
               <?php } else {
                  ?>  <p name='info' class='' data-bs-toggle='modal' data-bs-target='#Modal-manage-user-info'>
                   ดูข้อมูล
                  </p>
    </style>
               <div class="modal fade" id="Modal-manage-user-info" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลส่วนตัว</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
            <!-- img -->
                    <div class="container">
                    <br>
                    <img class="col-md- -5"src='<?php echo $row["img"]; ?>' alt='Uploaded Image' width='250px'><br>
    </div>
                <br>

       
                <div class=" input-group">
                   <label class="col-md-3"> ชื่อ - สกุล </label>
      <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
      <input type="text" value="<?php echo $row["firstname"] . " " . $row["lastname"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control" placeholder="ชื่อ - สกุล" aria-label="ชื่อ - สกุล" aria-describedby="basic-addon1">
    </div>
    <br>
    <!--INPUT -->
    <div class=" mt-1 input-group">
    <label class="col-md-3">ระดับการศึกษา</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
      <input  type="text" value="<?php echo $row["grade_level"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ระดับการศึกษา" aria-label="ระดับการศึกษา" aria-describedby="basic-addon2">
    </div>
    <br>
    <!--INPUT -->
    <div class=" mt-1 input-group">
    <label class="col-md-3">สาขา</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
      <input  type="text" value="<?php echo $row["department"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สาขา" aria-label="สาขา" aria-describedby="basic-addon2">
    </div>
    <br>
    <!--INPUT -->
    <div class=" mt-1 input-group">
    <label class="col-md-3">เบอร์โทรศัพท์</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
      <input  type="text" value="<?php echo $row["tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์" aria-label="เบอร์โทรศัพท์" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">บัตรประจำตัวประชาชน</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-id-card"></i></i></span>
      <input  type="text" value="<?php echo $row["id_card"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="บัตรประจำตัวประชาชน" aria-label="บัตรประจำตัวประชาชน" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">E-mail</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
      <input  type="text" value="<?php echo $row["email"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">วันเกิด</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cake-candles"></i></span>
      <input  type="text" value="<?php echo $row["birthdate"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="วันเกิด" aria-label="วันเกิด" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">สัญชาติ</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-globe"></i></span>
      <input  type="text" value="<?php echo $row["nationality"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สัญชาติ" aria-label="สัญชาติ" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">ศาสนา</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-cross"></i></span>
      <input  type="text" value="<?php echo $row["religion"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ศาสนา" aria-label="ศาสนา" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">ที่อยู่</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
      <input  type="text" value="<?php echo $row["ads"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ที่อยู่" aria-label="ที่อยู่" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <hr class="divider" style="border-top: 1px solid #000;">
    <h3>ข้อมูลผู้ปกครอง</h3>
    <div class=" mt-1 input-group">
    <label class="col-md-3">ชื่อ - สกุล บิดา</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
      <input  type="text" value="<?php echo $row["dad_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล บิดา" aria-label="ชื่อ - สกุล บิดา" aria-describedby="basic-addon2">
    </div>

    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">เบอร์โทรศัพท์ บิดา</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
      <input  type="text" value="<?php echo $row["dad_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ บิดา" aria-label="เบอร์โทรศัพท์ บิดา" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">ชื่อ - สกุล มารดา</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
      <input  type="text" value="<?php echo $row["mom_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล มารดา" aria-label="ชื่อ - สกุล มารดา" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">เบอร์โทรศัพท์ มารดา</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
      <input  type="text" value="<?php echo $row["mom_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ มารดา" aria-label="เบอร์โทรศัพท์ มารดา" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">ชื่อ - สกุล ผู้ปกครอง</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
      <input  type="text" value="<?php echo $row["parents_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="ชื่อ - สกุล ผู้ปกครอง" aria-label="ชื่อ - สกุล ผู้ปกครอง" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">เบอร์โทรศัพท์ ผู้ปกครอง</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-phone"></i></span>
      <input  type="text" value="<?php echo $row["parents_tel"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เบอร์โทรศัพท์ ผู้ปกครอง" aria-label="เบอร์โทรศัพท์ ผู้ปกครอง" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">สถานศึกษาเก่า</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-school"></i></span>
      <input  type="text" value="<?php echo $row["school"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="สถานศึกษาเก่า" aria-label="สถานศึกษาเก่า" aria-describedby="basic-addon2">
    </div>
    <!--INPUT -->
    <br>
    <div class=" mt-1 input-group">
    <label class="col-md-3">เกรดเฉลี่ยสะสม</label>
      <span class=" input-group-text" id="basic-addon2"><i class="fa-solid fa-graduation-cap"></i></span>
      <input  type="text" value="<?php echo $row["parents_name"]; ?>" readonly style="background-color: #FFFFFF;" class="form-control " placeholder="เกรดเฉลี่ยสะสม" aria-label="เกรดเฉลี่ยสะสม" aria-describedby="basic-addon2">
    </div>
    <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
            </div>
     





               <?php }
                ?>
              </td>   
          </tr>
        </tbody>
      </table>

    </div>
  </div>
        <?php

        ?>
         
              <?php

              unset($_SESSION['id_card_check']);
              unset($_SESSION['firstname_check']);
              unset($_SESSION['lastname_check']);
              unset($_SESSION['department_check']);
              unset($_SESSION['status_value']);

}
?>

  
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>