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
        if ($grade <= 4) {
            echo "<br>This work is really bad. What a dumb kid! ";
        } elseif ($grade >= 5 && $grade <= 9) {
            echo "<br>This is not sufficient. More studying is required.";
        } elseif ($grade == 10) {
            echo "<br>barely enough!";
        } elseif ($grade >=11 && $grade <= 14) {
            echo "<br>Not bad!";
        } elseif ($grade >= 15 && $grade <= 18) {
            echo "<br>Bravo, bravissimo!";
        }elseif ($grade ==19 || $grade ==20){
            echo "<br>Too good to be true : confront the cheater!";
        }
    }
    ?>
    </body>
</html>

    <!-- /* note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!" */ -->
