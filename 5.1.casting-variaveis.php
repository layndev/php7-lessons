<?php
// casting
    $a = 0;
    $b = "12";
    $c = 2.4;
    $d = "Ladino";

    // casting ou convertendo o tipo
    // para string
    $a1 = (string)$a;
    echo "($a)" . gettype($a) . " - " . "($a1)". gettype($a1);
    echo "<br />";

    // para int
    $c1 = (int)$c;
    echo "($c)" . gettype($c) . " - " . "($c1)". gettype($c1);
    echo "<br />";
    
    // para boolean
    $a1 = (bool)$a; 
    echo "($a)" . gettype($a) . " - " . "($a1)". gettype($a1);
    echo "<br />";
?>