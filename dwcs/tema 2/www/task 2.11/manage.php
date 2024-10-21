<?php

$cookie_nameSurname = "";
$cookie_subject = "";
$cookie_classType = "";
$messageError = "";

$subjects = [
    "Java Programming", 
    "Web Design",
    "Dockers administration",
    "Django framework", 
    "Mongo database"
];

setcookie($cookie_nameSurname, $cookie_nameSurname, time() + (86400 * 30), "/");
setcookie($cookie_subject, $cookie_subject, time() + (86400 * 30), "/");
setcookie($cookie_classType, $cookie_classType, time() + (86400 * 30), "/");

function test_input($data) { 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST['nameSurname'])) {
//         $messageError = "Name and surnames are required.";
//         echo "".$messageError;
//     } else {
//         $nameSurname = htmlspecialchars($_POST['nameSurname']);
//     }

//     if (empty($_POST['subjects'])) {
//         $messageError = 'Subject is required.';
//         echo "".$messageError;
//     } else {
//         $subjectIndex = intval($_POST['subjects']);
//         if (isset($subjects[$subjectIndex])) {
//             $subject = $subjects[$subjectIndex];
//         } else {
//             $messageError = 'Invalid subject selected.';
//             echo "".$messageError;
//         }
//     }

//     if (empty($_POST['classType'])) { 
//         $messageError = "Class type is required.";
//         echo "".$messageError;
//     } else {
//         $classType = htmlspecialchars($_POST['classType']);
//     }
// }

if (!isset($_COOKIE[$cookie_nameSurname])) {
    $messageError = 'Name and surnames are required';
    echo ''.$messageError;
} else {
    $nameSurname = $_COOKIE[$cookie_nameSurname];
}

if (!isset($_COOKIE[$cookie_subject])) {
    $messageError = 'Subject is required';
    echo ''.$messageError;

} else {
    $subject = $_COOKIE[$cookie_subject];
}

if (!isset($_COOKIE[$cookie_classType])) {
    $messageError = 'Class type is required';
    echo ''.$messageError;
} else {
    $classType = $_COOKIE[$cookie_classType];
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
    <?php echo "<h2>".$cookie_nameSurname. ", wants to enroll in the subject: ".$cookie_subject."</h2>";?>

    <?php echo "<h2>".$cookie_classType." is the selected option.</h2>";?>

    <br>
    <br>

    <a href="/task 2.9/manage2.php">Link to third page</a>

</body>
</html>