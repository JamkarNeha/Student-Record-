<?php

 echo "work in prosses";

?>
<?php
// Establish database connection
$db_host = "localhost"; // Change this to your database host
$db_username = "root"; // Change this to your database username
$db_password = ""; // Change this to your database password
$db_name = "studentrecord"; // Change this to your database name

// Connect to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if the username and password match in the users table
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, redirect to dashboard or another page
        echo "Login successful";
        // Example redirection to dashboard.php
        header("Location: student_data.php");
    } else {
        // User not found or credentials don't match
        echo "Invalid username or password....Register first.";
    }
    
}
if(isset($_POST["Register"])){

    header("Location: register.php");
}
// Close database connection
$conn->close();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <a href="forgete_password.php">Forgot Password?</a>
        <a href="register.php">Register Now</a>
    </form>
</body>
</html>

