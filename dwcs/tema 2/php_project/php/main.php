<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php_project/css/main.css">
    <link rel="shortcut icon" href="/php_project/img/icon.ico" type="image/x-icon"/>
    <title>Main Page</title>

</head>
<body>
<header>

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
                $loggedIn = isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : false;
                if ($loggedIn): ?>
                        <li><a href="#"><img src="/php_project/img/salida.png" alt="Logout"></a></li>
                    <?php else: ?>
                        <li><a href="login.php"><img src="/php_project/img/entrar.png" alt="Login"></a></li>
                    <?php endif; ?>
                    <li><a href=""><img src="/php_project/img/carro-de-la-compra.png" alt="Cart"></a></li>
                </ul>
            </nav>
        </div>
    </div>      
</header>
    
    <section class="welcome-banner">
        <h1>Welcome to Cloud Motorsports</h1>
        <p>Find the best products for your car at unbeatable prices!</p>
        <img src="/php_project/img/banner.jpg" alt="High-Performance Car" class="banner-img">
        <a href="products.php" class="cta-button">Shop Now</a>
    </section>
    
    <div class="footer">
        <p>Cloud Motorsports</p>
        <p>Email: cloudmotorspots@gmail.com</p>
        <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
        <p>Phone: 981 234 234</p>
    </div>

</body>
</html>