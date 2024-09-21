<?php

// -> Local Variable
    /* * Work inside the function */

    /*
        function getName(){
            $name = "shanto";
            echo($name);
        }

        echo $name; |> Error, can't access outside
        getName() 
    */


// -> Global Variable
    /* 
    * Create outide the function and access everywhere 
    * use sameName -> Global & Local Variable
    * global Variable ব্যবহার এর জন্য function এর ভিতরে global কিওয়ার্ড দিতে হয়
    */

    
    /* $name = "shanto";
    function getName(){
        $name = "Shanto in local";
        echo $name . "<br>";
    } 

    getName();
    echo($name . " Global"); */



// -> Global Variable inside function
// * global Variable ব্যবহার এর জন্য function এর ভিতরে global কিওয়ার্ড দিতে হয় variable এর আগে।  global $name;

    /* $name = "Shanto";
    function getName(){
        global $name;
        echo($name . " Inside <br>");
    }

    getName();
    echo($name . " Global"); */

    /* 
    * change Global Variable inside the function
    $name = "Saiufl ";

    function getName(){
        global $name;
        // -> Update Global Variable
        $name = "shanto ";
        echo($name. "Inside Function <br>");
    }

    getName();
    echo($name. "Outside Function <br>"); */


// -> Variable nesting function

$name = "Saiful - G 1 <br>";
function test(){
    // $name = "Islam - L  2<br>";
    global $name;
    echo $name;

    function innerTest(){
        $name = "Shanto - N L 3<br>";
        echo $name;
    }

}

echo $name;
test();
innerTest();

?>