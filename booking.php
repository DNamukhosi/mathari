<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<body background="b1.jpg" >
  <div class="register" align="center">
    <div class="card px-5 login-form">
      <h1 class="mb-5">Booking Page</h1>
      <div class="container">
       <form action="/action_page.php" method="post">
        <div class="container">
          <div>
          <input class="formInput" type="text" title="FullName" placeholder="Enter FullName" name="FullName" required/><br><br>
          </div>

          <div>
          <input class="formInput" type="text" title="IdNumber" placeholder="Enter Your IdNumber" name="IdNumber" required/><br><br>
          </div>

          <div>
          <input class="formInput" type="text" title="Relationship" placeholder="Relationship with patient" name="Relationship" required/><br><br>
          </div>

          <div>
          <input class="formInput" type="text" title="Area" placeholder="Enter Your Area" name="Area" required/><br><br>
          </div>

          <div>
          <input class="formInput" type="text" title="PatientsName" placeholder="Enter Patients Name" name="PatientsName" required/><br><br>
          </div>

          <div>
          <input class="formInput" type="text" title="IdNumber" placeholder="Enter Patients IdNumber" name="IdNumber" required/><br><br>
          </div>


          <div>
          <input class="formInputDesc" type="text" title="Description" placeholder="Description" name="Description" required/><br><br>
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
      
      </div>

      

    </div>
  </div>
</body>
</html>