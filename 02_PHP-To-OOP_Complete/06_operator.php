<?php
/* // Arithmatic Operator
echo "Arithmatic Operator" . "<br>";

$num1 = 12;
$num2 = 2;

// $result = $num1 + $num2;
// $result = $num1 - $num2;
// $result = $num1 * $num2;
// $result = $num1 / $num2;
// $result = $num1 % $num2;
// $result = $num1 ** $num2;

echo "Number is " . $result; */

// => Assignment Operator
/* echo "Assignment Operator" . "<br>";

$num1 = 12;
$num2 = 2;
$result = $num1 + $num2;

// $num3 = $num1;
// $num1 += $num2; //=> $num2 = $num2 + $num2  = 12+2 => 14
// $num1 -= $num2; //=> $num2 = $num2 - $num2  = 12-2 => 10
// $num1 *= $num2; //=> $num2 = $num2 * $num2  = 12*2 => 24
// $num1 /= $num2; //=> $num2 = $num2 / $num2  = 12/2 => 6
// $num1 %= $num2; //=> $num2 = $num2 % $num2  = 12%2 => 0

echo $num1;

// echo "Number is " . $result; */


// => Comparison  Operator
/* echo "Comparison Operator" . "<br>";

$num1 = 12;
$num2 = 112;
// $result = $num1 == $num2;
// $result = $num1 === $num2;
// $result = $num1 != $num2;
// $result = $num1 !== $num2;
// $result = $num1 <> $num2; //=> not Equal
// $result = $num1 > $num2;
// $result = $num1 >= $num2;
// $result = $num1 < $num2;
// $result = $num1 <= $num2;
// $result = $num1 <=> $num2; < -1 / = 0 / > 1

// echo $result;
var_dump($num1 <=> $num2) */

/* 
    * Spaceship Operator
    * var_dump($num1 <=> $num2)
    * ৩ টা ভ্যেলু একসাথে কম্পেয়ার করে
        * Less then < -1 
        * Equal = 0 
        * Grater Then > 1
*/

?>

<?
// increment & decrement
/* $num1 = 10;
echo $num1 . "<br>";
$num1++;
echo $num1 . "<br>";
++$num1;
echo $num1 . "<br>"; */

/* $num1 = 10;
echo $num1 . "<br>";
$num1--;
echo $num1 . "<br>";
++$num1;
echo $num1 . "<br>";
--$num1;
echo $num1 . "<br>"; */
?>

<?php
// String & String Opearator

$charIS = "Hyper Text Preprocesor";
$strNum = "10";

// echo "PHP : ". $charIS ." ". $strNum . "<br>"; 
// echo "PHP : $charIS $strNum ". "<br>"; 
// echo 'PHP : $charIS $strNum '. "<br>"; -> Its show variable Name don't show output 
/* 
    * String Operator
    -> . concatinate Operator to connect variables
    -> .= assignment concatinate Opearator
*/

$charIS = "Hyper Text Preprocesor";
$strNum = " 10";
echo "PHP : $charIS $strNum ". "<br>"; 

$charIS.=$strNum;
echo "PHP : $charIS". "<br>"; 
?>