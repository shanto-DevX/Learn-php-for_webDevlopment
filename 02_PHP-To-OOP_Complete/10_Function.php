<?php

/* 
    |> Function Type
    * -> User Defiend Function
    * ->  inbuild Function

    * -> |> simple function
    * -> |> Returning Value function
    * -> |> anonoymous Function
    * -> |> Parameterize Function
    * -> |> Variable Function
*/

/* function sum($a,$b){
   echo $a+$b;
}

sum(10,20); */

/* function title(){
    echo "Hello World! User Info <br>";
}

function userInfo($name,$age,$email, $color){
    title();
    echo "Name is : ". $name. "<br>";
    echo "Age is : ". $age. "<br>";
    echo "Email is : ". $email. "<br>";
    echo "<h1 style='color:$color'>DONE</h1>";
    echo "<hr>";

}

userInfo("Shanto",24,"Helloshanto@gmail.com", 'red');
userInfo("Saiful",27,"Hellosaiful@gmail.com", 'blue');
userInfo("hello",207,"Hellosaiful@gmail.com", 'green'); */

/* 
    * echo show display Value
    * Return show Output

    
function userName(){
    return "Shanto";
}

echo "<h1>My Name is : " . userName()."</h1>"

*/

// -> Function Default Parameter
/* 
    * last & Laster Parameter এ Default Parameter ভ্যেলু set করা ভালো, কারনঃ প্রথেম Parameter এ ভেলু সেট করলে কল করার সময় যদি প্রথম Parameter না দেওয়া হয় এবং দ্বিতীয় পেরামিটার দেওয়া হয় তখন Error আসে
*/
/*

function fruit($name,$color="red"){
    echo "Fruit Name: " . $name . "& Color Is " . $color;
} 
   fruit("Apple") 
*/


/* 
* Error
function fruit($name="Orange",$color){
    echo "Fruit Name: " . $name . "& Color Is " . $color;
}

fruit(,"Apple") */


//* => Nested Function

/* 
    * প্রথমে গ্লোবাল ফাংশন test1() কল করতে হবে এর পরে নেস্টেড ফাংশন কল করতে হবে
    * প্রথমে নেস্টেড ফাংশন কল করলে Error দেখাবে
    * প্রথমে গ্লোবাল ফাংশন test1() এর মধ্যে test2() ফাংশন তেরি এবং কল করলেন, test1() কল করলে দুইটাই আউটপুট আসবে 
    * ফাংশন তেরি করার আগে কল করলেও ফাংশন চলবে 
*/

/* function test1(){
    echo "Test Global 1 <br>";
    function test2(){
        echo "Test Nested 2 <br>";
    }
    // test2();
}

// test2(); -> Error
test1();
test2(); */

// * -> Variable Function

function test(){
    echo "Test Function";
}

$test = "test"; //* FunctionName
echo test();


?>