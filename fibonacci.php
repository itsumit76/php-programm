<?php

/*Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
o 34 */

 function fibonacci($num){
    $n1=0;
    $n2=1;
    for($i=1; $i<$num; $i++){
        $n3 = $n1 + $n2;
        $n1=$n2;
        $n2=$n3;
        echo $n3.' ';
    }
 }
 echo fibonacci(9);
?>