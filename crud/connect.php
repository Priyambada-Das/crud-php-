<?php

$con=new mysqli('localhost','root');
mysqli_select_db($con,'crudoperation');

if(!$con){
    die(mysqli_error($con));
}

?>