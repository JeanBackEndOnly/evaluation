<?php

require_once '../installer/config.php';
require_once 'login_model.php';
require_once 'login_cntrl.php';
require_once '../installer/session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';
    $errors = [];

    if (empty_inputs($username, $password)) {
        $errors["empty_inputs"] = "Fill all fields!";
        $_SESSION["errors_login"] = $errors;
        header("Location: ../src/index.php");
        exit;
    }

    $conn = db_connect();
    $pdo = $conn;

    try {
        $result = get_username($pdo, $username); 
        if (!$result) {
            $errors["login_incorrect"] = "Incorrect username!";
        } elseif (wrong_password($password, $result["password"])) {
            $errors["login_incorrect"] = "Wrong password!";
        }

        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../src/index.php");
            exit;
        }

        session_regenerate_id(true);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION["roles"] = $result["role"]; // incorrect
        $_SESSION["last_regeneration"] = time();

        if ($result["user_role"] === "student") {
            header("Location: ../src/student/dashboard.php");
        } elseif ($result["user_role"] === "administrator") {
            header("Location: ../src/admin/dashboard.php");
        }
        else {
            $errors["login_incorrect"] = "Unknown role.";
            $_SESSION["errors_login"] = $errors;
            header("Location: ../src/index.php");
        }

        $pdo = null;

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    exit;
}
