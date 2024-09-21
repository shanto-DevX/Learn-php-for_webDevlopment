<!-- Type Casting -->
<?php
/* 
    |> (string)
    |> (int)
    |> (Float)
    |> (Bool)
    |> (array)
    |> (object)
    |> (unset) -> deprecated
*/

echo "LEarn typeCasting <br>"

?>

<?php

/* 
    * bool এ টাইপকাস্টিং এর সময় - সবসময় ট্র রিটার্ন করবে সুধু 0 থাকে ফলস রিটার্ন করবে।  
*/
    // $a = "10";
    // $a = 1.25;
    // $a = 1;
    // $a = "0";
    // $a = 10;
    // var_dump($a);

    // $a = 10;
    // $a = (string) $a;
    // $a = (float) $a;
    // $a = (bool) $a;
    // $a = (array) $a;

    // var_dump($a);

    // $s = 10;
    // $s = (unset) $s;
    // $s = (object) $s;
    // var_dump($s);

    // |> Show Error It's Can't be casting
    // $aryIs = ["a","b"];
    // $aryIs = (stirng) $aryIs;
    // var_dump($aryIs);

    // |> Working -> Convert str to array
    $strIs = "Hello World";
    $strIs = (array) $strIs;
    var_dump($strIs);
?>