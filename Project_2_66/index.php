<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once __DIR__ . '/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รับสมัครนักศึกษา</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
    media="screen">
  <style>
    .navbar-brand,
    .navbar-nav .nav-link {
      font-family: 'kanit', cursive;
      /* เปลี่ยน 'Charm' เป็นชื่อฟอนต์ที่คุณต้องการใช้ */
    }

    .container-fluid {}

    .carouselExampleAutoplaying {
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


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">รายละเอียด</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register-exam.php">ลงทะเบียนสมัคร</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info-register.php">ตรวจสอบผล</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="info-register.php">ช่องทางการติดต่อ</a>
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
                       
                          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                          </a>
                      </div>
                  </li>';
            }
          } else {
            echo '<li class="nav-item">
                            <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
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
      overflow-y: auto;
      /* or overflow-y: scroll; */
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
  <div class="banner_section">
    <section class="container">
      <div class="slider-wrapper">
        <div class="slider">
          <img id="slider-1" src="./images/htc1.png" alt="" />
          <img id="slider-2" src="./images/htc2.png" alt="" />
          <img id="slider-3" src="./images/htc3.png" alt="" />
        </div>

      </div>
  </div>
  </section>
  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="news_taital">หลักสูตรที่เปิดสอน</h1>
      <p class="tempor_text" style="font-size: 20px;">หลักสูตรที่เปิดสอนมีทั้ง3ระดับการศึกษาประกอบด้วย ปวช ปวส ปริญญาตรี
      </p>
      <div class="banner_section_2">
        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <div class="box_main">
              <div class="internet_icon_2"></div>
              <h4 class="broadband_text"><a href="#">ระดับประกาศนียบัตรวิชาชีพ (ปวช)
                </a></h4>
              <p class="many_text">เปิดรับ 500 คน ประกอบไปด้วย 17 หลักสูตร
              <p class="many_text">1.สาขาวิชาช่างยนต์</p>
              <p class="many_text">2.สาขาวิชาช่างจักยานยนต์และเครื่องยนต์เล็ก</p>
              <p class="many_text">3.สาขาวิชาช่างกลโรงงาน</p>
              <p class="many_text">4.สาขาวิชาช่างเชื่อมโลหะ</p>
              <p class="many_text">5.สาขาวิชาอิเล็กทรอนิกส์</p>
              <p class="many_text">6.สาขาวิชาช่างไฟฟ้ากำลัง</p>
              <p class="many_text">7.สาขาวิชาช่างเทคนิคคอมพิวเตอร์</p>
              <p class="many_text">8.สาขาวิชาช่างเมคคาทรอนิกส์</p>
              <p class="many_text">9.สาขาวิชาช่างก่อสร้าง</p>
              <p class="many_text">10.สาขาวิชาช่างเครื่องเรือนและตกแต่งภายใน</p>
              <p class="many_text">11.สาขาวิชาสถาปัตยกรรม</p>
              <p class="many_text">12.สาขาวิชาช่างเครื่องทำวามเย็นและเครื่องปรับอากาศ</p>
              <p class="many_text">13.สำรวจ</p>
              <p class="many_text">14.โยธา</p>
              <p class="many_text">15.สาขาวิชาโลจิสติกส์</p>
              <p class="many_text">16.สาขาวิชาการโปรแกรมคอมพิวเตอร์เว็ปและอุปกรณ์</p>
              <p class="many_text">17.สาขาวิชาคอมพิวเตอร์กราฟฟิคและอนิเมชั่น</p>
              </p>
            </div>

          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="box_main">
              <div class="internet_icon_2"></div>
              <h4 class="broadband_text"><a href="#">ระดับประกาศนียบัตรวิชาชีพขั้นสูง (ปวส)</a></h4>
              <p class="many_text">
              <p class="many_text">เปิดรับ 500 คน ประกอบไปด้วย 15 หลักสูตร
              <p class="many_text">1.สาขางานช่างยนต์</p>
              <p class="many_text">2.สาขางานช่างจักยานยนต์ไฟฟ้า</p>
              <p class="many_text">3.สาขางานช่างเครื่องมือกล</p>
              <p class="many_text">4.สาขางานเทคโนโลยีงานเชื่อมโครงสร้างโลหะ</p>
              <p class="many_text">5.สาขางานไฟฟ้ากำลัง</p>
              <p class="many_text">6.สาขางานไฟฟ้าควบคุม</p>
              <p class="many_text">7.สาขางานอิเล็กทรอนิกส์อุตสาหกรรม สออ.</p>
              <p class="many_text">8.สาขางานเทคโนโลยีระบบโทรมนาคม สทท.</p>
              <p class="many_text">9.สาขางานเทคโนโลยีระบบเครือข่าย สทค.</p>
              <p class="many_text">10.สาขางานวิชาแมคคาทรอนิกส์และหุ่นยนต์</p>
              <p class="many_text">11.สาขางานก่อสร้าง</p>
              <p class="many_text">12.สาขางานตกแต่งภายใน</p>
              <p class="many_text">13.สาขางานเทคโนโลยีปิโตรเลียม</p>
              <p class="many_text">14.สาขางานเทคโนโลยีปิโตรเลียมขุดเจาะ</p>
              <p class="many_text">15.สาขางานสำรวจ</p>
              <p class="many_text">16.สาขางานโยธา</p>
              <p class="many_text">17.สาขาวิชาการโปรแกรมคอมพิวเตอร์เว็ปและอุปกรณ์</p>
              <p class="many_text">18.สาขาวิชาคอมพิวเตอร์กราฟฟิคและอนิเมชั่น</p>
              <p class="many_text">19.สาขางานสถาปัตยกรรม</p>
              </p>
              </p>
            </div>

          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="box_main">
              <div class="internet_icon_2"></div>
              <h4 class="broadband_text"><a href="#">ปริญญาตรี</a></h4>
              <p class="many_text">
              <p class="many_text">เปิดรับ 500 คน ประกอบไปด้วย .. หลักสูตร

              </p>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="news_section layout_padding">
    <div class="container">
      <div class="main">
        <h1 class="h13">ข่าวสารงานประชาสัมพันธ์ <div class="roller">
            <span id="rolltext">วันเวลารับสมัคร<br />
              สำหรับนักศึกษา<br />
              ของวิทยาลัย<br />
              <span id="spare-time"></span><br />
          </div>
        </h1>
      </div>


      &nbsp;
    </div>
  </div>
  <div>

    &nbsp;

  </div>
  <div class="news_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="news-slider" class="owl-carousel">
            <!-- 1 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>19</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 2 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="newzs-grid-box">
                  <h1>20</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 3 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>21</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 4 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>22</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 5 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>23</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 6 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>24</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 7 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>25</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 8 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>26</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 9 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>27</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
            <!-- 10 -->
            <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>28</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>รับสมัครนักศึกษา</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>.. ......................................</p>
                <a href="#">เพิ่มเติม</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#news-slider").owlCarousel({
        items: 3,
        navigation: true,
        navigationText: ["", ""],
        autoPlay: true
      });
    });
  </script>

  </div>

  </div>


  </div>
  <div class="news_section layout_padding">
    <div class="container">
      <div class="main">
        <h1 class="h13">ข่าวสารงานประชาสัมพันธ์ <div class="roller">
            <span id="rolltext">ประกาศผู้ผ่านการสอบ<br />
              ประกาศผู้มีสิทธิ์สอบ<br />
              ประกาศห้องสอบ<br />
              <span id="spare-time"></span><br />
          </div>
        </h1>
      </div>
      &nbsp;
    </div>
  </div>
 
<div class="news_section layout_padding">
  <?php
  $sql = "SELECT * FROM tb_an";
  $result = @mysqli_query($conn, $sql);
  
  if ($result && mysqli_num_rows($result) > 0) {
      $row = $result->fetch_assoc();
  } else {
      $row = array(
          'an_regis' => 'ยังไม่ประกาศ',
          'an_test' => 'ยังไม่ประกาศ',
          'an_test_result' => 'ยังไม่ประกาศ'
      );
  }

  if ($row['an_regis'] == 'ยังไม่ประกาศ') {
    echo "<h1>ยังไม่ประกาศ</h1>";
  } else {
    ?>
    <div class="container">
    <div class="card-body text-center">
      <!-- ข้อความหัวเรื่องใน card -->
      <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc1.png" alt="">
                <div class="news-grid-box">
                  <h1>21</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>ประกาศผู้ผ่านการสอบ</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="show-all-student.php">เพิ่มเติม</a>
              </div>
    </div>
    </div>

  <?php }
  if ($row['an_test'] == 'ยังไม่ประกาศ') {
    echo "<h1>ยังไม่ประกาศ</h1>";
  } else {
    ?>
      <div class="container">
    <div class="card-body text-center">
      <!-- ข้อความหัวเรื่องใน card -->
      <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc2.png" alt="">
                <div class="news-grid-box">
                  <h1>21</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>ประกาศผู้มีสิทธิ์สอบ</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="show-all-student.php">เพิ่มเติม</a>
              </div>
    </div>
    </div>
  <?php }

  ?>
  <?php
  if ($row['an_test_result'] == 'ยังไม่ประกาศ') {
    echo "<h1>ยังไม่ประกาศ</h1>";
  } else {
    ?>
    <div class="container">
    <div class="card-body text-center">
      <!-- ข้อความหัวเรื่องใน card -->
      <div class="news-grid">
              <div class="news-grid-image"><img src="images/htc3.png" alt="">
                <div class="news-grid-box">
                  <h1>21</h1>
                  <p>Sep</p>
                </div>
              </div>
              <div class="news-grid-txt">
                <span>ประกาศห้องสอบ</span>
                <h2>ปวช ปวส </h2>
                <ul>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> Sep 19, 2020</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Admin</li>
                </ul>
                <p>................................................</p>
                <a href="show-all-student.php">เพิ่มเติม</a>
              </div>
    </div>
    </div>
  <?php }

  ?>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>

  </div>
  </div>
  </div>
  
  <!-- footer section start -->
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


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
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

  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>