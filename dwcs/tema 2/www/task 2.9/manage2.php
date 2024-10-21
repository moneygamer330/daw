<?php 

$nameSurname = $subject = $classType = "";

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
    if (isset($_POST[''])) {
        $nameSurname = test_input($_POST['nameSurname']);
    } else {
        echo "Name and surnames are required.";
    }
    if (isset($_POST["subject"])) {
        $subject = test_input($_POST["subject"]);
    } else {
        echo "Subject is required.";
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

    <form method="post" action="manage.php">

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

        <label for="classType">Class Type:</label>
        <br>
        <input type="radio" id="inPerson" name="classType" value="In-person">
        <label for="inPerson">In-person classes</label>
        <br>
        <input type="radio" id="distance" name="classType" value="Distance">
        <label for="distance">Distance classes</label>
        <br>
        <br>
        <input type="submit" value="Send data">

    </form>
</body>
</html>