<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!--<?php
    require_once "connect.php";

   $sql = " SELECT * FROM tb_student ";
   $result = $conn->query($sql);
   if ($result) {
    // Check if there are rows returned
    if ($result->num_rows > 0) {
        // Fetch and print the data
        while ($row = $result->fetch_assoc()) {
            echo "Column 1: " . $row['firstname'] . ", Column 2: " . $row['lastname'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Blocks - Centered A4 Size</title>
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
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center; /* Center the container horizontally */
        }

        .block {
            width: 150mm; /* Adjust width based on your design */
            height: 100mm; /* Adjust height based on your design */
            padding: 10mm; /* Adjust padding based on your design */
            border: 2px solid #000;
            margin: 10mm; /* Adjust margin based on your design */
        }
        h4{
          text-align:center;
        }
        img{
            align-content:center;
            width: 100px;
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
  
    <div class="container">
        <div class="block">
        <img src="./img/logo.jpg">
            <h4>วิทยาลัยเทคนิคหาดใหญ่</h4>
            <?php echo $row['firstname'];
            ?>
            <!-- Add more content as needed -->
        </div>
        <div class="block">
        <img src="./img/logo.jpg">
            <h4>วิทยาลัยเทคนิคหาดใหญ่</h4>
            
            <!-- Add more content as needed -->
        </div>
    </div>
</body>
</html>
