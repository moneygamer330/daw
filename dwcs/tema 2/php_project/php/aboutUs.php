<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/docker-lamp/www/php_project/css/aboutUs.css">
    <link rel="shortcut icon" href="/docker-lamp/www/php_project/img/icon.ico" type="image/x-icon"/>
    <title>About us</title>
    <style>
        /* General styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

h1, h2 {
    color: #333;
}

.navbarPrincipal {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #444;
    padding: 10px 20px;
}

.logo img {
    height: 50px;
}

.firstNavbar ul, .secondNavbar ul {
    list-style: none;
    display: flex;
    gap: 15px;
}

.firstNavbar ul li, .secondNavbar ul li {
    margin-right: 20px;
}

.firstNavbar ul li a, .secondNavbar ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
}

.firstNavbar ul li a:hover, .secondNavbar ul li a:hover {
    color: #ddd;
}

.secondNavbar ul li img {
    height: 25px;
}

div h1 {
    text-align: center;
    margin-top: 40px;
    color: #444;
}

div p {
    margin: 20px auto;
    max-width: 800px;
    font-size: 18px;
    color: #555;
    line-height: 1.8;
    text-align: justify;
}

h2 {
    margin-top: 40px;
    color: #333;
    text-align: center;
}

ul {
    margin: 20px auto;
    max-width: 800px;
    font-size: 18px;
    color: #555;
    padding-left: 20px;
}

ul li {
    margin: 10px 0;
}

.footer {
    background-color: #444;
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}

.footer p {
    margin: 5px 0;
}

@media (max-width: 768px) {
    .navbarPrincipal {
        flex-direction: column;
        align-items: flex-start;
    }

    .firstNavbar ul, .secondNavbar ul {
        flex-direction: column;
        gap: 10px;
        padding: 0;
        margin-top: 10px;
    }

    .logo img {
        height: 40px;
    }

    div h1 {
        font-size: 26px;
    }

    div p, ul {
        font-size: 16px;
    }

    ul li {
        margin: 5px 0;
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

    <div>
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
        <p>Email: cloudmotorspots@gmail.com</p>
        <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
        <p>Phone: 981 234 234</p>
    </div>
</body>
</html>