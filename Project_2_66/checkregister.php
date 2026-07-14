<?php
if (ob_get_level() === 0) {
    ob_start();
}
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<?php 


    require_once "connect.php";

    if (isset($_POST['reg'])) {

        $username = $_POST['username'];
        $pass = $_POST['pass'];
       $confirmpass = $_POST['confirmpass'];

       
        $passwordhash = password_hash($pass, PASSWORD_DEFAULT);

        $user_check = "SELECT * FROM tb_register WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($confirmpass !== $pass) {
            echo "<script>alert('Passwords do not match');</script>";
            header("refresh:1 url=register.php");
            exit;
        } else {
          

            $query = "INSERT INTO tb_register (username, pass, userrole)
                        VALUE ('$username', '$passwordhash','member')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>alert('Register Successfully');</script>";
                header("refresh:1 url=login.php");
            } else {
                echo "<script>alert('Something went wrong !!');</script>";
                header("refresh:1 url=register.php");
            }
        }

    }

