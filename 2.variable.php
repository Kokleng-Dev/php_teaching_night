<?php
//In PHP, a variable starts with the $ sign, followed by the name of the variable:

// local
// $x = 10;
// function name(){
//     //global
//     global $x;
//     $x = $x + 10;
//     echo $x;
// }

// name();

// echo "<h2>$x</h2>";


function myCal(){
    static $x = 10;
    echo $x . "<br>";

    $x = $x + 5;
}

myCal();
myCal();

?>