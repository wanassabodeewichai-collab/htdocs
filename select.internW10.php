<?php
// เชื่อมต่อ Database (เหมือนข้อ 2)
$conn = new mysqli("localhost", "root", "", "your_database_name");

$sql = "SELECT * FROM Internships";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>รหัสนิสิต</th><th>ชื่อ-นามสกุล</th><th>บริษัท</th><th>จังหวัด</th><th>วันที่เริ่ม-สิ้นสุด</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["studentID"]."</td>
                <td>".$row["firstName"]." ".$row["lastName"]."</td>
                <td>".$row["company"]."</td>
                <td>".$row["province"]."</td>
                <td>".$row["startDate"]." ถึง ".$row["endDate"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "ไม่พบข้อมูล";
}
$conn->close();
?>