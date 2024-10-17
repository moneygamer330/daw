<?php 
session_start();

$default_username = "admin"; 
$default_password = "admin"; 
$error_message = "";

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: main.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    if (empty($username) || empty($password)) {
        $error_message = "Username and password are required.";
    } elseif ($username == $default_username && $password == $default_password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["user_id"] = $username; // Guarda el nombre de usuario en la sesión
        header("location: main.php");
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("location: login.php");
    exit;
}

function test_input($data) { 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="/docker-lamp/www/php_project/img/icon.ico" type="image/x-icon"/>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f4f4f4;
}

.logo {
    text-align: center;
    margin-bottom: 20px;
}

.logo img {
    width: 150px; 
}

.login {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 100%;
    max-width: 400px; 
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
    text-align: left;
}

input[type="text"],
input[type="password"] {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    .product {
      width: calc(50% - 20px);
    }
  }
  
@media (max-width: 480px) {
    .product {
      width: 100%;
    }
}
    </style>
</head>
<body>
    <div class="logo">
        <img src="/docker-lamp/www/php_project/img/logo.png" alt="logo">
    </div>

    <div class="login">
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" value="Login">
        </form>
        <?php if ($error_message): ?>
            <p class="error"><?= $error_message ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
