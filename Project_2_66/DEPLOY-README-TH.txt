ไฟล์ถูกปรับสำหรับ Render + Railway แล้ว

สิ่งที่แก้:
1. ย้าย session_start() ไปก่อน HTML ทุกไฟล์ที่เกี่ยวข้อง
2. เปลี่ยนลิงก์ http://localhost/Project_2_66/... เป็น path ของเว็บไซต์ออนไลน์
3. ปรับ connect.php ให้ใช้ Render Environment Variables
4. เพิ่ม Dockerfile สำหรับ PHP 8.2 + Apache + mysqli

ต้องตั้งค่าใน Render > Environment:
DB_HOST = tokaido.proxy.rlwy.net
DB_PORT = 42708
DB_USER = root
DB_PASSWORD = รหัสผ่านจริงจาก Railway
DB_NAME = railway

จากนั้น Commit/Push โฟลเดอร์นี้ขึ้น GitHub และ Deploy ใหม่
