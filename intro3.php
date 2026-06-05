<?php
// imtro3.php
// หน้าเว็บ PHP นำเสนอสถานที่ท่องเที่ยว

$attractions = [
    [
        'name' => 'วัดพระมหาธาตุวรมหาวิหาร',
        'location' => 'อำเภอเมืองนครศรีธรรมราช',
        'description' => 'วัดสำคัญคู่เมืองนครศรีธรรมราช มีเจดีย์สูงเด่นเป็นสัญลักษณ์และเป็นศูนย์รวมใจของชาวนครศรีธรรมราช',
        'tips' => 'เช็คเวลาเปิด-ปิดก่อนเข้าชม และสวมใส่เครื่องแต่งกายสุภาพเมื่อเข้าไปภายในวิหาร'
    ],
    [
        'name' => 'อุทยานแห่งชาติเขาปู่-เขาย่า',
        'location' => 'อำเภอพระพรหม',
        'description' => 'สถานที่เที่ยวเชิงธรรมชาติที่มีน้ำตกสวยงามและเส้นทางเดินป่าระยะสั้น เหมาะสำหรับคนรักธรรมชาติ',
        'tips' => 'ควรเตรียมน้ำดื่ม รองเท้าเดินป่า และถ่ายรูปกับวิวทิวทัศน์ที่สดชื่น'
    ],
    [
        'name' => 'เขาพลายดำ',
        'location' => 'อำเภอเมืองนครศรีธรรมราช',
        'description' => 'จุดชมวิวพระอาทิตย์ขึ้นยอดฮิตของเมืองนครศรีธรรมราช มีบรรยากาศเงียบสงบและวิวสวย',
        'tips' => 'ไปเช้าตรู่เพื่อชมพระอาทิตย์ขึ้น และเตรียมเครื่องดื่มร้อน ๆ ติดไปด้วย'
    ],
];

function renderAttraction($place) {
    return "<div class=\"attraction\">\n"
        . "    <h2>" . htmlspecialchars($place['name'], ENT_QUOTES, 'UTF-8') . "</h2>\n"
        . "    <p><strong>ที่ตั้ง:</strong> " . htmlspecialchars($place['location'], ENT_QUOTES, 'UTF-8') . "</p>\n"
        . "    <p>" . htmlspecialchars($place['description'], ENT_QUOTES, 'UTF-8') . "</p>\n"
        . "    <p><strong>คำแนะนำ:</strong> " . htmlspecialchars($place['tips'], ENT_QUOTES, 'UTF-8') . "</p>\n"
        . "</div>\n";
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สถานที่ท่องเที่ยวในนครศรีธรรมราช</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef6ff; color: #1a1a1a; margin: 0; padding: 0; }
        .page { max-width: 900px; margin: 2rem auto; background: #ffffff; padding: 2rem; box-shadow: 0 4px 16px rgba(0,0,0,0.08); }
        h1 { color: #1c3d78; margin-bottom: 0.5rem; }
        p.lead { color: #555; line-height: 1.6; }
        .attraction { border-bottom: 1px solid #d7e1ef; padding: 1.25rem 0; }
        .attraction:last-child { border-bottom: none; }
        .attraction h2 { color: #2a5f97; margin: 0 0 0.5rem; }
        .attraction p { margin: 0.4rem 0; }
        .footer { margin-top: 2rem; color: #666; font-size: 0.95rem; }
    </style>
</head>
<body>
    <div class="page">
        <h1>แนะนำสถานที่ท่องเที่ยวในนครศรีธรรมราช</h1>
        <p class="lead">นี่คือหน้าเว็บภาษา PHP ที่นำเสนอแหล่งท่องเที่ยวสำคัญในจังหวัดนครศรีธรรมราช พร้อมคำแนะนำและข้อมูลพื้นฐานสำหรับผู้มาเยือน</p>
        <?php foreach ($attractions as $place): ?>
            <?php echo renderAttraction($place); ?>
        <?php endforeach; ?>
        <div class="footer">
            <p>สร้างด้วย PHP - เหมาะสำหรับการเรียนรู้การทำเว็บด้วยภาษา PHP</p>
        </div>
    </div>
</body>
</html>
