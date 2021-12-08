<?php
    //sessions in php

    //to set a session
    session_start();//if using sessions this will be on the top of html page
    if(isset($_SESSION['username'])){//if session is there then do this
    echo "welcome " . $_SESSION['username'];
    echo "<br> Your Favorite Catogory is ". $_SESSION['FavCategory'];
    echo "<br>";
    }else{
        echo "please login to continue";
    }
?>