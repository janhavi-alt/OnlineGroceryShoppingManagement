<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form action="admin_panel.php" method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Admin Name</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="submit" value="Login">
       <br>
      </form>
       
    </div>

  </body>
</html>
