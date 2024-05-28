<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>
    <form method="get" action="">
    <label>Are you a human, a cat or a unicorn ?</label>
    <input type="radio" name="gender" value="unicorn" id="unicorn">
    <label for="unicorn">Unicorn</label>
    <input type="radio" name="gender" value="human" id="human">
    <label for="human">human</label>
    <input type="radio" name="gender" value="cat" id="cat">
    <label for="cat">Cat</label>
    <input type="submit" name="submit" value="Enter">
    </form>

    <?php
    if(isset($_GET["gender"])){
        $gender = $_GET["gender"];
        $gifUrl = "";
        switch($gender) {
            case "unicorn":
            $gifUrl= "https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExdzl4bWhxN2MwaTA2a2t1eGlhaGVud2hheG9qaTd0bXZibDJzcWRzbyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/j0kQJxo5mzGYb4EvWK/giphy.gif";
            break;
            case "cat":
            $gifUrl= "https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExY2Zkbml0ZTN1Y3dyeHZpbHB3eDBsczIydDJrdXkzNnl4aXp4bjJrMSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/mlvseq9yvZhba/giphy.gif";
            break;
            case "human":
            $gifUrl = "https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzk5dTkzc2F0azV1eTM4dmlzZjM5djNsdTRxMWVzYTM5c2RiYWU1ayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/EzYnW4xdjN8zu/giphy.gif";
            break;
        }
        if ($gifUrl !== "") {
            echo '<div><img src="' . $gifUrl . '" alt="' . $gender . ' gif"></div>';
        } else {
            echo '<div><p>No valid selection made.</p></div>';
        }

    }

    ?>
    
</body>
</html>