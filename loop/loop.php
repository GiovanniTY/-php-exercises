

<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun) { 
    if ($pronoun == 'He/She') {
        $verb = 'codes';
    } else {
        $verb = 'code';
    }
    echo ' '. $pronoun .' '. $verb . ' ' . '<br>';
}

   



?>