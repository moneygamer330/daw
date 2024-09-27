<?php

$numProds = $option = "";

$productos = [
    'cocacola' => [
        'text' => 'Coca Cola',
        'precio' => 2.1
    ],
    'pepsicola' => [
        'text' => 'Pepsi Cola',
        'precio' => 2.0
    ],
    'fantanaranja' => [
        'text' => 'Fanta Naranja',
        'precio' => 2.5
    ],
    'trinamanzana' => [
        'text' => 'Trina Manzana',
        'precio' => 2.3
    ]
];

function createSelect(array $productos): void{
    foreach($productos as $key => $value ) {
        echo ('<option value=”'.$key.'”>'.$value['text'].' ('.$value['precio'].' €)</option>');
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
    <title>Task 2.6</title>
</head>
<body>
    <h1>Task 2.7</h1>
    
    <select name="option">
        <option value="">Selecciona una opcion</option>
        <?php createSelect($productos); ?>
    </select>
    
    <br>
    <br>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        Number of products:<input type="number" name ="numProds" required>
        <input type="submit">

    </form>

    <br>
    <hr>
    <br>

    <p>You have asked for <?php echo $numProds?> bottles of <?php echo $option?>.</p>
    <br>
    <p>Total price to pay: <?php echo $option * $numProds?> euros.</p>



</body>
</html>
