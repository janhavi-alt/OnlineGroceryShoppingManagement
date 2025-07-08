<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Cart</title>
    <style>.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
h4 {
  color:  gray;
}

</style>
</head>
<body>
   <div class="container">
     <div class="row">
        <div class="col-lg-12 text-center border rounded bg-warning my-5">
            <h1>MY CART   <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>
         </h1>
        </div>

        <div class="col-lg-12">
           <table class="table">
            <thead class="table-dark">
             <tr class="table-danger">
              <th scope="col"><h4 style="color:black;">Serial No.</h4></th>
              <th scope="col"><h4 style="color:black;">Item Name</h4></th>
              <th scope="col"><h4 style="color:black;">Item Price</h4></th>
              <th scope="col"><h4 style="color:black;">Quantity</h4></th>
              <th scope="col"><h4 style="color:black;">Total</h4></th>
              <th scope="col"></th>
             </tr>
            </thead>
            <tbody class="table-secondary">
                <?php
                 if(isset($_SESSION['cart']))
                 {
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                        $sr=$key+1;
                        echo"
                        <tr>
                         <td><h5>$sr</h5></td>
                         <td> <h5>$value[Item_Name]</h5></td>
                         <td> <h5>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></h5></td>
                         <td>
                           <form action='manage_cart.php' method='POST'>
                             <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'> </td>
                             <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                             </form>
                             <td class='itotal'></td>
                         <td> 
                         <form action='manage_cart.php' method='POST'>
                         <button name='Remove_Item' class='btn btn-danger'>
                          Remove 
                         </button>
                         <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                         </form>
                         </td>
                        </tr>
                        ";
                    }
                 } 
                 
                 ?>

            </tbody>
          </table>
        </div>    
     <div class="col-lg-12">
        <div class="border bg-light rounded p-4 ">
        <h3 class="text-center"> Total Amount:₹</h3>
        <h3 class="text-center" id="gtotal"></h3>
        <br>
        <?php 
          if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
          {
        ?>
        
        <br>
        <form action="register.php" method="POST">
            <a href="register.php"><div style="text-align:center"><button type="submit" name="" class="btn btn-success btn-default">
              <b>Checkout </b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg></button> </div></a> <div style="text-align:center"><h5>   OR  </h5> </div>
          </form> 
        
        <a href="index.php"><div style="text-align:center"><button class="btn btn-success btn-default">
        <b>Add More Items</b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></button></div></a>
        <?php } 
        else 
        {
          echo ' 
        <!DOCTYPE html>
        <html>
        <img src="images/ecart.png" width="280" height="185" class="center"/>
        
        </html>';
         echo"<h3><center>You don't have any items in your cart</center></h3>";
         echo"<html><h4><center>Your favourite items are just a click away</center></h4></html>";
         echo'<a href="index.php"><div style="text-align:center"><button class="btn btn-success btn-default" style="vertical-align:middle">Start Shopping
         </button></div>
     </a>';
   
         

        }
        ?>
        
        
        
      </div>
        
     </div>
    </div>
   </div>

   <script>
          var gt=0;
          var iprice=document.getElementsByClassName('iprice');
          var iquantity=document.getElementsByClassName('iquantity');
          var itotal=document.getElementsByClassName('itotal');
          var gtotal=document.getElementById('gtotal');

          function subTotal()
          {
            gt=0;
            for(i=0;i<iprice.length;i++)
            {
              
               itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
               gt=gt+(iprice[i].value)*(iquantity[i].value);

            }
         gtotal.innerText=gt;
          }
          subTotal();

   </script>
</body>
</html>