<?php

    if(empty($_SESSION['lang'])) {
        $_SESSION['lang'] = "en";
    }
    if(isset($_GET['lang']) ) {
       
        if($_GET['lang'] == "am") {
            $_SESSION['lang'] = "am";
        }else if($_GET['lang'] == "ru") {
            $_SESSION['lang'] = "ru";
        }else {
            $_SESSION['lang'] = "en";
        }
    }
$lang = $_SESSION['lang'];
include("lang/$lang.php");
?>