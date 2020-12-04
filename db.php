<?php

$connection = mysqli_connect('localhost','offer13_magaz','root','offer13_magaz');

if($connection == false)
    
{
    echo "no connection";
    echo mysqli_connect_error();
    exit();
}
?>