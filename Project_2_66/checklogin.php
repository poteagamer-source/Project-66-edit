<?php 
    session_start();

    if (isset($_POST['log'])) {

        include('connect.php');

        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM tb_register WHERE id_card = '$username'";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['userid'] = $row['ID_User'];
            $_SESSION['username'] = $row['id_card'];
            $_SESSION['birthdate'] = $row['birthdate'];
            $_SESSION['userrole'] = $row['userrole'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            echo "<script>alert('เข้าสู่ระบบ');</script>";
            echo "<script>window.location.href='http://localhost/Project_2_66/index.php';</script>";
            exit;
        } else {
            echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');</script>";
            echo "<script>window.location.href='http://localhost/Project_2_66/login.php';</script>";
            exit;
        }
    }
?>
