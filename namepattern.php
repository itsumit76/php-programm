<?php
$name = "MONU";
 $strl = strlen($name);

for($i=0; $i<$strl; $i++){

    for($j=0; $j<=$strl; $j++){
        echo "$name[$j]";
    }
    echo "<br>";
}
?>