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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="style.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sb-admin-2.min.js"></script>

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
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<style>
  .navbar-brand, .navbar-nav .nav-link {
    font-family: 'kanit', cursive; /* เปลี่ยน 'Charm' เป็นชื่อฟอนต์ที่คุณต้องการใช้ */
  }
  .container-fluid{
    
  }
  .carouselExampleAutoplaying{
    align-items: center;
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
    ?>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/index.php">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/about.php">รายละเอียด</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register-exam.php">ลงทะเบียนสมัคร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info-register.php">ตรวจสอบผล</a>
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

<!-- BODY -->
<style>
  .card {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
    border: 1px solid #ccc;
  }

  img {
    max-width: 100%;
    height: auto;
  }
  body {
    overflow-y: auto; /* or overflow-y: scroll; */
}

  

</style>
<div class="banner_section0">
    </div>
   
    <!-- banner section start -->
    <div class="news_section layout_padding">
    <div class="container">
      <div class="textep">รับสมัครนักศึกษา 2566</div>
    </div>
  </div>
      <!-- about section start -->
      <div class="banner_section layout_padding">
      <section class="container">
        <div class="slider-wrapper">
         
            <img id="slider-1" src="./images/htc1.png" alt=""/>
            <img id="slider-2" src="./images/htc2.png" alt=""/>
            <img id="slider-3" src="./images/htc3.png" alt=""/>
         
          
        </div>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <!-- about section end -->
    
    
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
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
  
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 <!-- Javascript files-->
 <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    

</body>
</html>