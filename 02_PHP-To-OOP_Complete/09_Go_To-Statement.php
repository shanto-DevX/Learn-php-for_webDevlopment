<?php
// |> Go To Statement
/* 
    * কন্ডিশন TRUE হলে এর মধ্যে কিছু লাইন স্কিপ করতে চাইলে Goto Statament ।
*/

/* $num = 20;
echo "Before Condition Line 8 <br>";

if($num == 20){
    goto jump;
}

// ==> Skip start
$num2 = 500;
echo $num2."<br>";
// ==> Skip End

jump:
echo "Statament Jump Line 18 <br>"; */


/* for($i=1;$i<=10;$i++){
    echo $i . "<br>";

    if($i==5){
        goto skipIs;
    }
}

// * এখানে ৫ এর পরে লুপ চলা বন্ধ হয়ে যাবে। 

skipIs:
echo "Loop Is Brack" */

$num=1;

/* while($num<=10){
    echo $num . " ";
    $num++;

    if($num > 5){
        goto skip;
    }
} */

do{
    echo $num . " ";
    $num++;

    if($num > 5){
        goto skip;
    }
}while($num <= 10);


skip:
echo "<br> Skip LOOP";
?>