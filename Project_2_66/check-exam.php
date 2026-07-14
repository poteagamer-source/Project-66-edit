<?php
    session_start();
    require_once "connect.php";
    $pre_name = $_POST['pre_name'];
    $first_name= $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department = $_POST['department'];
    $tel = $_POST['tel'];
    $id_card = $_POST['id_card'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $ads = $_POST['ads'];
    $dad_name = $_POST['dad_name'];
    $dad_tel = $_POST['dad_tel'];
    $mom_name = $_POST['mom_name'];
    $mom_tel = $_POST['mom_tel'];
    $parents_name = $_POST['parents_name'];
    $parents_tel = $_POST['parents_tel'];
    $school = $_POST['school'];
    $GPA = $_POST['GPA'];
    $grade_level = $_POST['grade_level'];
    $timestamp = time();
    $timestamp = (date("Y-m-d",$timestamp));

   
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    } else {
        $target_file = "";
    }
   /* C:\xampp\htdocs\Project_2_66\ีupload
    
   print_r($_FILES);
   */
    $user_check = "SELECT * FROM tb_student WHERE id_card = '$id_card' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);
    
    
        $query = "INSERT INTO tb_student (pre_name, firstname, lastname, department, tel, id_card, email, birthdate, nationality, religion, ads, dad_name, dad_tel, mom_name, mom_tel, parents_name, parents_tel, school, GPA, img, grade_level, status_value, time_stamp)
        VALUES ('$pre_name', '$first_name', '$last_name', '$department', '$tel', '$id_card', '$email', '$birthdate', '$nationality', '$religion', '$ads', '$dad_name', '$dad_tel', '$mom_name', '$mom_tel', '$parents_name', '$parents_tel', '$school', '$GPA', '$target_file', '$grade_level', 'กำลังรอตรวจสอบ', '$timestamp')";
        
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>alert('กรอกข้อมูลเสร็จสิ้น');</script>";
                header("refresh:1 url=http://localhost/Project_2_66/info-register.php");
                session_unset();
            } else {
                echo "<script>alert('Something went wrong !!');</script>";
                header("refresh:1 url=http://localhost/Project_2_66/register-exam.php");
                session_unset();
            }
        

?>