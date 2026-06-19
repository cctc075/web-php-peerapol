<?php
$name = $_GET['userName'];
$password = $_GET['userPass'];
$email = $_GET['userEmail'];
$age = $_GET['userAge'];
$birth = $_GET['userBirth'];
$gender = $_GET['userGender'];
$city = $_GET['userCity'];
$hobby = $_GET['userHobby'];

echo "สวัสดีคุณ $name";
echo "<br>รหัสผ่านของคุณคือ $password";
echo "<br>อีเมลของคุณคือ $email";
echo "<br>อายุของคุณคือ $age";
echo "<br>วันเกิดของคุณคือ $birth";
echo "<br>เพศของคุณคือ $gender";
echo "<br>จังหวัดของคุณคือ $city";
echo "<br>งานอดิเรกของคุณคือ " . implode(", ", $hobby);
?>