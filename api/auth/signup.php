<?php
require './../../config.php'; 


header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = getenv('DB_SERVER');   
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $checkEmailStmt = $conn->prepare("SELECT COUNT(*) as count FROM users WHERE email = :email");
        $checkEmailStmt->bindParam(':email', $email);
        $checkEmailStmt->execute();
        $emailResult = $checkEmailStmt->fetch(PDO::FETCH_ASSOC);

        $checkPhoneStmt = $conn->prepare("SELECT COUNT(*) as count FROM users WHERE phone = :phone");
        $checkPhoneStmt->bindParam(':phone', $phone);
        $checkPhoneStmt->execute();
        $phoneResult = $checkPhoneStmt->fetch(PDO::FETCH_ASSOC);

        if ($emailResult['count'] > 0) {
            $response = [
                "IsSuccess" => false,
                "IsRedirect" => false,
                "message" => "User with this email already exists."
            ];
        } elseif ($phoneResult['count'] > 0) {    
            $response = [
                "IsSuccess" => false,
                "IsRedirect" => false,
                "message" => "User with this phone number already exists."
            ];
        } else {
            $insertStmt = $conn->prepare("INSERT INTO users (fullname, email, phone, password, gender) 
                                        VALUES (:fullname, :email, :phone, :password, :gender)");

            $insertStmt->bindParam(':fullname', $fullname);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':phone', $phone);
            $insertStmt->bindParam(':password', $password);
            $insertStmt->bindParam(':gender', $gender);

            $insertStmt->execute();

            $response = [
                "IsSuccess" => true,
                "IsRedirect" => true,
                "message" => "Signup success!"
            ];

            // Header redirection should occur after all processing and before any output
            // header("Location: ./../login/index.html");
        }
    } catch(PDOException $e) {
        $response = [
            "IsSuccess" => false,
            "IsRedirect" => false,
            "message" => "Unable to complete process, Please try again. Error: " . $e->getMessage()
        ];
    }

    echo json_encode($response);

?>
