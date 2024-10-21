<?php
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
    echo ('<h1>Task2.6</h1>');
    echo ('<select name=”opcion”>');
    echo ('<option value=””>Selecciona una opción</option>');
    foreach($productos as $key => $value ) {
        echo ('<option value=”'.$key.'”>'.$value['text'].' ('.$value['precio'].' €)</option>');
    }
    echo ('</select>');
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
    <?php createSelect($productos); ?>
</body>
</html>
