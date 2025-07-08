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
      // Insert data into order_manager table
      $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Password`,`Address`,`Pay_Mode`)
      VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[password]','$_POST[address]','$_POST[pay_mode]')";

      if(mysqli_query($con,$query1))
      {
         $Order_Id=mysqli_insert_id($con);

         // Insert data into sign_up table
         $query2="INSERT INTO `sign_up`(`Username`, `Password`)
         VALUES ('$_POST[full_name]','$_POST[password]')";
         mysqli_query($con,$query2);

         $query3="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
         $stmt=mysqli_prepare($con,$query3);
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
           alert('Registration is successfully done');
                
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
   }
      else {
      echo "The purchase button was not set.";
    }
 }
      else {
   echo "The request method was not POST.";
 }

?>