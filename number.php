<?php

$n = 1;
$row=4;

for($i=1; $i<=$row; $i++)
{
    for($k=$row; $k>$i; $k--){
        echo "&nbsp &nbsp";
    }
    for($j=1; $j<=$i; $j++)
    {
        echo "*"."&nbsp &nbsp";   
        // $n++;
    }
    echo "<br>";
}
?>