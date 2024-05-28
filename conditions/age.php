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
    <label> do you speak english?</label>
    <input type="radio" name="Anglais" value="yes" id="yes">
    <label for= "oui">yes </label>
    <input type="radio" name="Anglais" value="non" id="non">
    <label for="non"> No </label>

   
</form>
<?php 
if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['Anglais'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $Anglais = $_GET['Anglais'];

    if (!is_numeric($age)){
    echo "Error";
    } else {
        $age = intval($age);

    if ($age < 12 && $Anglais == "yes" && $gender== "male") {
    echo "Hello Boy";
    } elseif ($age < 12 && $Anglais == "yes" && $gender== "female") {
    echo "<br>Hello Girl";
    } elseif ($age < 12 && $Anglais == "non" && $gender== "female"){
    echo "<br>Aloha Girl";
    }elseif ($age < 12 && $Anglais == "non" && $gender== "male"){
    echo "<br>Aloha boy";
    } elseif ( $age >= 12 && $age <= 18 && $gender == "male" && $Anglais =="yes" ) {
        echo "<br>Hello Boy Adol";
    } elseif ($age >= 12 && $age <= 18 && $gender == "male" && $Anglais =="non" ) {
        echo "<br>Aloha Boy Adol";
    } elseif ($age >= 12 && $age <= 18 && $gender == "female" && $Anglais =="yes") {
        echo "<br>Hello Girl Adol";
    } elseif ($age >= 12 && $age <= 18 && $gender == "female" && $Anglais =="non") {
        echo "<br>Aloha Girl Adol";
    } elseif ($age >= 18 && $age <= 115 && $gender =="male" && $Anglais== "yes") {
        echo "<br>Hello Mr";
    }elseif ($age >= 18 && $age <= 115 && $gender =="male" && $Anglais== "non"){
        echo "<br>Aloha Mr";
    }elseif ($age >= 18 && $age <= 115 && $gender =="female" && $Anglais== "oui") {
        echo "<br>Hello Mrs";
    }elseif ($age >= 18 && $age <= 115 && $gender =="female" && $Anglais== "non") {
        echo "<br>Aloha Mrs";
    
    }elseif ($age > 115){
        echo "<br>Wow ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";
    }
}

}
 
    ?>
</body>
</html>
