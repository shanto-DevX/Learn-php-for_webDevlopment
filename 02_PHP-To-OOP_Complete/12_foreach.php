<?php
    echo "Learning Foreach". "<br>";
    /* 
        * using array Traverseing
    */

    // $users = ["A","B","C","D","E","F"];

/*     foreach($users as $x){
        // echo $x . "<br>";

        if($x === "E"){
            break; -> ABCD
        }
        echo $x;

        if($x === "E"){
            break; ABCDE
        }

        if($x === "E"){
            continue;
        }
        
        echo $x;
    } */
?>

<?php
/* $users = ["A","B","C","D","E","F"];

foreach($users as $x):
    echo $x;
endforeach; */

?>


<?php

    $users = ["A","B","C","D","E","F"];

    foreach($users as $user){
        echo $user;
    }
    echo "<br> <hr> <br>";
    foreach($users as $userList):
        echo $userList;
    endforeach;
?>