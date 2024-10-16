<?php
session_start(); 

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon"/>
    <title>Contact</title>
</head>
<body>

//TODO revisar all
<div class="navbarPrincipal">
    <div class="logo">
        <img src="/img/logo.png" alt="Cloud Motorsports">
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
                <li><a href="login.php"><img src="/img/user.png" alt="login"></a></li>
                <li><a href="cart.php"><img src="/img/carro-de-la-compra.png" alt="cart"></a></li>
            </ul>
        </nav>
    </div>
</div>  

<div class="text">
    <h1>Contact with us</h1>
</div>


//TODO mostrar los datos por pantalla, "tratarlos"
<div class="form">
    <?php if ($logged_in): ?>
        <form class="form_action" action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send">
        </form>
    <?php else: ?>
        <p class="login-reminder">You must be logged in to send a message. <a href="login.php">Login here</a>.</p>
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
