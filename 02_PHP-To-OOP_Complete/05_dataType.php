<?php
    echo "DataType". "<br>";

    /* echo "String";
    $name = "hello 'World' Php";
    var_dump($name . "<br>");
    echo $name . "<br>"; */


/*     echo "Integer". "<br>";
    $num = 12345678;
    echo $num . "<br>";
    var_dump($num); */


    /* echo "Float". "<br>";
    $num = 3.1416;
    echo $num;
    var_dump($num); */


/*     echo "Boolean". "<br>";
    $isLogin = true;
    var_dump($isLogin) */

    
    /* echo "null". "<br>";
    $noValuel = null;
    // $noValuel; -> Undefined
    echo var_dump($noValuel); */

/*     echo "Array". "<br>";
    $arr = ["Php","Javascript","Python","C","c++", 5];
    echo var_dump($arr); */


    /* echo "Object(Class)". "<br>";

    $user = new className(); */


    echo "Recourse". "<br>";
    // store data in database / ftp connect

    $connection = ftp_connect("127.0.0.1") or die("Local Host Not FOund");
    echo var_dump($connection);

?>

<!-- -> 8:11 -->