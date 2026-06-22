<?php
$name = $_POST['userName'];
$email = $_POST['userEmail'];
$phone = $_POST['userPhone'];
$password = $_POST['userPassword'];
$salary = $_POST['userSalary'];
$startDate = $_POST['userStartDate'];
$gender = $_POST['userGender'];
$position = $_POST['userPosition'];
$skill = $_POST['userSkill'];
$introduction = $_POST['userIntroduction'];

 echo "ชื่อผู้สมัคร : $name";
 echo "<br>อีเมล : $email";
 echo "<br>เบอร์โทรศัพท์ : $phone";
 echo "<br>รหัสผ่าน : $password";
 echo "<br>เงินเดือนที่คาดหวัง : $salary";
 echo "<br>วันที่เริ่มงานได้ : $startDate";
 echo "<br>เพศ : $gender";
 echo "<br>ตำแหน่งที่สนใจ : $position";
 echo "<br>ทักษะความสามารถ : " . implode(", ", $skill);
 echo "<br>แนะนำตัวเพิ่มเติม : $introduction";

 ?>
