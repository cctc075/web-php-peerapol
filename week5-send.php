<!Doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
</head>
    <body>
        <form action="week5-receive.php" method="GET">
            <label>username</label>
            <input type="text" name="userName" required>
            <br>

            <label>password</label>
            <input type="password" name="userPass" required>
            <br>

            <label>email</label>
            <input type="email" name="userEmail">
            <br>

            <label>อายุ</label>
            <input type="number" name="userAge">
            <br>

            <label>วันเกิด</label>
            <input type="date" name="userBirth">
            <br>

            <label>เพศ</label>
            <input type="radio" name="userGender" value="ชาย">ชาย
            <input type="radio" name="userGender" value="หญิง">หญิง
            <br>

            <label>จังหวัด</label>
            <select name="userCity">
                <option value="ไม่ระบุ">-</option>
                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
            </select>
            <br>

            <label>งานอดิเรก</label>
            <input type="checkbox" name="userHobby[]" value="เกม">เกม
            <input type="checkbox" name="userHobby[]" value="กีฬา">กีฬา
            <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ">อ่านหนังสือ
            <input type="checkbox" name="userHobby[]" value="เล่นดนตรี">เล่นดนตรี
            <br>

            <label>ความคิดเห็น</label>
            <textarea name="userComment"></textarea>
            

            <input type="submit" value="ส่งข้อมูล">
            <input type="reset" value="ล้างข้อมูล">
        </form>
    </body>
    </html>
