<!-- 
ARRAY ADD & REMOVE   
-->

<?php
/*     $fruit = ["apple","Banana","Orange"];
    array_push($fruit, "Mango", "Painaple");
    // array_pop($fruit);
    array_splice($fruit, -2);
    print_r($fruit); */


    $car  = ["BMW","Honda","BYD","Toyota",  "Roils Royles"];
    print_r($car);
    echo "<br>";
    array_push($car , "Lamborgini","Hoco");
    print_r($car);
    echo "<br>";
    array_pop($car);
    print_r($car);
    echo "<br>";
    array_splice($car,-4);
    print_r($car);
?>