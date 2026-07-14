<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php 


    require_once "connect.php";

    if (isset($_POST['reg'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthdate = $_POST['birthdate'];
        $id_card = $_POST['id_card'];
        $email = $_POST['email'];

       
        $dateTime = new DateTime($birthdate);

        // Format the date as "03012004"
        $formattedDate = $dateTime->format('dmY');

           

           

           
           



        $user_check = "SELECT * FROM tb_register WHERE id_card = '$id_card' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);
        if($user){
            echo "<script>alert('รหัสบัตรประชาชนนี้เคยใช้สมัครบัญชีแล้ว !!!');</script>";
            header("refresh:1 url=/register.php");
            
        }else{

            $query = "INSERT INTO tb_register (firstname, lastname, birthdate, id_card, email, userrole)
                        VALUE ('$firstname', '$lastname','$formattedDate','$id_card','$email','member')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>alert('สมัครสมาชิกเสร็จสิ้น !!!');</script>";
                header("refresh:1 url=/login.php");
            } else {
                echo "<script>alert('มีบางอย่างผิดพลาดโปรดตรวจสอบอีกครั้ง !!!');</script>";
                header("refresh:1 url=/register.php");
            }
        }
      
          

        }
    

