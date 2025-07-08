<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con=mysqli_connect("localhost","root","","testing",3307);
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $select = " SELECT * FROM admin_login WHERE username = '$username' && password = '$password' ";
    $result = mysqli_query($con, $select);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        echo"<script>alert('Welcome $username ')</script> "."<br>"."<a href='admin_data.php'>Visit Admin Panel</a>"."<br>"."OR
        "."<br>"."<a href='admin_login.php'>Logout</a>";
    
    }
    else{
        echo"<script>alert('Sorry you cannot access the Admin page')</script>"."<br>"."<a href='admin_login.php'>Go back</a>";
    }
 
 };
 ?>