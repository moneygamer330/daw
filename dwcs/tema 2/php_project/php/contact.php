<?php
session_start(); 

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$logged_in = true; 
$confirmation_message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && $logged_in) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $confirmation_message = "Thank you, " . $_SESSION['user_id'] . "! We have received your message and will reply shortly.";
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
