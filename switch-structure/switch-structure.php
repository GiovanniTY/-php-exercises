<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'ecole est vraiment nul</title>
</head>
<body>
    <form method="get" action="">
    <label for="grade">Please, grade a student </label>
	<input type="" name="grade">
	<input type="submit" name="submit" value="Greet me now">
</form>
    <?php
    if (isset($_GET["grade"])) {
        $grade = $_GET["grade"];
        switch (true) {
            case ($grade <= 4):
                echo "<br>This work is really bad. What a dumb kid!";
                break;
            case ($grade >= 5 && $grade <= 9):
                echo "<br>This is not sufficient. More studying is required.";
                break;
            case ($grade == 10):
                echo "<br>barely enough!";
                break;
            case ($grade >= 11 && $grade <= 14):
                echo "<br>Not bad!";
                break;
            case ($grade >= 15 && $grade <= 18):
                echo "<br>Bravo, bravissimo!";
                break;
            case ($grade == 19 || $grade == 20):
                echo "<br>Too good to be true : confront the cheater!";
                break;
            default:
                echo "<br>Invalid grade.";
                break;
        }
    }
    ?>