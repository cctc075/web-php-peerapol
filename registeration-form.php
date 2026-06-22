<!Doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
    <body>
        <form action="registeration-accept.php" method="POST">
            <label>ชื่อ-นามสกุล</label>
            <input type="text" name="userName" required>
            <br>
            
            <label>อีเมล</label>
            <input type="email" name="userEmail" required>
            <br>

            <label>เบอร์โทรศัพท์</label>
            <input type="tel" name="userPhone" required>
            <br>

            <label>รหัสผ่าน(สำหรับเข้าสู่ระบบ)</label>
            <input type="password" name="userPassword" required>
            <br>

            <label>เงินเดือนที่คาดหวัง</label>
            <input type="number" name="userSalary" required>
            <br>

            <label>วันที่เริ่มงานได้</label>
            <input type="date" name="userStartDate" required>
            <br>

            <label>เพศ</label>
            <input type="radio" name="userGender" value="ชาย">ชาย
            <input type="radio" name="userGender" value="หญิง">หญิง
            <input type="radio" name="userGender" value="อื่นๆ">อื่นๆ
            <br>

            <label>ตำแหน่งที่สนใจ</label>
            <select name="userPosition">
                <option value="ไม่ระบุ">-</option>
                <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
                <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
                <option value="การตลาด">การตลาด</option>"
            </select>
            <br>

            <label>ทักษะความสามารถ</label>
            <input type="checkbox" name="userSkill[]" value="PHP">PHP
            <input type="checkbox" name="userSkill[]" value="HTML">HTML
            <input type="checkbox" name="userSkill[]" value="CSS">CSS
            <input type="checkbox" name="userSkill[]" value="SQL">SQL
            <br>
            
            <label>แนะนำตัวเพิ่มเติม</label>
            <textarea name="userIntroduction"></textarea>
            <br>

            <input type="submit" value="ส่งข้อมูล">
            <input type="reset" value="ล้างข้อมูล"

        </form>
    </body>
</html>