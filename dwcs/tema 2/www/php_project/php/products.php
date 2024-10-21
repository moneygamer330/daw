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
        <link rel="stylesheet" href="/php_project/css/products.css">
        <link rel="shortcut icon" href="/php_project/img/icon.ico" type="image/x-icon"/>
        <title>Products - Cloud Motorsports</title>
    </head>
    
    <body>
        <header class="navbarPrincipal">
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
    </header>

    <main>
        <div class="products">
            <div class="product">
                <img src="/php_project/img/filter.png" alt="High fluid air filter">
                <p class="product-name">High fluid air filter</p>
                <p class="product-price">100€ p.v.p</p>
                <button class="btn-cesta">Add to cart</button>
            </div>

            <div class="product">
                <img src="/php_project/img/brakeDiscs.jpg" alt="Brake discs">
                <p class="product-name">Brake discs</p>
                <button class="btn-cesta">Add to cart</button>
            </div>

            <div class="product">
                <img src="/php_project/img/llanta.png" alt="Wheels">
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
