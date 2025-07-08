<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
        </head>
  <body>
    <div class="center">
      <h1>Sign up</h1>
      <form action="purchase.php" method="POST">
      <!--<form action="signup.php" method="POST">-->
        <div class="txt_field">
          <input type="text" name="full_name" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="number" name="phone_no" required>
          <span></span>
          <label>Phone number</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="text" name="address" required>
          <span></span>
          <label>Delivery address</label>
        </div>
        <h3>Payment Mode</h3>
        <br>
        <div class="form-check">
               <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2">
               <label class="form-check-label" for="flexRadioDefault2">
                Cash On Delivery
               </label>
            </div>
            <br>
        
            <div class="form-check">
               <input class="form-check-input" type="radio" name="pay_mode" value="UPI" id="flexRadioDefault2">
               <label class="form-check-label" for="flexRadioDefault2">
                UPI payment 
               </label>
               <h5>UPI ID- kharkarjanhavi@okicici</h5>
               <h5>Or</h5>
               <h5>Pay Phone Number 8828277267</h5>
            </div>
            <br>  
       
        <div class="pass"></div>
        <input type="submit" name="purchase" value="Continue">
        
        <div class="signup_link">
          Already a member? <a href="login.html">Login</a>
        </div>
      </form>
    </div>
    

 
          

