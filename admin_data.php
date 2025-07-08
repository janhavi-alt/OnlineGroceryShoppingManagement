<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="text-center">ADMIN PANEL</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
            <table class="table text-center table-dark">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Pay mode</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <tbody>
    <?php 
       $con=mysqli_connect("localhost","root","","testing",3307);
       session_start();
       $query="SELECT * FROM `order_manager`";
       $user_result=mysqli_query($con,$query);
       while($user_fetch=mysqli_fetch_assoc($user_result))
       {
        echo" <tr>
        <td>$user_fetch[Order_Id]</td>
        <td>$user_fetch[Full_Name]</td>
        <td>$user_fetch[Phone_No]</td>
        <td>$user_fetch[Address]</td>
        <td>$user_fetch[Username]</td>
        <td>$user_fetch[Password]</td>
        <td>$user_fetch[Pay_Mode]</td>
        <td>
        <table class'table text-center table-dark'>
        <thead>
          <tr>
            <th scope'col'>Item Name</th>
            <th scope'col'>Price</th>
            <th scope'col'>Quantity</th>
            </tr>
        </thead>
        <tbody>
      ";
      $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
      $order_result=mysqli_query($con,$order_query);
      while($order_fetch=mysqli_fetch_assoc($order_result))
      {
        echo"
        <tr>
        <td>$order_fetch[Item_Name]</td>
        <td>$order_fetch[Price]</td>
        <td>$order_fetch[Quantity]</td>
        </tr>
        ";
      }
        echo"
        </tbody>
        </table>
        </td>
      </tr>
      ";
       }
    
    ?>
    
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>