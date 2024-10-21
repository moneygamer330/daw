<?php

$numProds = $opcion = $optionSelected =  "";
$price = 1;

$productos = array(
    "cocacola" => array(
        "text" => "Coca Cola",
        "precio" => 2.1
    ),
    "pepsicola" => array(
        "text" => "Pepsi Cola",
        "precio" => 2.0
    ),
    "fantanaranja" => array(
        "text" => "Fanta Naranja",
        "precio" => 2.5
    ),
    "trinamanzana" => array(
        "text" => "Trina Manzana",
        "precio" => 2.3
    )
);

function createSelect(array $productos): void{
    echo '<select name="opcion">';
    echo '<option value="">Selecciona una opcion</option>';
        foreach($productos as $key => $value ) {
            echo ('<option value=”'.$key.'”>'.$value['text'].' ('.$value['precio'].' €)</option>');
        }
        
    echo '</select>';

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
    <title>Task 2.7</title>
</head>
<body>
    <h1>Task 2.7</h1>device-width
    
    <br>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <?php createSelect($productos); ?>
        
        Number of products:<input type="number" name ="numProds" required>

        <br>

        <br>
        <input type="submit" name="enviar" value="Send">

    </form>

    <br>
    <hr>
    <br>

    <?php
        if(isset($_POST["enviar"])){
            if(empty($_POST["numProds"])){
            } else{
                $numProds = intval($_POST["numProds"]);
                $optionSelected = $_POST["opcion"];
            }
                $price = $productos[$optionSelected]['precio'] * $numProds;
        }
                
                echo '<p>You have asked for ' . var_dump($numProds) . ' bottles of ' . var_dump($optionSelected) . '.</p>';
                echo '<br>';
                echo '<p>Total price to pay: ' . var_dump($price) . ' euros.</p>';
               
    ?>
</body>
</html>