<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CodingLab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    </style>
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Register</span></div>
            <form action="checkregister.php" method="post">
           
           
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" name="username" placeholder="Username" >
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="pass" name="pass" placeholder="Password" >
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="confirmpass" name="confirmpass" placeholder="Confirm Password" >
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
