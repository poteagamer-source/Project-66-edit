<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ข้อมูลนักเรียน-นักศึกษา / การจัดห้องสอบ</title>
    <!-- Font Awesome-->
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
<!-- Table -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Custom styles for this template-->

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
  

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
  <div class="card-header">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> ประกาศผลผู้ที่มีสิทธิ์สอบ</h1>
                        
                
</div>
  </div>
  
  
  <div class="card-body">
  <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        
        <tr>
            <th>รหัสสาขาวิชา</th>                   
            <th>อักษรย่อ</th>
            <th>สาขาวิชา/สาขางาน</th>
           
            <th>จำนวนรับ</th>
            <th>จำนวนผู้มีสิทธิ์สอบ</th>
     
           
            <th>หมายเหตุ</th>
        </tr>
</thead>
            <tfoot>
                
                <tr>
                <th>รหัสสาขาวิชา</th>                   
                <th>อักษรย่อ</th>
            <th>สาขาวิชา/สาขางาน</th>
            
            <th>จำนวนรับ</th>
            <th>จำนวนผู้มีสิทธิ์สอบ</th>
            
           
            <th>หมายเหตุ</th>
            
</tr>

</tfoot>
            <?php
        $sql = "SELECT department_id, department_name, department_short, department_student FROM tb_department";
        $stmt = $conn->prepare($sql);
        $stmt->execute();                                
        $result = $stmt->get_result();
        
        // Loop ในแต่ละแถวของผลลัพธ์จากการ query
        while ($row = $result->fetch_assoc()) {
            $department_name = $row['department_name'];
            $status_value = 'เสร็จสิ้น';
            // สร้างคำสั่ง SQL สำหรับการนับจำนวนนักเรียนในแต่ละแผนก
            $sql2 = "SELECT COUNT(*) AS student_count FROM tb_student WHERE department = ?";
            $sql3 = "SELECT COUNT(status_value) as verify_count FROM tb_student WHERE status_value = '$status_value' AND department = '$department_name'";
            
            // เรียกใช้คำสั่ง prepare() สำหรับ SQL ของการนับนักเรียน
            $stmt2 = $conn->prepare($sql2);
            $stmt3 = $conn->prepare($sql3);
            // ผูกค่าพารามิเตอร์กับชื่อแผนก
            $stmt2->bind_param("s", $department_name);
         
            // ประมวลผลคำสั่ง SQL
            $stmt2->execute();
           
            
            // ดึงผลลัพธ์
            $result2 = $stmt2->get_result();
            $result3 = mysqli_query($conn, $sql3);
            // ดึงจำนวนนักเรียนจากผลลัพธ์
            $row2 = $result2->fetch_row();;
         
            $row3 = $result3->fetch_row();
            $student_count = $row2[0]; // จำนวนนักเรียนในแผนก
            $status= $row3[0];  // จำนวนที่เสร็จสิ้น
            // แสดงข้อมูล
           
            ?>
            <tr>
            <th scope="row"><?= $row['department_id']; ?></th>
            <td><?= $row['department_short']; ?></td>
            <td><?= $row['department_name']; ?></td>
            <td><?= $row['department_student']; ?></td>
     
            <td><?= $status; ?></td>
           
            <td class="text-center"><form name="room" action="show-student-department.php" method="post">
                <input name="depart" type="hidden" require value="<?php echo $row['department_name'];?> ">
                <button type="submit" name="depart-submit">ดูรายชื่อ
             </button>
            </form></td>
       
    
    
    </td>
    <?php }?>
        <?php
        // ปิดคำสั่ง prepare()
        $stmt->close();
        $stmt2->close();
                                 
        
?>

      
    <?php   ?>
    <?php 
    ?>
</tr>
</tbody>

    </table>
    
    </div>
  </div>
 </div>
            </div>     
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