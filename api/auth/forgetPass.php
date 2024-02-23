<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST['emailOrPhone'];
    $userId = null;
    
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? OR phone = ?");
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userId = $row["id"];
        
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $response = [   
                "IsSuccess" => true,
                "IsRedirect" => true,
                "id" => $userId
            ];
            echo json_encode($response);



            exit();
        } else {
            $response = [   
                "IsSuccess" => false,
                "IsRedirect" => false,
                "message" => "No user found with the provided email or phone number."
            ];
            echo json_encode($response);
        }
    } else {
        $response = [
            "IsSuccess" => false,
            "IsRedirect" => false,
            "message" => "No user found with the provided email or phone."
        ];
        echo json_encode($response);
    }

    $stmt->close();
    $conn->close();
}
?>
