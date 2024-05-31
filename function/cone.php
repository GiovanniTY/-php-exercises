<?php

/* // Volume of a cone which ray is 5 and height is 2
$volume = 5 * 5 * 3.14 * 2 * (1/3);
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';
// Volume of a cone which ray is 3 and height is 4
$volume = 3 * 3 * 3.14 * 4 * (1/3);
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />'; */

function calculateVolumeCone($ray,$height) {
    $pi = pi();
    $volume = (1/3) * $pi * pow($ray, 2) * $height;
    return $volume;
}
$ray = 5;
$height = 2;
$volume = calculateVolumeCone($ray,$height);
echo  "The volume of the cone is: " . $volume . " cubic centimeters";


?>