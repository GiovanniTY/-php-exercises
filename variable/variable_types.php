<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php $first_name = 'Giovanni'; ?>
    <?php  $myAge = 27; ?>
    <p>Hi, my name is  <?php echo $first_name;?> and my age is <?php echo $myAge; ?> <p>
    <?php $my_family =array(
  0 => 'Emanuele', 
  1 => 'Anna', 
  2 => 'Marco', 
  3 => 'Emanuela', 
  4 => 'Giovanni',); ?>
 <?php $myEyesColor = 'brown' ?>

 <p>My eyes are <?php echo $myEyesColor?> <p>

 <p> The first person in my family is <?php echo $my_family[0] ?>
    
</body>
</html>