<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="script.js"></script>
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
        <div class="title"><span>Login Form</span></div>
        <form action="checklogin.php" method="post">
        
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass"placeholder="Password" required>
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