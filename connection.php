<?php

    $db=mysqli_connect("localhost","root","","customers");

if(!$db)
{
    die("Connection failed" . mysqli_connect_error());
}

echo "Connected Successfully.";






?>