<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
} 

//1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [ "health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == "health hazard" ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "filthy" ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else if ($room_filthiness =="dirty" or "clean" or "immaculate" ) {
	echo "<br>Nothing to do, room is neat.";
} 

?>