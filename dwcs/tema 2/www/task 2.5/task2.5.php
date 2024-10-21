<?php declare(strict_types=1);

function check(array $numbers): bool{
    $count =0;
    $triple = false;
    $anterior = "";
    foreach($numbers as $number){
        if($number == $anterior){
            $count++;
        }else{
            $count = 0;
        }
        if($count == 2){
            $triple = true;
        }
        $anterior = $number;
    }
    return $triple;
}


function displayCapitals($countries) {
    foreach ($countries as $country => $capital) {
        echo "The capital of $country is $capital <br>";
    }
}

$ceu = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech RepublDocumentic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Task 2.5</h1>
    <?php
    echo "<br>";
    echo "<h1>Task 1</h1>";
    $firstArray = [1, 1, 2, 2, 1];
    $secondArray = [1, 1, 2, 1, 2, 3 ];
    $thirdArray = [1, 1, 1, 2, 2, 2, 1];
    echo "<h1>" .  var_dump(check($firstArray)) . "</h1>";
    echo "<br>";
    echo "<h1>" . var_dump(check($secondArray)) . "</h1>";
    echo "<br>";
    echo "<h1>" . var_dump(check($thirdArray)) . "</h1>";

    echo "<hr>";
    echo "<h1>Task 2</h1>";

    echo "<h1>" . displayCapitals($ceu) . "</h1>";
    echo "<br>"; 
?>
</body>
</html>