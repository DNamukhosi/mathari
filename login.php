<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="styles.css">
<body background="b1.jpg" >
  <div class="login" align="center">
    <div class="login-form">
      <h1>Login Form</h1>

      <form action="/action_page.php" method="post">
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" title="UserName" placeholder="Enter Username" name="Username" required/><br><br>

            <label for="psw"><b>Password</b></label>
            <input type="text" title="Password" placeholder="Enter Password" name="Password" required/><br><br>

            <button type="submit" value="Login" class="submitbutton">Login</button><br>
            
             <label><input id="remember me" name="remember me" value="remember" type="checkbox" /> &nbsp;Remember me</label>
            
            </div>

            <div class="container">

              <button type="button" class="cancelbtn">Cancel</button>

              <span class="psw">Forgot <a href="#">password?</a></span>
</div>

</form>

</body>
</html>