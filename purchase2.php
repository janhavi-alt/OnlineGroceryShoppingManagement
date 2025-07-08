<?php
session_start();
$con=mysqli_connect("localhost","root","","testing",3307);
if(mysqli_connect_error())
{
   echo "<script> 
           alert('cannot connect to database');
                window.location.href='mycart.php';
         </script>";
                
   exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if(isset($_POST['purchase']))
   {
      $username = mysqli_real_escape_string($con, $_POST['username']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      
      $select = "SELECT * FROM sign_up WHERE username = '$username' && password = '$password' ";
      $result = mysqli_query($con, $select);
      $num = mysqli_num_rows($result);
      
      if($num == 1) { // if authentication is successful
         $query1="INSERT INTO `order_manager`(`Full_Name`, `Username`, `Phone_No`, `Password`,`Address`,`Pay_Mode`)
         VALUES ('$_POST[full_name]','$_POST[username]','$_POST[phone_no]','$_POST[password]','$_POST[address]','$_POST[pay_mode]')";
         //echo $query1;
         if(mysqli_query($con,$query1))
         {
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
               mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
               foreach($_SESSION['cart'] as $key => $values)
               {
                  $Item_Name=$values['Item_Name'];
                  $Price=$values['Price'];
                  $Quantity=$values['Quantity'];
                  mysqli_stmt_execute($stmt);
               }
               unset($_SESSION['cart']);
               echo "<script> 
                     alert('You are logged in');
                   </script>";
               echo "<script> 
                     alert('Order Placed');
                     window.location.href='index.php';
                   </script>";
            }
            else
            {
               echo "<script> 
                      alert('SQL query prepare error');
                      window.location.href='mycart.php';
                    </script>";
            }
         }
         else {
            echo "Error: " . mysqli_error($con);
         }
      } else { // if authentication fails
         echo "<script> 
                alert('Invalid username or password');
                window.location.href='mycart.php';
               </script>";
      }
   }
   else {
      echo "The purchase button was not set.";
   }
}
else {
   echo "The request method was not POST.";
}
?>
