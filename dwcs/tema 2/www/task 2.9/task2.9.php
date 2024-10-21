<?php 

$nameSurname = $subject = "";

$subjects = [
    "Java Programming", 
    "Web Design",
    "Dockers adminstration",
    "Django framework", 
    "Mongo database"
];

function makeSubjects($subjects) {
    echo '<select name="subjects">';
foreach ($subjects as $key => $subject) {
    echo '<option value="' . $key . '">' . $subject . '</option>';
}
echo '</select>';
};


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nameSurname'])) {
        $messageError = "Name and surnames are required.";
        echo "".$messageError;
    } else {
        $nameSurname = test_input($_POST['nameSurname']);
    }

    if (empty($_POST['subject'])) {
        $messageError = 'Subject is required.';
        echo "".$messageError;
    } else {
        $subject = test_input($_POST['subject']);
    }
}


function test_input($data) { 
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
    <title>Task 2.9</title>
</head>
<body>
    
    <h1>First practice using forms.</h1>

    <form method="POST" action="manage.php">

        <label for="nameSurname">Name and surnames:</label>
        <br>
        <input type="text" name="nameSurname">
        
        <br>
        <br>

        <label for="subject">Subject to enroll</label>
        <br>
        <?php echo makeSubjects($subjects);?>

        <br>
        <br>
        <input type="submit" value="Send data">
    </form>
</body>
</html>