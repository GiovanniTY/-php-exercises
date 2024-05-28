<!-- 6. L’équipe de football des filles
Vous souhaitez créer une équipe de football pour filles entre 21 et 40 ans.

Créez un formulaire demandant l'âge, le sexe et le nom de la personne.
 Utilisez les variables $ageet $genderdans un if/elsepour afficher un message
  « bienvenue dans l'équipe ! » ou « Désolé, vous ne répondez pas aux critères ». -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer Team</title>
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
    
</body>
</html>
<?php
 if(isset($_GET['age']) && isset($_GET['gender'])){
  $gender = $_GET['gender'];
  $age = $_GET['age'];
  $message = "Sorry you don't fit the criteria";
  if($age >= 21 && $age <= 40 && $gender =="female"){
    $message= "Welcome to the team";
  }
  echo $message;
}