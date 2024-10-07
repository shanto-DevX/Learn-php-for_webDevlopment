<?php
    // echo "this is php login file";
    /* echo " User Name Is : ".$_GET['User_name'];
    echo "<br>";
    echo " User Password Is : ".$_GET['User_pass']; */
?>

<?php
    // echo "this is php login file";
    if($_GET){
        echo " User Name Is : ".$_GET['User_name'];
    echo "<br>";
    echo " User Password Is : ".$_GET['User_pass'];
    }else{
        echo "No Get Data Found"; 
    }
?>