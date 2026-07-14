<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- SELECT -->
<?php
    include("connect.php");
    
   
?>
<!-- UpDATE -->
<?php      
        if(isset($_POST['update'])){
          
            $id_student = $_POST['id_student'];
            $grade_level = $_POST['grade_level'];
            $department = $_POST['department'];
            $first_name= $_POST['firstname'];
            $last_name = $_POST['lastname'];
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
            $status = $_POST['status'];


            
          
          
            $sql = "UPDATE tb_student SET
            grade_level = '$grade_level',
            department = '$department',
            firstname = '$first_name',
            lastname = '$last_name',
            tel = '$tel',
            id_card = '$id_card',
            email = '$email',
            birthdate = '$birthdate',
            nationality = '$nationality',
            religion = '$religion',
            ads = '$ads',
            dad_name = '$dad_name',
            dad_tel = '$dad_tel',
            mom_name = '$mom_name',
            mom_tel = '$mom_tel',
            parents_name = '$parents_name',
            parents_tel = '$parents_tel',
            school = '$school',
            GPA = '$GPA',
            id_test = '$next_number',
            status_value = '$status'
            WHERE id_student = $id_student";
            $conn->query($sql);
           
            echo "<script>alert('แก้ไขเสร็จสิ้น')</script>";
            
            header("refresh:3 url=/manage-user.php");
        }
        ?>

     <!-- DELETE -->
   <?php
     if(isset($_POST['delete'])){
        // Assuming you have already established a mysqli connection ($conn)
        $id_delete = $_POST['id_student'];
       
        // Prepare the SQL statement
        $sql = "DELETE FROM tb_student WHERE id_student = '$id_delete'";
        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        
        // Close the mysqli connection
        $conn->close();
    }
    
     ?>

     <?php 
    $id_student = $_POST['id_student'];
     $status_value = $_POST['status_value'];
     $department = $_POST['department'];
     $sql = "SELECT * FROM tb_department WHERE department_name = '$department'";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();
     $department_name = $row['department_name'];
  
     if($status_value == 'เสร็จสิ้น'){
        $department_name = $conn->real_escape_string($department_name);

        $sql3 = "SELECT COALESCE(MAX(id_test), 0) as max_id FROM tb_student WHERE department = '$department_name'";
        $result3 = $conn->query($sql3);
        
        if ($result3->num_rows > 0) {
            $row3 = $result3->fetch_assoc();
            $max_id = $row3["max_id"];
            $next_number = intval($max_id) + 1;
        } else {
            $next_number = 1; // Start from 1 if no rows are returned
        }
    }

     $sql2 = "UPDATE tb_student SET status_value = '$status_value',
     id_test = '$next_number'
     WHERE id_student = '$id_student'";

     $conn->query($sql2);
     $conn->close();
     header("refresh:1 url=/manage-user.php");
     ?>
     
   
     


                 