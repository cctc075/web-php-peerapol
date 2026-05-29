<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัวเอง - นายพีรพล ราชธานี</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            width: 100%;
            overflow: hidden;
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .header p {
            font-size: 1.1em;
            opacity: 0.95;
        }
        
        .content {
            padding: 40px;
        }
        
        .section {
            margin-bottom: 35px;
        }
        
        .section h2 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.5em;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }
        
        .section p {
            color: #333;
            line-height: 1.8;
            font-size: 1.05em;
        }
        
        .info-list {
            list-style: none;
        }
        
        .info-list li {
            display: flex;
            margin-bottom: 12px;
            color: #555;
            font-size: 1em;
        }
        
        .info-list li strong {
            color: #667eea;
            min-width: 120px;
        }
        
        .footer {
            background: #f5f5f5;
            padding: 20px;
            text-align: center;
            color: #888;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>นายพีรพล ราชธานี</h1>
            <p>Peerapol Raththanee</p>
        </div>
        
        <div class="content">
            <div class="section">
                <h2>🙏 เกี่ยวกับตัวเอง</h2>
                <p>
                    สวัสดีครับ ผมชื่อนายพีรพล ราชธานี ยินดีที่ได้รู้จักคุณ 
                    ผมเป็นผู้ที่มีความสนใจและหลงใหลในด้านเทคโนโลยีสารสนเทศและการพัฒนาเว็บไซต์
                </p>
            </div>
            
            <div class="section">
                <h2>📋 ข้อมูลส่วนตัว</h2>
                <ul class="info-list">
                    <li><strong>ชื่อ-สกุล:</strong> นายพีรพล ราชธานี</li>
                    <li><strong>ความสนใจ:</strong> การเขียนโปรแกรม และ การพัฒนาเว็บไซต์</li>
                    <li><strong>ทักษะหลัก:</strong> PHP, HTML, CSS, JavaScript</li>
                    <li><strong>ประสบการณ์:</strong> พัฒนาเว็บแอปพลิเคชันด้วย PHP</li>
                </ul>
            </div>
            
            <div class="section">
                <h2>🎯 เป้าหมาย</h2>
                <p>
                    ผมต้องการพัฒนาและเพิ่มพูนทักษะด้านการเขียนโปรแกรม 
                    เพื่อให้สามารถสร้างเว็บไซต์และแอปพลิเคชันที่มีคุณภาพและเป็นประโยชน์ต่อสังคม 
                    รวมถึงการแก้ไขปัญหาได้อย่างมีประสิทธิภาพ
                </p>
            </div>
            
            <div class="section">
                <h2>💡 ค่านิยม</h2>
                <p>
                    ผมเชื่อในการทำงานที่มีความรับผิดชอบ ต่อเนื่อง และเสมอมาก 
                    พร้อมที่จะเรียนรู้และเติบโตอย่างต่อเนื่องในสาขาเทคโนโลยี
                </p>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; 2026 นายพีรพล ราชธานี | สร้างด้วย PHP & HTML</p>
        </div>
    </div>
</body>
</html>
