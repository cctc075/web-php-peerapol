<?php
$tableResult = "";
$sumResult = "";

if (isset($_POST['show_table'])) {
    $number = (int)$_POST['number'];

    $tableResult .= "<h4>สูตรคูณแม่ $number</h4>";
    $tableResult .= "<div class='result-box'>";

    for ($i = 1; $i <= 12; $i++) {
        $result = $number * $i;
        $tableResult .= "$number × $i = $result<br>";
    }

    $tableResult .= "</div>";
}

if (isset($_POST['sum_numbers'])) {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $sum = $num1 + $num2;

    $sumResult = "<div class='result-box'><strong>ผลลัพธ์:</strong> $num1 + $num2 = $sum</div>";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator & Multiplication Table</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#4facfe,#00f2fe);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .container{
            width:100%;
            max-width:900px;
        }

        .title{
            text-align:center;
            color:white;
            margin-bottom:25px;
        }

        .card{
            background:white;
            border-radius:20px;
            padding:25px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
            margin-bottom:20px;
        }

        h2{
            color:#333;
            margin-bottom:15px;
        }

        input{
            width:100%;
            padding:12px;
            margin:10px 0;
            border:1px solid #ddd;
            border-radius:10px;
            font-size:16px;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#4facfe;
            color:white;
            font-size:16px;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#2196f3;
        }

        .result-box{
            margin-top:15px;
            padding:15px;
            background:#f4f8ff;
            border-left:5px solid #4facfe;
            border-radius:10px;
            line-height:1.8;
        }

        h4{
            margin-top:15px;
            color:#2196f3;
        }
    </style>
</head>
<body>

<div class="container">

    <h1 class="title">📘 PHP Workshop</h1>

    <div class="card">
        <h2>📌 แสดงสูตรคูณ</h2>

        <form method="post">
            <input type="number" name="number" placeholder="กรอกตัวเลข" required>
            <button type="submit" name="show_table">แสดงสูตรคูณ</button>
        </form>

        <?php echo $tableResult; ?>
    </div>

    <div class="card">
        <h2>➕ บวกเลข 2 จำนวน</h2>

        <form method="post">
            <input type="number" name="num1" placeholder="ตัวเลขที่ 1" required>
            <input type="number" name="num2" placeholder="ตัวเลขที่ 2" required>
            <button type="submit" name="sum_numbers">คำนวณผลบวก</button>
        </form>

        <?php echo $sumResult; ?>
    </div>

</div>

</body>
</html>