<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
<label>Select your gender:</label>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label>
	<label for="age">Please, Enter your age </label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
   
</form>
<?php 
if (isset($_GET['age']) && isset($_GET['gender'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if (!is_numeric($age)){
    echo "Error";
    } else {
        $age = intval($age);

    if ($age < 12) {
    echo "Hello gamin";
    } elseif ( $age >= 12 && $age <= 18) {
        echo "Bonjour Adolescent";
    }elseif ($age >= 18 && $age <= 115){
        echo "Bonjour Adulte";
    } elseif ($age > 115){
        echo "Wow ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";
    }
    if($gender == "male"){
        echo " mr";
     } else {
        echo "mrs";
    }
}

}
 
    ?>
</body>
</html>
