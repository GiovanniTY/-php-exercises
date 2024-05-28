<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuse</title>
</head>
<body>
<form method="get" action="">
    <label for="namechildren">Please, Enter children's name</label>
    <input type="text" name="namechildren" id="namechildren"><br>

    <label for="genderchildren">Gender</label>
    <input type="radio" name="genderchildren" value="male" id="male">
    <label for="male">Boy</label>
    <input type="radio" name="genderchildren" value="female" id="female">
    <label for="female">Girl</label><br>

    <label for="nameprof">Please, Enter Prof's name</label>
    <input type="text" name="nameprof" id="nameprof"><br>

    <label for="reasonabsence">Reason for the absence</label><br>
    <input type="radio" name="reasonabsence" value="illness" id="illness">
    <label for="illness">Illness</label><br>
    <input type="radio" name="reasonabsence" value="death-of-the-pet" id="death-of-the-pet">
    <label for="death-of-the-pet">Death of the pet (or a family member)</label><br>
    <input type="radio" name="reasonabsence" value="extra-curricular" id="extra-curricular">
    <label for="extra-curricular">Significant extra-curricular activity</label><br>
    <input type="radio" name="reasonabsence" value="other-excuse" id="other-excuse">
    <label for="other-excuse">Any other excuse of your choice</label><br>

    <input type="submit" name="submit" value="Greet me now">
</form>
<?php
if (isset($_GET['namechildren']) && isset($_GET['genderchildren']) && isset($_GET['nameprof']) && isset($_GET["reasonabsence"])) {
    $nameChildren = htmlspecialchars($_GET['namechildren']);
    $genderChildren = htmlspecialchars($_GET['genderchildren']);
    $nameProf = htmlspecialchars($_GET['nameprof']);
    $reasonAbsence = htmlspecialchars($_GET['reasonabsence']);

    if ($reasonAbsence == "illness") {
        echo "<br>Sorry Mr. " . $nameProf . ", my " . ($genderChildren == "male" ? "son " : "daughter ") . $nameChildren . " was unable to come to school today due to health reasons.";
     }elseif ($reasonAbsence == "death-of-the-pet" ) {
        echo "<br>Sorry Mr. " . $nameProf . ", my " . ($genderChildren == "male" ? "son " : "daughter ") . $nameChildren . " was unable to come to school today due to the death of a pet or family member.";
     } elseif ($reasonAbsence == "extra-curricular") {
        echo "<br>Sorry Mr. " .$nameProf . ", my " . ($genderChildren == "male" ? "son " : " daughter ") .$nameChildren . " was unable to come to school today due to significant extra-curricular activities.";
     }  elseif ($reasonAbsence == "other-excuse") {
        echo "<br>Sorry Mr. " . $nameProf . ", my " . ($genderChildren == "male" ? "son " : "daughter ") . $nameChildren . " was unable to come to school today for personal reasons.";
}
}
?>
    
</body>
</html>