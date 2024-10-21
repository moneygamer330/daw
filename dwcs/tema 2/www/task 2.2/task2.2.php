<?php declare(strict_types=1);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 2.2</title>
    </head>
    <body>
        <?php 
            define("NUM", 2);
            define("POWER", 2);
                
            function calculatePower($num, $power): int{
                if(!is_int($num)){
                    throw new Exception("The number must be an integer");
                }
                else if($power < 2){
                    throw new Exception("The power must be greater than 1");
                } 
                else if($num < 0){
                    throw new Exception("The number must be greater than 0");
                }


                return $num ** $power;
            }        

            try{
                echo "<h1>" . NUM . " elevated to " . POWER . " is " . calculatePower(NUM, POWER) . "</h1>";
            } catch(Exception $e){
                echo "<h1>Error: " . $e->getMessage() . "</h1>";
            }

        ?>
    </body>
</html>