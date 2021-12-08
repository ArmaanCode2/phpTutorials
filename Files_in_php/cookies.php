<?php
// how to set cookies 
    echo "Cookies in php<br>";

    // syntax to set a cookie
    setcookie("category", "books", time() + 86400, "/");//time() tells the seconds since 1970 something
    //arguments ==> ("name" , "value" , when to expire in seconds , "/ is for entire page that you want to use cookie in entire page")
    echo "the cookie is set";
?>