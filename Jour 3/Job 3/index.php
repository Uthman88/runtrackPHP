<?php

$str = ["I'm sorry Dave I'm afraid I can't do that"];
$voy = ['A', 'E', 'I', 'O', 'U', 'Y', 'a', 'e', 'i', 'o', 'u', 'y'];

for ($i = 0; $i < strlen($str[0]); $i++) {

    if (in_array($str[0][$i], $voy)) {
        echo $str[0][$i];
    }
}
?>