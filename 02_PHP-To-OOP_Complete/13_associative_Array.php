<?php
/* 
    |> Associative Array
    * Index থাকে না, Key Attached থাকে। 
    * ["key" => "Value"]
*/

$UserInfo = [
    "Name" => "Shanto", 
    "Age" => 24, 
    "Location" => "Mirpur,Dhaka",
    "Learning" => "PHP"
];

/* echo $UserInfo["Name"];
echo "<br>";
echo $UserInfo["Age"];
echo "<br>";
echo $UserInfo["Location"];
echo "<br>";
echo $UserInfo["Learning"]; */

/* foreach($UserInfo as  $data){
    echo $data;
    echo "<br>";
} */

/* foreach($UserInfo as $key => $data){
    echo $key."  =>  ".$data;
    echo "<br>";
} */


foreach($UserInfo as $keyIS => $data):
    // echo $keyIS . "<br>";
    // echo $data . "<br> <hr>";

    echo $keyIS ." => ". $data; 
    echo "<br>";
endforeach;
?>