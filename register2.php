<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="center">
      <h1>Sign up</h1>
      <form action="signup.php" method="POST">
      <!--<form action="signup.php" method="POST">-->
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="number" name="phone_no" required>
          <span></span>
          <label>Phone number</label>
        </div>
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
       
        <!--<div class="txt_field">
          <input type="password" name="cpassword" required>
          <span></span>
          <label>COD</label>
        </div>-->
        <div class="pass"></div>
        <input type="submit" name="sign_up" value="Sign up">
        <!--<input type="submit" name="sign_up" value="Sign up">-->
        <div class="signup_link">
          Already a member? <a href="login2.html">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
