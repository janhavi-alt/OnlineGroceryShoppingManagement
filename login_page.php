<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con=mysqli_connect("localhost","root","","testing",3307);
session_start();

if(isset($_POST['submit'])){

    
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $select = " SELECT * FROM sign_up WHERE username = '$username' && password = '$password' ";
    
    $result = mysqli_query($con, $select);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
       
       echo"<script>alert('Welcome $username')</script>";
            echo"<a href='index.php'>Click Here To Start Shopping</a>";
            

    }
    else{
        echo"sorry you are not registered";
        echo"<a href='register2.php'>Sign up here</a>";
    }
 
 };
 ?>

