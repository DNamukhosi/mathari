<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="styles.css">
<body background="b1.jpg" >
  <div class="login" align="center">
    <div class="login-form">
      <h1>Login Form</h1>

      <form action="/action_page.php" method="post">
        <div class="container">
          <div>
            <label for="uname"><b>Username</b></label>
          <input class="formInput" type="text" title="UserName" placeholder="Enter Username" name="Username" required/><br><br>
          </div>

          <div>
            <label for="psw"><b>Password</b></label>
            <input class="formInput" type="text" title="Password" placeholder="Enter Password" name="Password" required/><br><br>
          </div>
          
          <div>
             <button type="submit" value="Login" class="buttonLogin">Login</button><br>
          </div>
          <div class="remember_me">
            <input id="remember_me" name="remember_me" type="checkbox" />
            <label id="remember_me_text">Remember me</label> <br>
          </div>
          
          <br>
          

        </div>

            <div class="container">

              <button type="button" class="buttonCancel">Cancel</button>

              <span class="psw" id="forget_text" >Forgot <a href="#">password?</a></span>
            </div>

</form>

</body>
</html>