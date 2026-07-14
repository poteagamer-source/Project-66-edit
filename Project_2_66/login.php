<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
     <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
      
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      
      </style>
  </head>
  <body>
    <?php
        session_start();
        include("connect.php");



    ?>
      
   
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>เข้าสู่ระบบ</span></div>
        <form action="checklogin.php" method="post">
        
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="รหัสประจำตัวประชาชน 13 หลัก" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass"placeholder="วันเกิด เช่น 010121999" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" name="log" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>