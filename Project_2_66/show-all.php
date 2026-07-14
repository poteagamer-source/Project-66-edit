<!DOCTYPE html>
<html>
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
<head>
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
            background-color: #f2f2f2;
        }
    </style>
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
        session_start();
        include('connect.php');
        ?>

    <h2>ข้อมูลผู้สมัครสอบ</h2>
    <table>
        <tr>
            <th>ลำดับที่</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>รหัสประจำตัวประชา</th>
            <th>เบอร์โทร</th>
            <th>สาขา</th>
            <th>อีเมล</th>
        </tr>
        <tr>
        <?php 
        
       
        $sql = "SELECT * FROM tb_student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_student"] . "</td>";
                echo "<td>" . $row["firstname"] . "</td>";
                echo "<td>" . $row["lastname"] . "</td>";
                echo "<td>" . $row["id_card"] . "</td>";
                echo "<td>" . $row["tel"] . "</td>";
                echo "<td>" . $row["department"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
           
       
    </table>

</body>

</html>
