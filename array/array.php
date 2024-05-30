<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<?php
$memberOfFamily = ["Emanuele", "AnnaMaria", "Emanuela","Giovanni","Marco"];
$myFavoriteFood = ["Pizza", "Ufficiale","Lasagne","Cannelloni"];
$myFavoriteMovie = ["Jurassic World","The wolf of wall street","Thor", "Friends with benefits"];

/* var_dump($myFavoriteFood); */

array_push($myFavoriteFood, "pasta al forno");

print_r($myFavoriteFood);

$myFavoriteFood = ["Gnocchi al pesto"];

    print_r($myFavoriteFood);

    $me = ['firstname' => 'Giovanni',
        'lastname' => 'Tummino',
        'age' => '27'];
        

    $me['hobbies'] = ["Coding" , "ps5","watch tv"];

        echo '<pre>';
        print_r($me);
        echo '</pre>';
    $mymom = ['firstname' => 'Anna Maria',
             'lastname' => 'Russ',
             'age' => 53,
            'hobbies' => ['cooking', 'Travel']];
    
    /* $me["mother"] = [$mymom]; */
    echo '<pre>';
    print_r($me);
    echo '<pre>';

    /* Count the number of elements
Say you want to know how many hobbies your mother has. Try to guess the native php function that allows you to count the number of elements in an array.
Below, count your own hobbies
Below, add both totals and display the total amount of hobbies. */

/* var_dump(count($me['hobbies']));
$totHobbies = array_merge($mymom['hobbies'] , $me['hobbies']);
var_dump(count($totHobbies)); */

$me['hobbies'] [] = 'Taxidermie';

print_r($me);

$me['lastname'] ='Durand';
print_r($me);

$soulmate = [
    'firstname' => 'Aline',
    'lastname' => 'Lurquin',
    'age' => 25,
    'hobbies' => [
        'Chevaux',
        'Promener',
        'watch tv',
        'Taxidermie'
    ]
];

print_r($soulmate);


/* $possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']); */ 

 $possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
print_r($possible_hobbies_via_intersection);



    
?>
</body>
</html>