<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
                $number = 4;

                function factorial($number) {
                    if ($number <= 1) {
                        return 1;
                    } else {
                        return $number * factorial($number - 1);
                    }
                }

                echo "<h1>The factorial of $number is ".factorial($number)."</h1>";   
        ?>
    </body>
</html>