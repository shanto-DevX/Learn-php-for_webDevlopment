<?php
    session_start();

    $_SESSION['FavColor'] = "Green";
    $_SESSION['FavProgramming'] = "Javascript & php";

    echo "Session Variable is set " . "<br>";

    // echo "Favorite Color is : " . $_SESSION['FavColor']. "<br>";
    // echo "Favorite Praogramming is : " . $_SESSION['FavProgramming']. "<br>";


    print_r($_SESSION);
?>