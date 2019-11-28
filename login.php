<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles.css">
<body background="b1.jpg" >
  <div class="login" align="center">
    <div class="card px-5 login-form">
      <h1 class="mb-5">Login</h1>

      <form action="/action_page.php" method="post">
        <div class="container">
          <div>
          <input class="formInput" type="text" title="UserName" placeholder="Enter Username" name="Username" required/><br><br>
          </div>

          <div>
            <input class="formInput" type="text" title="Password" placeholder="Enter Password" name="Password" required/><br><br>
          </div>
          
          <div>
             <button type="submit" value="Login" class="btn-primary button_submit">Login</button><br>
          </div>
        <!--   <div class="remember_me">
            <input id="remember_me" name="remember_me" type="checkbox" />
            <label id="remember_me_text">Remember me</label> <br>
          </div> -->
          
          <br>
          

        </div>

            <div class="container">
              <div class="row">
                
                <div class="col-md-6">
              <span id="forget_text" >Forgot <a href="#">password?</a></span>

                </div>

                <div class="col-md-6">
                      <span id="register" > <a href="registration.php">Register</a></span>

                </div>

              </div>

            





            </div>

</form>
            </div>
            </div>


</body>
</html>