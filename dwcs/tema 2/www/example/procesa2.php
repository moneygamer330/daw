<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
</head>
<body>
        <?php
        $name = $email = $nameErr = $emailErr = "";
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
        }
        ?>

        <h2>PHP Form Validation Example</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Name: <input type="text" name="name"><br> 
            <span style="color:red;"><?php echo $nameErr;?></span><br>
            E-mail: <input type="email" name="email"><br>
            <span style="color:red;"><?php echo $emailErr;?></span><br>
            <input type="submit">

        </form>
        
        <br>
        <hr>
        <br>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr)) { ?>
            Welcome <?php echo $name; ?>,<br>
            Your email address is: <?php echo $email; ?>
        <?php } ?>
    </body>
</html>