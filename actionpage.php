<!DOCTYPE html>
<html>
<body>
	<?php include 'database.php';?>
	<?php
	//create a variable
	$Firstname=$_POST['firstname'];
	$Surname=$_POST['surname'];
	$IdNumber=$_POST['idnumber'];
	$PhoneNumber=$_POST['phonenumber'];
	$Email=$_POST['email'];
	$City=$_POST['city'];
	$Password=$_POST['password'];
	$Password2=$_POST['password2'];
	$result = mysqli_query($conn, "select firstname from visitors_tbl where firstname='$Firstname'");
	//execute the querry
	if ($Password != $Password2){
		echo "<script language='javascript'>
		alert('password does not match')
		location.href='registration.php';
		echo </script>";
		exit();
	} 
	else{
		$query = "INSERT INTO visitors_tbl (firstname, surname, idnumber, phonenumber, email, city, password) VALUES('$Firstname', '$Surname', '$IdNumber', '$PhoneNumber', '$Email', '$City', '$Password')";
		if (mysqli_query($conn, $query)){
			echo "<script language='javascript'>
				alert('Member details added')
				location.href='registration.php';
				echo </script>";
		} else{
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
	}
	?>
</body>
</html>
