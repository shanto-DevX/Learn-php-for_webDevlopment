<?php

// |> FOR LOOP

$a = 5;

/* for($i = 1; $i<=10; $i++){
    echo $a. " X ". $i. " = " .$a*$i . "<br>";
} */

/* 
    |> Continue 
    * -> use befor Loop
    * -> if use Continue without Condition Then its stop don't show any output. 
*/

/* for($i = 1; $i<=10; $i++){
    if($i == 7){
        continue;
    }
    echo $a. " X ". $i. " = " .$a*$i . "<br>";
} */

/* for($i = 1; $i<=10; $i++){
    echo $a. " X ". $i. " = " .$a*$i . "<br>";
    if($i == 7){
        break;
    }
}

echo "<br>";
echo "=============";
echo "<br>";
echo "<br>";

for($i = 1; $i<=10; $i++){
    if($i == 7){
        break;
    }
    echo $a. " X ". $i. " = " .$a*$i . "<br>";
} */

// Nested FOR LOOP

/* for($i=1; $i<=3; $i++){
        echo $i . " Outer LOOP" . "<br>";
    for($j=1; $j<=3; $j++){  
        echo "--- " .$j . " Inner LOOP" . "<br>";
    }
} */


?>

<?php
// |> While LOOP

$num = 1;

/* while($num<=10){
    echo $num . "<br>";
    $num++;
} */

/* $num1 = 10;
while($num1>0){
    echo $num1 . "<br>";
    $num1--;
} */

?>

<?php
// |> Do While LOOP

$num1 = 0;
/* do{
    echo $num1 . "<br>";
    $num1++;
}while($num1<=10) */

do{
    $num1++;
    echo $num1 . "<br>";
}while($num1<=0)

?>