<?php
    /* 
        * একটা Array এর মধ্যে আরো  Array এড করা হচ্ছে, মাল্টিডাইমেনশনাল Array;
    */

/*     $userInfo = [
        [1,"Saiful","Mirpur"],
        [2,"Islam","Dhaka"],
        [3,"Shanto","Narayanganj"],
    ]; */

/*     echo "<pre>";
    print_r($userInfo);
    echo "<pre>"; */

    /* foreach($userInfo as $value){
        foreach($value as $valueList){
            echo $valueList . "<br>";
            // echo $valueList;
            // echo "<br>";
        }
    } */

    /* for($i=0; $i< count($userInfo); $i++){
        // print_r($userInfo[$i]);
        // echo "<br>";

        for($j=0; $j<count($userInfo[$i]); $j++){
            echo $userInfo[$i][$j] . "<br>";
        }

    } */

    $userData = [
        [1," Shanto ",24],
        [2," Shanxxdto ",25],
        [3," Shddffdanto ",26],
    ];

/*     for($i=0; $i<count($userData); $i++){

        for($j=0; $j<count($userData[$i]); $j++){
            echo $userData[$i][$j];
        }
        
        echo "<br>";
    } */

    foreach($userData as $userData1){
        foreach($userData as $users){
            echo $userData[$userData1][$users];
        }
    }
?>
