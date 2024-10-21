<?php declare(strict_types=1);

function person(?string $name, int $age, string $surname="Apellido"): void{
  echo "<b>". $name . " " . $surname . " is " . $age . " years old.</b>";
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <?php
        echo "<title>Task 2.4</title>"
        ?>
    </head>
    <body>
        <h1>Task 2.4</h1>
        <?php
        person("John", 20, "");
        echo "<br>";
        person("Jane", 25);
        ?>
    </body>

</html>
