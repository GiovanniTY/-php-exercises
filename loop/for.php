<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercise</title>
</head>
<body>
    
</body>
</html>

<?php

$states = [
    'BE' => 'Belgique',
    'IT' => 'Italie',
    'ES' => 'Espagne',
    'FR' => 'France',
    'CH' => 'Suisse',
    'DE' => 'Allemagne',
    'LU' => 'Luxembourg',
    'NL' => 'Pays Bas',
    'RO' => 'Roumanie'
];

echo '<form action ="" method="post">';
echo '<label for="state"> Choose a state:</label>';
echo '<select name="state" id="state">';

foreach ($states as $key => $state) {
    echo '<option value="' . $state . '">' . $key . '</option>';

}

echo '</select>';
echo '<input type= "submit" value="submit">';
echo '</form>';

/* for($n = 1 ; $n <=120 ; $n++) {
    
    echo $n;
  
}

 */

/*  $keller7 = [ 'Lyne','Dj3y','Zara', 'Manu le goat','Adrien','Nath','Iliess','Caroline','Arnaud','Stacy','Justine','Angel','Dylan','Adca','Giovanni'];
 foreach ($keller7 as $key => $value) {
    echo''. ' '. $value .' <br>';
 } */



?>