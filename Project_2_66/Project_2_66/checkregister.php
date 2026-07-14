<?php 

    session_start();

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
            header("refresh:1 url=http://localhost/Project_2_66/register.php");
            exit;
        } else {
          

            $query = "INSERT INTO tb_register (username, pass, userrole)
                        VALUE ('$username', '$passwordhash','member')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>alert('Register Successfully');</script>";
                header("refresh:1 url=http://localhost/Project_2_66/login.php");
            } else {
                echo "<script>alert('Something went wrong !!');</script>";
                header("refresh:1 url=http://localhost/Project_2_66/register.php");
            }
        }

    }

