<?php
/* Create a script to construct a pattern, 
using a nested for loop.*/
 for ($x = 10; $x >= 1; $x--){
    for($y = 10; $y >= 1; $y-- ){
        echo "*";
        if($y > $x){
            echo " ";
        }
    }
    echo "<br>";
 }




?>