<?php
require './../../config.php'; 


header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = getenv('DB_SERVER');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $emailOrPhone = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $passwordAttempt = $_POST['password']; 

        if (filter_var($emailOrPhone, FILTER_VALIDATE_EMAIL)) {
            $checkCredentialsStmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $checkCredentialsStmt->bindParam(':email', $emailOrPhone);
        } else {
            $checkCredentialsStmt = $conn->prepare("SELECT * FROM users WHERE phone = :phone");
            $checkCredentialsStmt->bindParam(':phone', $emailOrPhone);
        }

        $checkCredentialsStmt->execute();
        $user = $checkCredentialsStmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($passwordAttempt, $user['password'])) {
                $response = [
                    "IsSuccess" => true,
                    "IsRedirect" => true,
                    "message" => "Login successful!"
                ];
            } else {
                $response = [
                    "IsSuccess" => false,
                    "IsRedirect" => false,
                    "message" => "Incorrect password."
                ];
            }
        } else {
            $response = [
                "IsSuccess" => false,
                "IsRedirect" => false,
                "message" => "User with this email/phone doesn't exist."
            ];
        }
    } catch (PDOException $e) {
        error_log($e->getMessage());
        $response = [
            "IsSuccess" => false,
            "IsRedirect" => false,
            "message" => "Unable to complete process. Please try again."
        ];
    }

    echo json_encode($response);
    exit();
}

?>
