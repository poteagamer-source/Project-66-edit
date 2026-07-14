<?php
if (ob_get_level() === 0) {
    ob_start();
}
?>
<?php
    include("connect.php");



    $report_value = $_POST['report'];
    $report_name = $_POST['report_name'];
    $at_id =  $_POST['report_at'];
    $sql = "INSERT INTO tb_status(status_report,at_id,report_who,status_now)
    VALUE ('$report_value','$at_id','$report_name','รอการตรวจสอบและแก้ไข')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('กรอกข้อมูลเสร็จสิ้น');</script>";
        header("refresh:1 url=/staff.php");
        session_unset();
    } else {
        echo "<script>alert('Something went wrong !!');</script>";
        header("refresh:1 url=/staff-user.php");
        session_unset();
    }
?>