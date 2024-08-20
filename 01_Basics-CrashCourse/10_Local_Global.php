<?php

    /* 
        * $variable -> Local
        * defind("name",value) -> Constant is global
    */

    
    /* function checkLocal(){
        $LocalVar = 10;
        echo($LocalVar);
    }

    checkLocal(); */

    define('helloIs',17)

    function checkGlobal(){
        echo('helloIs');
    }
    checkGlobal();
?>
