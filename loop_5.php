<?php
/* Write a program which will give you all of the potential 
combinations of a two-digit decimal combination, printed in 
a comma delimited format */
for ($i = 0; $i <10; $i++){
    for($j = 0; $j <10; $j++)
    echo $i.$j . ",";
}
?>