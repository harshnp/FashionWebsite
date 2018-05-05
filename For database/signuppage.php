


<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
	</head>
	<body style="background-color:pink">
		
		<h1>Sign Up Quickly</h1>
		<form action="insert.php" method="POST">
			<label>
				firstname:
			</label>
			<input type="text" required name="firstname">
			<br><br>
			<label>
				lastname:
			</label>
			<input type="text" required name="lastname">
			<br><br>
			<label>
				email:
			</label>
			<input type="email" required name="email">
			<br><br>
			<label>
				password:
			</label>
			<input type="password" name="password" ><br>
			<br>
			<button name="submit" type="submit">Submit</button>
		</form>
	</body>
</html>