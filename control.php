<?php
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password is empty
$dbname = "robot_control"; //  database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['command'])) {
    $command = $_GET['command'];
    
    $stmt = $conn->prepare("INSERT INTO commands (command) VALUES (?)");
    $stmt->bind_param("s", $command);
    
    if ($stmt->execute()) {
        echo "Command received and stored: " . $command;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else if (isset($_GET['fetch'])) {
    $result = $conn->query("SELECT command, timestamp FROM commands ORDER BY timestamp DESC");

    $commands = [];
    while ($row = $result->fetch_assoc()) {
        $commands[] = $row;
    }
    echo json_encode($commands);
} else {
    echo "No command received.";
}

$conn->close();
?>
