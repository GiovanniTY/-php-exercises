<?php
/* 
 Si l'heure est comprise entre 05h00 et 09h00, affichez "Bonjour !".
Si l'heure est comprise entre 09h01 et 12h00, affichez "Bonne journée !".
Si l'heure est comprise entre 12h01 et 16h00, affichez "Bon après-midi !".
Si l'heure est comprise entre 16h01 et 21h00, affichez "Bonsoir !".
Si l'heure est comprise entre 21h01 et 04h59, affichez "Bonne nuit !". */

date_default_timezone_set("Europe/Brussels");
$current_time = date("H:i:s");
// Converting current time to timestamp for comparison
$current_timestamp = strtotime($current_time);
echo "The time is " . $current_time . "<br>"; 

if ($current_timestamp >= strtotime("05:00:00") && $current_timestamp <= strtotime("09:00:00")) {
    echo "Good Morning";
} else if ($current_timestamp >= strtotime("09:01:00") && $current_timestamp <= strtotime("12:00:00")) {
    echo "Have a good day";
} else if ($current_timestamp >= strtotime("12:01:00") && $current_timestamp <= strtotime("16:00:00")){
    echo "Have a good afternoon";
} else if ($current_timestamp >= strtotime("16:01:00") && $current_timestamp <= strtotime("21:00:00")){
    echo "Good evening";
} else {
    echo "Good night";
}
?>

