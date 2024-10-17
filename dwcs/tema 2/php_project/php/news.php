<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/docker-lamp/www/php_project/css/news.css">
    <link rel="shortcut icon" href="/docker-lamp/www/php_project/img/icon.ico" type="image/x-icon"/>
    <title>News</title>
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

.news-section {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.news-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.news-item img {
    width: 150px;
    height: 100px;
    border-radius: 5px;
    margin-right: 15px;
}

.news-details h3 {
    margin-bottom: 5px;
}

.news-details h3 a {
    text-decoration: none;
    color: #333;
}

.news-details h3 a:hover {
    text-decoration: underline;
}

.footer {
    text-align: center;
    padding: 20px;
    background: #333;
    color: #fff;
    margin-top: 20px;
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