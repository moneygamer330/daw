<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon"/>
    <title>Main Page</title>
</head>
<body>
<header>

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
                    <li><a href="contact.php">contact</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="secondNavbar">
            <nav>
                <ul>
                   <!-- Si el usuario está logueado, mostramos un mensaje -->
                   <?php if ($loggedIn): ?>
                        <li><a href="#"><img src="/img/user.png" alt="User">You are logged in</a></li>
                    <?php else: ?>
                        <!-- Si no está logueado, mostramos el enlace al login -->
                        <li><a href="login.php"><img src="/img/user.png" alt="Login"></a></li>
                    <?php endif; ?>
                    <li><a href="cart.php"><img src="/img/cart.png" alt="Cart"></a></li>
                </ul>
            </nav>
        </div>
    </div>      
</header>
    
    <div class="main">
        <p>Here you can find the best products for your car</p>
    </div>
    
    <div class="footer">
        <p>Cloud Motorsports</p>
        <p>Email: cloudmotorspots@gmail.com</p>
        <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
        <p>Phone: 981 234 234</p>
    </div>

</body>
</html>