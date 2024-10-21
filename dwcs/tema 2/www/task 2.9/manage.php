<?php

$nameSurname = $subject = $messageError = $classType = "";

$subjects = [
    "Java Programming", 
    "Web Design",
    "Dockers adminstration",
    "Django framework", 
    "Mongo database"
];

function test_input($data) { 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nameSurname'])) {
        $messageError = "Name and surnames are required.";
        echo "".$messageError;
    } else {
        $nameSurname = htmlspecialchars($_POST['nameSurname']);
    }

    if (empty($_POST['subjects'])) {
        $messageError = 'Subject is required.';
        echo "".$messageError;
    } else {
        $subjectIndex = intval($_POST['subjects']);
        if (isset($subjects[$subjectIndex])) {
            $subject = $subjects[$subjectIndex];
        } else {
            $messageError = 'Invalid subject selected.';
            echo "".$messageError;
        }
    }

    if (empty($_POST['classType'])) {
        $messageError = "Class type is required.";
        echo "".$messageError;
    } else {
        $classType = htmlspecialchars($_POST['classType']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
</head>
<body>
    <?php echo "<h2>".$nameSurname. ", wants to enroll in the subject: ".$subject."</h2>";?>

    <?php echo "<h2>".$classType." is the selected option.</h2>";?>

    <br>
    <br>

    <a href="/task 2.9/manage2.php">Link to third page</a>

</body>
</html>