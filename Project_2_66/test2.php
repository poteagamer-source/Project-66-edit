<?php
// ตัวอย่างข้อมูลทั้งหมด (100 รายการ)
$data = range(1, 100);

// แบ่งข้อมูลเป็นกลุ่มที่มีขนาดเท่าๆ กัน (ไม่เกิน 40 รายการต่อกลุ่ม)
$chunks = array_chunk($data, 33);

// ลูปผ่านกลุ่มข้อมูลแต่ละกลุ่มและแสดงข้อมูล
foreach ($chunks as $chunk) {
    echo "<div>";
    foreach ($chunk as $item) {
        echo "<button>$item</button>";
    }
    echo "</div>";
}
?>
