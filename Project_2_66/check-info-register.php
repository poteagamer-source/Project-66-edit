<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php 
    include("connect.php");
?>

<?php
    if(isset($_POST['check-id']))
    {
        $id_card = $_POST['id_card'];
        $sql = "SELECT * FROM tb_student WHERE id_card='$id_card'"; 
        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
        $_SESSION['id_card_check'] = $row['id_card'];
        $_SESSION['pre_name_check'] = $row['pre_name'];
        $_SESSION['firstname_check'] = $row['firstname'];
        $_SESSION['lastname_check'] = $row['lastname'];
        $_SESSION['department_check'] = $row['department'];
        $_SESSION['status_value'] = $row['status_value'];
        
        header("refresh:1 url=/info-register.php");
        exit();
    }
    else{
        echo"<script>alert('รหัสประจำตัวประชาชนไม่ถูกต้อง');</script>";
    }
?>
