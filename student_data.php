<?php
// Database connection parameters
$db_host = "localhost"; // Change this if your database is hosted elsewhere
$db_username = "root"; // Change this to your database username
$db_password = ""; // Change this to your database password
$db_name = "studentrecord"; // Change this to your database name

// Establish database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $roll_no = $_POST["roll_no"];
    $name = $_POST["name"];
    $mobile_no = $_POST["mobile<?php
// Database connection parameters
$db_host = "localhost"; // Change this if your database is hosted elsewhere
$db_username = "root"; // Change this to your database username
$db_password = ""; // Change this to your database password
$db_name = "studentrecord"; // Change this to your database name

// Establish database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $roll_no = $_POST["roll_no"];
    $name = $_POST["name"];
    $mobile_no = $_POST["mobile_no"];
    $city = $_POST["city"];
    $college_name = $_POST["college_name"];
    $faculty = $_POST["faculty"];

    $sql = "INSERT INTO students (roll_no, name, mobile_no, city, college_name, faculty) VALUES ('$roll_no', '$name', '$mobile_no', '$city', '$college_name', '$faculty')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: marks_info.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    exit;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="student_data.php" method="post">
        <h2>Student Data</h2>
        <input type="text" name="roll_no" placeholder="Roll No." required>
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="mobile_no" placeholder="Mobile No." required>
        <input type="text" name="city" placeholder="City" required>
        <input type="text" name="college_name" placeholder="College Name" required>
        <input type="text" name="faculty" placeholder="Faculty" required>
        <button type="submit" name="save">Save</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="next">Next</button>
        
    </form>
</body>
</html>
