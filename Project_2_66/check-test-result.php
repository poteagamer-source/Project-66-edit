<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
include("connect.php");

// ตรวจสอบว่ามีการส่งค่า 'test_normal' มาจากฟอร์มหรือไม่
if(isset($_POST['test_normal'])){
    // กำหนดค่า depart จากค่า session
    $depart = $_SESSION['depart'];
    // รับค่า id_card และ test_normal จากฟอร์ม
    $id_card = $_POST['id_card'];
    $test_normal = $_POST['test_normal'];
    // เตรียมคำสั่ง SQL สำหรับการอัปเดตข้อมูล
    $sql = "UPDATE tb_test SET 
        test_normal = ?
        WHERE id_card_result = ?";
    // เตรียมคำสั่ง SQL และทำการ bind parameter สำหรับคำสั่ง SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $test_normal, $id_card);
    // ประมวลผลคำสั่ง SQL
    $stmt->execute();
    // ปิดคำสั่ง SQL
    $stmt->close();
    // ใช้ header() เพื่อ redirect ไปยังหน้าที่แสดงผลการทดสอบ
    header("Location: /show-test-result.php");
    exit(); // ออกจากการทำงานของ script ทันทีหลังจาก redirect
}

// ตรวจสอบว่ามีการส่งค่า 'test_expert' มาจากฟอร์มหรือไม่
if(isset($_POST['test_expert'])){
    // กำหนดค่า depart จากค่า session
    $depart = $_SESSION['depart'];
    // รับค่า id_card และ test_expert จากฟอร์ม
    $id_card = $_POST['id_card'];
    $test_expert = $_POST['test_expert'];
    // เตรียมคำสั่ง SQL สำหรับการอัปเดตข้อมูล
    $sql = "UPDATE tb_test SET 
        test_expert = ?
        WHERE id_card_result = ?";
    // เตรียมคำสั่ง SQL และทำการ bind parameter สำหรับคำสั่ง SQL
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $test_expert, $id_card);
    // ประมวลผลคำสั่ง SQL
    $stmt->execute();
    // ปิดคำสั่ง SQL
    $stmt->close();
    // ใช้ header() เพื่อ redirect ไปยังหน้าที่แสดงผลการทดสอบ
    header("Location: /show-test-result.php");
    exit(); // ออกจากการทำงานของ script ทันทีหลังจาก redirect
}
?>
