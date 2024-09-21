<!-- 
16_MultiDimentional_associative-Array.php 
* multidimentional array এর সাথে key এড করলে 
-->

<?php
/* $users = [
    ["id" => 12,
    "Name" => " Shanto",
    "Email" => "Shanto@gmail.com"
    ],
    ["id" => 122,
    "Name" => " cdkjnShanto",
    "Email" => "Shantiydcsbo@gmail.com"
    ],
    ["id" => 142,
    "Name" => " cdkjnjmhgjShanto",
    "Email" => "ngjmjhjh@gmail.com"
    ],
];
// print_r($users);
foreach($users as$user){
    foreach($user as  $key => $item){
        echo "$key is $item";
        echo "<br>";
    }
    echo "<br>";
} */
?>

<?php
$users = [
    ["id" => 12,
    "Name" => " Shanto",
    "Email" => "Shanto@gmail.com"
    ],
    ["id" => 122,
    "Name" => " cdkjnShanto",
    "Email" => "Shantiydcsbo@gmail.com"
    ],
    ["id" => 142,
    "Name" => " cdkjnjmhgjShanto",
    "Email" => "ngjmjhjh@gmail.com"
    ],
];
// print_r($users);
echo "<table border=1>";
foreach($users as$user){
    echo "<tr>";
    foreach($user as  $key => $item){
        echo "<td>";
        echo "$key <br> $item";
        echo "</td>";
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";
?>