โปรเจกต์ที่แก้แล้วสำหรับ Render + Railway

Render Environment Variables ที่ต้องมี:
DB_HOST=tokaido.proxy.rlwy.net
DB_PORT=42708
DB_USER=root
DB_PASSWORD=<รหัสผ่าน Railway ปัจจุบัน>
DB_NAME=railway

การเข้าสู่ระบบถูกปรับให้ตรงกับฐานข้อมูลเดิม:
- Username ใช้ E-mail
- Password ใช้เลขบัตรประชาชน 13 หลัก

หลังนำไฟล์ขึ้น GitHub:
1. git add .
2. git commit -m "Fix PHP project for Render"
3. git push origin main
4. Render > Manual Deploy > Clear build cache & deploy

หมายเหตุ: ควรเปลี่ยนรหัสผ่าน Railway เพราะรหัสเดิมเคยถูกเปิดเผย
