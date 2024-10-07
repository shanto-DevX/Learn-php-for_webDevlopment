<?php 

// echo"sign up page";
// print_r($_POST)

if($_POST){
    echo "User Name : " . $_POST['User_name'];
    echo "<br>";
    echo "User Password : " . $_POST['User_pass'];
    echo "<br>";
    echo "User Email : " . $_POST['User_email'];
}

?>