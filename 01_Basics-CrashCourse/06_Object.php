<?php
    /* 
        * 
    */

    class phone{
      var  $model;
      function phoneModel($number){
        global $model;
        $model = $number;
        echo "This is $model <br>";
      }
    }

$apple = new phone;
$apple -> phoneModel("Iphone 16");

$smasung = new phone;
$smasung -> phoneModel("smasung s24");

$LG = new phone;
$LG -> phoneModel("LG s24");

?>
