<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "t_student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data to be inserted
$studentID = "6501001";
$firstName = "John";
$lastName  = "Doe";
$email     = "john.doe@email.com";
$term      = "2/2025";
$company   = "Tech Solutions Co., Ltd.";
$address   = "123 Sukhumvit Rd.";
$province  = "Bangkok";
$startDate = "2026-03-01";
$endDate   = "2026-05-31";
$contact   = "Manager Somsak (081-234-5678)";

$sql = "INSERT INTO internships (studentID, firstName, lastName, email, term, company, address, province, startDate, endDate, contact)
        VALUES ('$studentID', '$firstName', '$lastName', '$email', '$term', '$company', '$address', '$province', '$startDate', '$endDate', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>";
$term      = "2/2025";
$company   = "Tech Solutions Co., Ltd.";
$address   = "123 Sukhumvit Rd.";
$province  = "Bangkok";
$startDate = "2026-03-01";
$endDate   = "2026-05-31";
$contact   = "Manager Somsak (081-234-5678)";

$sql = "INSERT INTO Internships (studentID, firstName, lastName, email, term, company, address, province, startDate, endDate, contact)
        VALUES ('$studentID', '$firstName', '$lastName', '$email', '$term', '$company', '$address', '$province', '$startDate', '$endDate', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>