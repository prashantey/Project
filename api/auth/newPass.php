<?php
session_start();
require './../../config.php'; 

header('Content-Type: application/json');
$servername = getenv('DB_SERVER');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    $userIdFromURL = $_GET['id'];
    $userId = intval($userIdFromURL);
 
    $newPassword = $_POST['password']; 

    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
    $stmt->bind_param("si", $hashedPassword, $userId);

    if ($stmt->execute()) {
        $response = [
            "IsSuccess" => true,
            "IsRedirected" => true,
            "message" => "Password updated successfully",
        ];
        echo json_encode($response);
        exit();
    } else {
        $response = [
            "IsSuccess" => false,
            "IsRedirected" => false,
            "message" => "Error updating password: " . $stmt->error
        ];
        echo json_encode($response);
    }
} else {
    echo("Failed");
}

$conn->close();

?>
