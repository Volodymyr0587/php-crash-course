<?php

//* ------------------------ Cookies -----------------------------
/**
 * Cookies are a mechanism for storing data in the remote browser 
 * and thus tracking or indentifying return users. You can set specific data
 * to be stored in the browser, and then retrive it when the user visits 
 * the site again. 
 * 
 * !DO NOT SAVE SENSETIVE USERS DATA IN COOKIES (such as passswords)
 */


//? SET COOKIE
setcookie("name", "Volodymyr", time() + 86400 * 30); // set cookie for 30 days

//? GET COOKIE
if (isset($_COOKIE["name"])) {
    echo "Cookie: ". $_COOKIE["name"];
}

//?DELETE COOKIE
setcookie("name", '', time() - 86400);


