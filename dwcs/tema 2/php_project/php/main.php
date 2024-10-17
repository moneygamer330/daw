<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/docker-lamp/www/php_project/css/main.css">
    <link rel="shortcut icon" href="/docker-lamp/www/php_project/img/icon.ico" type="image/x-icon"/>
    <title>Main Page</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.navbarPrincipal {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px 20px;
}

.logo img {
    width: 120px;
}

.firstNavbar ul, .secondNavbar ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.firstNavbar ul li a, .secondNavbar ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.secondNavbar ul li img {
    width: 24px;
}

.secondNavbar ul li a:hover, .firstNavbar ul li a:hover {
    color: #f0c040;
}

.welcome-banner {
    background-color: #f8f9fa; 
    text-align: center;
    margin: 40px auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    max-width: 1200px; 
}

.welcome-banner h1 {
    font-size: 3em;
    color: #333;
    margin-bottom: 20px;
}

.welcome-banner p {
    font-size: 1.5em;
    color: #555;
    margin-bottom: 40px;
}

.banner-img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 40px;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    font-size: 1.2em;
    color: white;
    background-color: #007bff; 
    text-decoration: none;
    border-radius: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #0056b3; 
}

.footer {
    text-align: center;
    background-color: #333;
    color: white;
    padding: 20px 0;
    margin-top: 20px;
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
<header>

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
                    <li><a href="contact.php">contact</a></li>
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
                    <li><a href=""><img src="/docker-lamp/www/php_project/img/carro-de-la-compra.png" alt="Cart"></a></li>
                </ul>
            </nav>
        </div>
    </div>      
</header>
    
    <section class="welcome-banner">
        <h1>Welcome to Cloud Motorsports</h1>
        <p>Find the best products for your car at unbeatable prices!</p>
        <img src="/docker-lamp/www/php_project/img/banner.jpg" alt="High-Performance Car" class="banner-img">
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