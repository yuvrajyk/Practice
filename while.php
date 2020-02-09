<?php

$i=1;
$sum=0;

while($i<=5){
    $sum=$sum+$i;
    $i=$i+1;
    // echo $sum;die();
}

echo $sum;

echo "<br>**************************************************************";

//while

$i=10;
$sum=0;
while($i>=1){
    $sum=$sum+$i;
    $i=$i-1;
    // echo $i;exit;
}
echo "<br>".$sum;

echo "<br>******************* Nested while loop ******************************************";

$i=1;
$j=1;

while($i<=5){
    $j=1;
    while($j<=5){
        echo "*";
        $j=$j+1;
    }
echo "<br>";
$i=$i+1;
}

?>