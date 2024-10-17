<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/docker-lamp/www/php_project/css/products.css">
    <link rel="shortcut icon" href="/docker-lamp/www/php_project/img/icon.ico" type="image/x-icon"/>
    <title>Products - Cloud Motorsports</title>
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

.products {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: space-around;
  padding: 20px;
}

.product {
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  width: calc(33% - 40px); 
  position: relative;
}

.product img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto 15px;
}

.product-name {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.product-price {
  font-size: 16px;
  color: #333;
  margin-bottom: 15px;
}

.btn-cesta {
  background-color: #28a745;
  color: white;
  border: none;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  width: calc(100% - 40px);
}

.btn-cesta:hover {
  background-color: #218838;
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
    <header class="navbarPrincipal">
        <div class="logo">
            <img src="/docker-lamp/www/php_project/img/logo.png" alt="Cloud Motorsports">
        </div>
        <div class="firstNavbar">
            <nav>
                <ul>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
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
                    <li><a href=""><img src="/docker-lamp/www/php_project/img/carro-de-la-compra.png" alt="Cart"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="products">
            <div class="product">
                <img src="/docker-lamp/www/php_project/img/filter.png" alt="High fluid air filter">
                <p class="product-name">High fluid air filter</p>
                <p class="product-price">100€ p.v.p</p>
                <button class="btn-cesta">Add to cart</button>
            </div>

            <div class="product">
                <img src="/docker-lamp/www/php_project/img/brakeDiscs.jpg" alt="Brake discs">
                <p class="product-name">Brake discs</p>
                <p class="product-price">200€ p.v.p</p>
                <button class="btn-cesta">Add to cart</button>
            </div>

            <div class="product">
                <img src="/docker-lamp/www/php_project/img/llanta.png" alt="Wheels">
                <p class="product-name">Wheels</p>
                <p class="product-price">300€ p.v.p</p>
                <button class="btn-cesta">Add to cart</button>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>Cloud Motorsports</p>
        <p>Email: cloudmotorsports@gmail.com</p>
        <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
        <p>Phone: 981 234 234</p>
    </footer>
</body>
</html>
