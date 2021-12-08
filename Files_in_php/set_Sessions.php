<?php
    //sessions in php

    //to set a session
    session_start();
    $_SESSION['username'] = "armaan";
    $_SESSION['FavCategory'] = "Anime";
    echo "We have saved your session";
?>