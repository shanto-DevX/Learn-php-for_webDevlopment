<?php
// array PHP
/* 
    * Type of array
    * -> Indexed Array
    * -> Associative Array
    * -> Multidimentional Array

    |> https://www.freecodecamp.org/news/php-array-length-how-to-get-an-array-size/
*/

// $userName = ["Shanto ","Saiful ","Jone ","Doe"];
$userName = array(" Shanto "," Saiful "," Jone "," Doe");
// echo $userName[0];
// echo $userName[1];
// echo $userName[2];
// echo $userName[3];

for($i=0; $i<count($userName); $i++){
    // echo $i;
    // echo $i," =>",$userName[$i] . "<br>";
    // echo $i,$userName[$i];
    echo "<h2 style='color:red'>".$i ,$userName[$i]."<h2>";
}

?>