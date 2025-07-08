<?php

$con=mysqli_connect("localhost","root","","testing",3307);

session_start();
session_unset();
session_destroy();

header('location:login.html');

?>