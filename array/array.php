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
        

    $me['hobbies'] = ["Coding" , "ps5"];

        echo '<pre>';
        print_r($me);
        echo '</pre>';
    $mymom = ['firstname' => 'Anna Maria',
             'lastname' => 'Russ',
             'age' => 53,
            'hobbies' => ['cooking', 'Travel']];
    
    $me["mother"] = [$mymom];
    echo '<pre>';
    print_r($me);
    echo '<pre>';

    
?>
</body>
</html>