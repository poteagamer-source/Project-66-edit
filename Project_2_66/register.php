<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CodingLab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    </style>
   <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>สร้างบัญชีผู้ใช้</span></div>
            <form action="checkregister.php" method="post">
           
           
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" id="firstname" name="firstname" placeholder="ชื่อ" >
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="text" id="lastname" name="lastname" placeholder="นามสกุล" >
                </div>
                <div class="row">
                    <i class="fa-solid fa-calendar-days"></i>
                    <input type="date" id="birthdate" name="birthdate" placeholder="วันเดือนปีเกิด" >
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="text" id="id_card" name="id_card" placeholder="รหัสประจำตัวประชาชน 13 หลัก" >
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="text" id="email" name="email" placeholder="E-mail" >
                </div>
                
                <span id="passwordError" class="error"></span>
               
                <div class="row button">
                    <input type="submit" name="reg" value="Register">
                </div>
                <div class="signup-link">Have an account?<a href="login.php">Let's Login !!!</a></div>
            </form>
        </div>
    </div>
    
</body>

</html>
