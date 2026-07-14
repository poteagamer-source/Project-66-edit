<?php
if (ob_get_level() === 0) {
    ob_start();
}
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>
<?php 


    if (isset($_POST['username'])) {

        include('connect.php');

        $username = $_POST['username'];
        $pass = $_POST['pass'];
       

        //$query = "SELECT * FROM tb_register WHERE username = '$username' AND pass = '$pass'";
        $query = "SELECT * FROM tb_register WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $passwordhash = $row["pass"];
            if(!password_verify($pass, $passwordhash)) {
                echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
            }
            $_SESSION['userid'] = $row['ID_User'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['userrole'] = $row['userrole'];

            if ($_SESSION['userrole'] == 'admin') {
                header("Location: index.php");
            }

            if ($_SESSION['userrole'] == 'member') {
                header("Location: index.php");
            }
        } else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: index.php");
    }


?>