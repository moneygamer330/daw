<?php     

session_start();

$loggedIn = isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : false;

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_unset(); 
    session_destroy(); 
    header("Location: main.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php_project/css/aboutUs.css">
    <link rel="shortcut icon" href="/php_project/img/icon.ico" type="image/x-icon"/>
    <title>About us - Cloud Motorsports</title>
</head>
<body>
    
<div class="navbarPrincipal">
    <div class="logo">
        <img src="/php_project/img/logo.png" alt="Cloud Motorsports">
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
                if ($loggedIn): ?>
                    <li><a href="?logout=true"><img src="/php_project/img/salida.png" alt="Logout"></a></li>
                <?php else: ?>
                    <li><a href="login.php"><img src="/php_project/img/entrar.png" alt="Login"></a></li>
                <?php endif; ?>
                <li><a href=""><img src="/php_project/img/carro-de-la-compra.png" alt="Cart"></a></li>
            </ul>
        </nav>
    </div>
</div>  

<div class = "about-section">
        <h1>About us</h1>
        <p>Cloud Motorsports is a company dedicated to the sale of car parts. We have a wide variety of products for all types of cars. We have the best professionals in the sector, who will help you choose the best product for your car. We have the best prices on the market. We are waiting for you!</p>

        <h2>Our Team</h2>
        <p>We have a dedicated team of professionals who are passionate about cars and committed to providing the best service to our customers. Meet our team:</p>
        <ul>
            <li><strong>John Doe</strong> - CEO</li>
            <li><strong>Jane Smith</strong> - Head of Sales</li>
            <li><strong>Mike Johnson</strong> - Lead Mechanic</li>
            <li><strong>Emily Davis</strong> - Customer Support</li>
        </ul>

        <h2>Our Mission</h2>
        <p>Our mission is to provide high-quality car parts at competitive prices while ensuring excellent customer service. We strive to be the go-to source for car enthusiasts and professionals alike.</p>

        <h2>Our Vision</h2>
        <p>We envision a world where every car owner has access to the best parts and services to keep their vehicles running smoothly and safely. We aim to be a leader in the automotive industry, known for our innovation and customer-centric approach.</p>
    </div>
</div>  

<div class="footer">
    <p>Cloud Motorsports</p>
    <p>Email: cloudmotorsports@gmail.com</p>
    <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
    <p>Phone: 981 234 234</p>
</div>
    
</body>
</html>