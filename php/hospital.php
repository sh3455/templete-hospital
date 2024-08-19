<?php
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "hospital_db"; // The name of the database you created

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $doctor = $_POST['doctor'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $med = $_POST['med'];
    $comment = $_POST['comment'];

    // Validate required fields
    if (empty($name) || empty($department) || empty($doctor) || empty($number) || empty($email) || empty($med) || empty($comment)) {
        echo "All fields are required!";
        exit;
    }

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO appointments (name, department, doctor, phone_number, email, medical_condition, comment) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $department, $doctor, $number, $email, $med, $comment);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
