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
                <li><a href="login.php"><img src="/img/user.png" alt="logout"></a></li>
                <li><a href=""></a><img src="/img/cart.png" alt="cart"></li>
            </ul>
        </nav>
    </div>
</div>      
    


    <div class="text">
        <h1>Contact with us</h1>
    </div>

    <div class="form">

        <form class="form_action" action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Send">
        </form>

    </div>

<div class="footer">
        <p>Cloud Motorsports</p>
        <p>Email: cloudmotorspots@gmail.com</p>
        <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
        <p>Phone: 981 234 234</p>
    </div>
</body>
</html>