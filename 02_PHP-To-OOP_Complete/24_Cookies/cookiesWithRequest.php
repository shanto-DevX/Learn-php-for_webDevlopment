<?php

/* if(isset($_POST['button'])){
    if($_POST['button']== "set"){
        $val = $_POST['user'];
        setcookie('user',$val, time()+86200);
        echo "Cokkie is set";
    }

    if($_POST['button'] == "display"){
        if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];
        }
    }

    if($_POST['button'] == "Delete"){
        if(isset($_COOKIE['user'])){
            setcookie("user",null,-1);
            echo "Cookie Delete";
        }
    }
} */

?>


<?php

    /* if(isset($_POST['button'])){
        if($_POST['button'] =="Set"){
            $val = $_POST["user"];
            setcookie("user",$val, time()+82600);
            echo "Cookie Set";
        }
    } */

    if(isset($_POST['button'])){
        if($_POST['button'] == "Set"){
            $val = $_POST['user'];
            setcookie('user',$val,time()+86200);
            echo "Cookies Set";
        }

        if($_POST['button'] == "Display"){
            if(isset($_COOKIE['user'])){
                echo "Show User : " . $_COOKIE['user'];
            }
        }

        if($_POST['button']=="Delete"){
            if(isset($_COOKIE['user'])){
                setcookie("user",null,-1);
                echo "Cookie Delete";
            }
        }
    }
?>