
<?php

    // print_r($_GET) :- Use GET in Method
    // print_r($_POST) :- Use Post in Method

    // print_r($_REQUEST)

    /* foreach($_REQUEST as $data){
        echo $data . "<br>";
    } */

    $_REQUEST["Dummy"] = "Test";
    foreach($_REQUEST as $key => $data){
        echo $key . " Is ".$data . "<br>";
    }



?>