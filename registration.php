<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="styles.css">
<body background="b1.jpg" >
	<div class="login" align="center">
		<div class="login-form">
			<h1>Registration Form</h1>

			<form name="form" action="actionpage.php" method="post">
				<input type="text" title="FirstName" placeholder="FirstName" name="firstname" oninvalid="setCustomValidity('Enter First Name')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="Surname" placeholder="Surname" name="surname" oninvalid="setCustomValidity('Enter Surname')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="IdNumber" placeholder="IdNumber" name="idnumber" oninvalid="setCustomValidity('Enter IdNumber')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="PhoneNumber" placeholder="PhoneNumber" name="phonenumber" oninvalid="setCustomValidity('Enter PhoneNumber')" oninput="setCustomValidity('')" required/><br>
				<input type="email" title="Email" placeholder="Email" name="email" oninvalid="setCustomValidity('Enter valid Email')" oninput="setCustomValidity('')" required/><br>
				<input type="text" title="City" placeholder="City" name="city" oninvalid="setCustomValidity('Enter city')" oninput="setCustomValidity('')" required/><br>
				<input type="Password" title="Password" placeholder="Password" name="password" oninvalid="setCustomValidity('Enter Password')" oninput="setCustomValidity('')"required/><br>
				<input type="Password" title="ConfrimPassword" placeholder="ConfrimPassword" name="password2" oninvalid="setCustomValidity('Verify Password')" oninput="setCustomValidity('')" required/><br>
				<button type="submit" value="Register" class="submitbutton">Register</button>
			</form>
			

		</div>
	</div>
</body>
</html>