<?php 

session_start();
if (isset($_SESSION[""]) === true) {
    header("location: main.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        $_SESSION[""] = true;
        header("location: main.php");
    } else {
        echo "Invalid username or password";
    }
} else if ($_SERVER[""] == "") {
    echo "Invalid request";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon"/>
</head>
<body>
    <div class="logo">
        <img src="logo.png" alt="logo">
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
    <div>
</body>
</html>