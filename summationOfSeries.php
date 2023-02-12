<?php

// value initialized
$startNumber = 1;
$endNumber = 100;
$sum = 0;

for($i=$startNumber;$i<=$endNumber;$i++){
    $sum +=$i;
}

echo $sum;