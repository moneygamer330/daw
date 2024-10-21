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
        $_SESSION["user_id"] = $username;
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
    <title>Login - Cloud Motorsports</title>
    <link rel="stylesheet" href="/php_project/css/login.css">
    <link rel="shortcut icon" href="/php_project/img/icon.ico" type="image/x-icon"/>
    
</head>
<body>
    <div class="logo">
        <img src="/php_project/img/logo.png" alt="logo">
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
