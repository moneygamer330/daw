<?php declare(strict_types=1);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 2.3</title>
    </head>
    <body>
        <?php 
                define("NUM", 12);

                function factorial(int $num): int {
                    if ($num < 0) {
                        throw new Exception("Can't calculate the factorial of a negative number");
                    }
                    if ($num <= 1) {
                        return 1;
                    } else {
                        return $num * factorial($num - 1);
                    }
                }

                try {
                    echo "<h1>The factorial of " . NUM . " is " . factorial(NUM) . "</h1>";   
                } catch (Exception $e) {
                    echo "<p>Error: " . $e->getMessage() . "</p>";
                }
        ?>
    </body>
</html>