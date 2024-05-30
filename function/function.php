<?php

/* $str= "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole .";

$str= explode(" ", $str);

foreach ($str as $word){
	
	echo str_shuffle($word)." ";
}
 */

/* echo ucfirst("emily");

echo  date('m/d/Y h:i:s a', time());*/

/* function sum($a,$b){
    if(!is_numeric($a) && !is_numeric($b)){
        return "ERROR";
    } else 
    return $a + $b;
}

echo sum("ciao","vio"); */

/* $text = "In code we trust!";
$words = explode(' ', $text);
function getFirstLetter($word) {
    // Utiliser substr pour obtenir la première lettre
     
    return  substr($word, 0, 1);

}

foreach ($words as $word ) {  
    echo getFirstLetter($word) . " ";

}
 */

 $tab = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
 $search = "ae";
 $replace = "æ" ;

 foreach ($tab as $key => $word) {
    $tab[$key] = str_replace($search, $replace, $word);
}

 print_r($tab);

 

?>