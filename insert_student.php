<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db"; // use your actual database name

// Connect to DB
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$department = $_POST['department'];
$year_of_study = $_POST['year_of_study'];

// SQL Query
$sql = "INSERT INTO student_records (first_name, last_name, gender, date_of_birth, email, phone_number, department, year_of_study)
VALUES ('$first_name', '$last_name', '$gender', '$date_of_birth', '$email', '$phone_number', '$department', '$year_of_study')";

// Run query
if ($conn->query($sql) === TRUE) {
    echo "✅ Record inserted successfully";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
