<?php
session_start();
$con=mysqli_connect("localhost","root","","testing",3307);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if(isset($_POST['sign_up']))
   {
      $username = $_POST['username'];
      $email = $_POST['email'];
      
      $query = "SELECT * FROM sign_up WHERE Username='$username' OR Email='$email'";
      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) > 0) {
         echo "User already exists";
      } 
      else {
         $query1="INSERT INTO `sign_up`(`Username`,`Phone_No`, `Email`,`Password`)
         VALUES ('$_POST[username]','$_POST[phone_no]','$_POST[email]','$_POST[password]')";
         $result1 = mysqli_query($con, $query1);
  
         if($result1) {
            echo"<script>alert('Registration is done successfully')</script>";
            echo"<a href='index.php'>Click Here To Start Shopping</a>";
         }
         else {
            echo "Error: " . mysqli_error($con);
         }
      }
   }
   else {
      echo 'The sign_up button was not set.';
   }
}
else {
  echo "The request method was not POST.";
}


   

?>