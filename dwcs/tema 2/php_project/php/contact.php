<?php
session_start(); 

$error_message = $confirmation_message = $name = $email = $message = "";

  if (!isset($_SESSION['user_id'])) {
      header("Location: login.php");
      exit();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
  
    if (empty($_POST["message"])) {
      $nameErr = "Message is required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error_message = "Insert a valid email, please.";
      } else {
          $confirmation_message = "Thank you, {$name} ! We have received your message and will reply shortly on {$email}";
      }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php_project/css/style.css">
    <link rel="shortcut icon" href="/php_project/img/icon.ico" type="image/x-icon"/>
    <title>Contact</title>
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
                $loggedIn = isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : false;
                if ($loggedIn): ?>
                    <li><a href="#"><img src="/php_project/img/salida.png" alt="Logour">You are logged in</a></li>
                <?php else: ?>
                    <li><a href="login.php"><img src="/php_project/img/entrar.png" alt="Login"></a></li>
                <?php endif; ?>
                <li><a href=""><img src="/php_project/img/carro-de-la-compra.png" alt="Cart"></a></li>
            </ul>
        </nav>
    </div>
</div>  

<div class="text">
    <h1>Contact with us</h1>
</div>

<div class="form">
    <?php if ($confirmation_message): ?>
        <p class="confirmation"><?= $confirmation_message ?></p>
    <?php elseif ($error_message): ?>
        <p class="error"><?= $error_message ?></p>
    <?php else: ?>
        <form class="form_action" action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send">
        </form>
    <?php endif; ?>
</div>

<div class="footer">
    <p>Cloud Motorsports</p>
    <p>Email: cloudmotorsports@gmail.com</p>
    <p>Address: Rua Carmiña dos Pazos, 25, Bajo</p>
    <p>Phone: 981 234 234</p>
</div>

</body>
</html>
