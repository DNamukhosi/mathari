<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<body background="b1.jpg" >
	<div class="register" align="center">
		<div class="card px-5 login-form">
			<h1 class="mb-5">Sign Up</h1>
			<div class="container">
				<form name="form" action="actionpage.php" method="post">
				<input type="text" title="FirstName" class="formInput" placeholder="FirstName" name="firstname" oninvalid="setCustomValidity('Enter First Name')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="Surname" class="formInput" placeholder="Surname" name="surname" oninvalid="setCustomValidity('Enter Surname')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="IdNumber" class="formInput" placeholder="IdNumber" name="idnumber" oninvalid="setCustomValidity('Enter IdNumber')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="PhoneNumber" class="formInput" placeholder="PhoneNumber" name="phonenumber" oninvalid="setCustomValidity('Enter PhoneNumber')" oninput="setCustomValidity('')" required/><br>
				<input type="email" title="Email" class="formInput" placeholder="Email" name="email" oninvalid="setCustomValidity('Enter valid Email')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="City" class="formInput" placeholder="City" name="city" oninvalid="setCustomValidity('Enter city')" oninput="setCustomValidity('')" required/><br>
				<input type="Password" title="Password" class="formInput" placeholder="Password" name="password" oninvalid="setCustomValidity('Enter Password')" oninput="setCustomValidity('')"required/><br>
				<input type="Password" title="ConfrimPassword" class="formInput" placeholder="ConfrimPassword" name="password2" oninvalid="setCustomValidity('Verify Password')" oninput="setCustomValidity('')" required/><br>
				<button type="submit" value="Register" class="btn-primary button_submit">Register</button>
				<br>

                <span id="to_login" > <a href="login.php">Already Have an account ? </a></span>

			</form>
			
			</div>

			

		</div>
	</div>
</body>
</html>
