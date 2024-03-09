<?php
//factorial of n use of function

function ft($num){

    if($num<2){
        return 1;
    }
    else{
        return $fact = $num * ft($num-1);
    }
}
echo ft(7);
?>