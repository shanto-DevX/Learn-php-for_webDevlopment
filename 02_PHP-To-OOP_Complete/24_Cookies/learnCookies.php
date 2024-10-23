<?php
    $fruit = "apple";
    
    setcookie("Fruit",$fruit,time()+(86400));
    // print_r($_COOKIE)
    if(isset($_COOKIE['Fruit'])){
        print_r($_COOKIE);
    }else{
        echo "Cookie not set";
    }
    
        echo "<br>";


    $color = "red";
    setcookie("Color",$color,time()+(86400));

    if(isset($_COOKIE['Color'])){
        print_r($_COOKIE);
    }else{
        echo "Cookie not set";
    }


?>