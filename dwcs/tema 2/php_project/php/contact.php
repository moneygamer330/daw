<?php
session_start(); 

$error_message = $confirmation_message = "";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Por favor, introduce un correo electrónico válido.";
    } else {
        $confirmation_message = "Thank you, " . $_SESSION['user_id'] . "! We have received your message and will reply shortly.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/docker-lamp/www/php_project/css/style.css">
    <link rel="shortcut icon" href="/docker-lamp/www/php_project/img/icon.ico" type="image/x-icon"/>
    <title>Contact</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Arial", sans-serif;
  background-color: #f8f8f8;
  color: #333;
}

.navbarPrincipal {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #007bff;
  padding: 15px 30px;
}

.logo img {
  max-height: 60px;
}

.firstNavbar nav ul,
.secondNavbar nav ul {
  list-style: none;
  display: flex;
  align-items: center;
}

.firstNavbar nav ul li,
.secondNavbar nav ul li {
  margin-left: 20px;
}

.firstNavbar nav ul li a,
.secondNavbar nav ul li a {
  color: white;
  text-decoration: none;
  font-size: 18px;
}

.firstNavbar nav ul li a:hover,
.secondNavbar nav ul li a:hover {
  text-decoration: underline;
}

.secondNavbar img {
  width: 30px;
  height: 30px;
}

.text h1 {
  text-align: center;
  margin-top: 30px;
  font-size: 36px;
  color: #007bff;
}

.form {
  max-width: 600px;
  margin: 50px auto;
  padding: 20px;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form_action label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

.form_action input[type="text"],
.form_action input[type="email"],
.form_action textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

.form_action textarea {
  height: 150px;
  resize: vertical;
}

.form_action input[type="submit"] {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 15px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}

.form_action input[type="submit"]:hover {
  background-color: #0056b3;
}

.login-reminder {
  text-align: center;
  font-size: 18px;
  color: #ff0000;
}

.login-reminder a {
  color: #007bff;
  text-decoration: none;
  font-weight: bold;
}

.login-reminder a:hover {
  text-decoration: underline;
}

.footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 20px;
  margin-top: 30px;
}

.footer p {
  margin-bottom: 5px;
  font-size: 14px;
}

.confirmation {
  color: green;
  font-weight: bold;
}

.error {
  color: red;
  font-weight: bold;
}

@media (max-width: 768px) {
  .form {
    margin: 20px;
    padding: 15px;
  }
}

@media (max-width: 480px) {
  .form {
    margin: 10px;
    padding: 10px;
  }
}

    </style>
</head>
<body>

<div class="navbarPrincipal">
    <div class="logo">
        <img src="/docker-lamp/www/php_project/img/logo.png" alt="Cloud Motorsports">
    </div>

    <div class="firstNavbar">
        <nav>
            <ul>
                <li><a href="products.php">Products</a></li>
                <li><a href="aboutUs.php">About us</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="secondNavbar">
        <nav>
            <ul>
                <?php 
                $loggedIn = isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : false;
                if ($loggedIn): ?>
                    <li><a href="#"><img src="/docker-lamp/www/php_project/img/entrar.png" alt="User">You are logged in</a></li>
                <?php else: ?>
                    <li><a href="login.php"><img src="/docker-lamp/www/php_project/img/salida.png" alt="Login"></a></li>
                <?php endif; ?>
                <li><a href=""><img src="/docker-lamp/www/php_project/img/carro-de-la-compra.png" alt="cart"></a></li>
            </ul>
        </nav>
    </div>
</div>  

<div class="text">
    <h1>Contact with us</h1>
</div>

<div class="form">
    <?php if ($confirmation_message): ?>
        <p class="confirmation"><?= $confirmation_message ?></p>
    <?php elseif ($error_message): ?>
        <p class="error"><?= $error_message ?></p>
    <?php else: ?>
        <form class="form_action" action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send">
        </form>
    <?php endif; ?>
</div>

<div class="footer">
    <p>Cloud Motorsports</p>
    <p>Email: cloudmotorsports@gmail.com</p>
    <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
    <p>Phone: 981 234 234</p>
</div>

</body>
</html>
