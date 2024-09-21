/*<?php
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
    $physics = $_POST["physics"];
    $chemistry = $_POST["chemistry"];
    $math = $_POST["math"];
    $geography = $_POST["geography"];
    $marathi = $_POST["marathi"];
    $english = $_POST["english"];
    $hindi = $_POST["hindi"];

    
    $total_marks = $physics + $chemistry + $math + $geography + $marathi + $english + $hindi;
    $percentage = ($total_marks / 700) * 100;

    // Handle save operation (if "Save" button is clicked)
    if (isset($_POST["save"])) {

        $sql = "INSERT INTO marks (physics, chemistry, math, geography, marathi, english, hindi, total_marks, percentage) VALUES ($physics, $chemistry, $math, $geography, $marathi, $english, $hindi, $total_marks, $percentage)";

        if ($conn->query($sql) === TRUE) {
            echo "data saved";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      
        header("Location: marks_info.php");
        exit;
    }


   
    if (isset($_POST["calculate"])) {
        $result = "Total Marks: $total_marks | Percentage: $percentage%";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Info</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="marks_info.php" method="post">
        <h2>Marks Info</h2>
        <input type="number/*<?php
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
    $physics = $_POST["physics"];
    $chemistry = $_POST["chemistry"];
    $math = $_POST["math"];
    $geography = $_POST["geography"];
    $marathi = $_POST["marathi"];
    $english = $_POST["english"];
    $hindi = $_POST["hindi"];

    
    $total_marks = $physics + $chemistry + $math + $geography + $marathi + $english + $hindi;
    $percentage = ($total_marks / 700) * 100;

    // Handle save operation (if "Save" button is clicked)
    if (isset($_POST["save"])) {

        $sql = "INSERT INTO marks (physics, chemistry, math, geography, marathi, english, hindi, total_marks, percentage) VALUES ($physics, $chemistry, $math, $geography, $marathi, $english, $hindi, $total_marks, $percentage)";

        if ($conn->query($sql) === TRUE) {
            echo "data saved";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      
        header("Location: marks_info.php");
        exit;
    }


   
    if (isset($_POST["calculate"])) {
        $result = "Total Marks: $total_marks | Percentage: $percentage%";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Info</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="marks_info.php" method="post">
        <h2>Marks Info</h2>
        <input type="number" name="physics" placeholder="Physics" required>
        <input type="number" name="chemistry" placeholder="Chemistry" required>
        <input type="number" name="math" placeholder="Math" required>
        <input type="number" name="geography" placeholder="Geography" required>
        <input type="number" name="marathi" placeholder="Marathi" required>
        <input type="number" name="english" placeholder="English" required>
        <input type="number" name="hindi" placeholder="Hindi" required>
        <button type="submit" name="save">Save</button>
        <button type="submit" name="calculate">Calculate Result</button><br>
        <input type="text" name="result" value="<?php echo $result; ?>" readonly>
        <a href="login.php">logout</a>

    </form>

</body>
</html>
