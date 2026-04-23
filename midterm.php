<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ระบบลงทะเบียนกิจกรรม</title>
</head>
<body>
    <h3>ระบบตรวจสอบสิทธิ์การลงทะเบียนกิจกรรม</h3>
    <form method="POST">
        ชื่อ-นามสกุล: <input type="text" name="u" required><br><br>
        ปีเกิด (พ.ศ.): <input type="number" name="y" required><br><br>
        
        ประเภทกิจกรรม: 
        <select name="activity" required>
            <option value="">-- เลือกกิจกรรม --</option>
            <option value="Workshop">Workshop Programming (15 ปีขึ้นไป)</option>
            <option value="Hackathon">Hackathon (18 ปีขึ้นไป)</option>
            <option value="Research">Research Conference (20 ปีขึ้นไป)</option>
        </select><br><br>
        
        <input type="submit" value="ตรวจสอบสิทธิ์">
    </form>
    <hr>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['u'];
        $birthYear = (int)$_POST['y'];
        $activity = $_POST['activity'];
        $currentYear = 2569; // กำหนดตามปีปัจจุบันในระบบ

        // 1. คำนวณอายุ
        $age = $currentYear - $birthYear;

        // แสดงข้อมูลเบื้องต้น
        echo "<h3>ผลการตรวจสอบสิทธิ์</h3>";
        echo "ชื่อผู้สมัคร: " . htmlspecialchars($username) . "<br>";
        echo "กิจกรรมที่เลือก: " . $activity . "<br>";
        echo "อายุของคุณ: " . $age . " ปี<br>";
        echo "<hr>";

        // 2. กำหนดเกณฑ์อายุขั้นต่ำตามประเภทกิจกรรม
        $minAge = 0;
        if ($activity == "Workshop") {
            $minAge = 15;
        } elseif ($activity == "Hackathon") {
            $minAge = 18;
        } elseif ($activity == "Research") {
            $minAge = 20;
        }

        // 3. ตรวจสอบเงื่อนไข
        if ($birthYear > $currentYear) {
            echo "<b style='color:red;'>ข้อผิดพลาด: ปีเกิดไม่สามารถมากกว่าปีปัจจุบันได้</b>";
        } elseif ($age > 120) {
            echo "<b style='color:orange;'>ข้อผิดพลาด: กรุณาตรวจสอบปีเกิดอีกครั้ง (อายุเกินกำหนด)</b>";
        } else {
            // ตรวจสอบอายุเทียบกับเกณฑ์ของกิจกรรม
            if ($age >= $minAge) {
                echo "<b style='color:green;'>สถานะ: ✅ สามารถเข้าร่วมกิจกรรม $activity ได้</b>";
            } else {
                echo "<b style='color:red;'>สถานะ: ❌ ไม่สามารถเข้าร่วมได้ (กิจกรรมนี้ต้องการอายุ $minAge ปีขึ้นไป)</b>";
            }
        }
    }
    ?>