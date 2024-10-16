<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/docker-lamp/www/php_project/css/news.css">
    <link rel="shortcut icon" href="/docker-lamp/www/php_project/img/icon.ico" type="image/x-icon"/>
    <title>News</title>
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
                <li><a href=""></a><img src="/docker-lamp/www/php_project/img/carro-de-la-compra.png" alt="cart"></li>
            </ul>
        </nav>
    </div>
</div>      
    
<div class="news-section">
    <div class="news-item">
        <img src="/docker-lamp/www/php_project/img/us-grand-prix.jpg" alt="US Grand Prix 2024">
        <div class="news-details">
            <h3><a href="https://www.formula1.com/en/latest/article.everything-you-need-to-know-about-the-2024-us-grand-prix.o1234GkW.html" target="_blank">US Grand Prix 2024</a></h3>
            <p>The 2024 US Grand Prix is set to take place at Circuit of the Americas on October 20. Stay tuned for a thrilling weekend with races, sprints, and more excitement!</p>
        </div>
    </div>

    <div class="news-item">
        <img src="/docker-lamp/www/php_project/img/bmw-motorsport.jpg" alt="BMW M Motorsport Indianapolis">
        <div class="news-details">
            <h3><a href="https://www.press.bmwgroup.com/global/article/detail/T0406934EN/bmw-m-motorsport-customer-racing-news" target="_blank">BMW M Motorsport Shines at Indianapolis</a></h3>
            <p>BMW's M Motorsport team had a strong performance at the Indianapolis 2024 TC America event, with the #104 BMW M2 CS Racing taking the spotlight.</p>
        </div>
    </div>
</div>

<div class="footer">
        <p>Cloud Motorsports</p>
        <p>Email: cloudmotorspots@gmail.com</p>
        <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
        <p>Phone: 981 234 234</p>
    </div>
</body>
</html>