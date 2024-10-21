<?php
$username = $password = $employment = $webServer = $role = "";
$sso = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'])) {
        $username = test_input($_POST['username']);
    }

    if (isset($_POST['password'])) {
        $password = test_input($_POST['password']);
    }

    if (isset($_POST['employment'])) {
        $employment = test_input($_POST['employment']);
    }

    if (isset($_POST['webServer'])) {
        $webServer = test_input($_POST['webServer']);
    }

    if (isset($_POST['role'])) {
        $role = test_input($_POST['role']);
    }

    if (isset($_POST['sso'])) {
        $sso = array_map('test_input', $_POST['sso']);
    } else {
        $sso = [];
    }
}


function test_input($data) { //function to clean the data and do some basic validation
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
    <title>Task 2.8</title>
    <style>
        body {
            display: block;
        }
    </style>

</head>
<body>

    <h1>Novell Services Login</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <label for="username">Username:</label> 
    <input type="text" name="username" value="<?php echo $username; ?>" required>
    
    <br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" value="<?php echo $password; ?>" required>
    
    <br>
    
    <label for="employment">Employment:</label> 
    <input type="text" name="employment" value="<?php echo $employment; ?>" required>
    
    <br>
    
    <label for="webServer">Web Server:</label>  
    <select name="webServer">
        <br>
        <option value="apache" <?php if ($webServer == "apache") echo "selected"; ?>>Apache</option>
        <br>
        <option value="nginx" <?php if ($webServer == "nginx") echo "selected"; ?>>Nginx</option>
        <br>
        <option value="iis" <?php if ($webServer == "iis") echo "selected"; ?>>IIS</option>
    </select>

    <br>
    <br>

        <label for="role">Please specify your role:</label>
        <br>
        <input type="radio" name="role" value="admin" <?php if ($role == "admin") echo "checked"; ?>>Admin
        <br>
        <input type="radio" name="role" value="engineer" <?php if ($role == "engineer") echo "checked"; ?>>Engineer
        <br>
        <input type="radio" name="role" value="guest" <?php if ($role == "guest") echo "checked"; ?>>Guest
        <br>
        <input type="radio" name="role" value="manager" <?php if ($role == "manager") echo "checked"; ?>>Manager

    <br>
    <br>
    
    <label for="sso">Single Sign-On:</label>    
    <br>
    <input type="checkbox" name="sso[]" value="Mail" <?php if (in_array("Mail", $sso)) echo "checked"; ?>>Mail
    <br>
    <input type="checkbox" name="sso[]" value="Payroll" <?php if (in_array("Payroll", $sso)) echo "checked"; ?>>Payroll
    <br>
    <input type="checkbox" name="sso[]" value="Self-Service" <?php if (in_array("Self-Service", $sso)) echo "checked"; ?>>Self-Service

    <br>
    <br>

    <input type="submit" name="login" value="Login">
    <input type="reset" name="reset" value="Reset">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Your Input:</h2>";
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";
        echo "Employment: " . $employment . "<br>";
        echo "Web Server: " . $webServer . "<br>";
        echo "Role: " . $role . "<br>";
        echo "Single Sign-On: " . implode(", ", $sso) . "<br>";
    }
    ?>

</body>
</html>