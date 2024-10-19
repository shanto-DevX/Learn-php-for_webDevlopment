<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call Php Function</title>
</head>
<body>
    <form action="" method="post">
        <!-- <button name= "button" value="Btn1">Call Function</button> -->
         <button>Sum</button>
    </form>
</body>
</html>

<?php

/* if(isset($_POST['button'])){
    btn_click();
}
if(isset($$_Get['button'])){
    btn_click();
} */

if(isset($_REQUEST['button'])){
    btn_click()
}

function btn_click(){
    echo "Function Clicked";
}
?>