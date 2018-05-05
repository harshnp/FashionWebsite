<?php
	$error="";
	$host="localhost";
	$user="root";
	$password="";
	$database="userinfo";
	$conn=mysqli_connect($host,$user,$password,$database);
	if(isset($_POST['submit'])){
		
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	
		//connecting to database server
		if(mysqli_connect_error()){
			$error="cannot connect to database";
		}
		else{
			//$error="connected to database";
			$query=" insert into customer (firstname,lastname,email,password) values('$firstname','$lastname','$email','$password');";
			$result=mysqli_query($conn,$query);
			if(mysqli_error($conn)){
				$error="insert error".mysqli_error($conn);
			}
			$error="values inserted";
			
		}
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Review</title>
	</head>
	<body>
		<?php
			echo $error;
		?>
		<table>
			<tr>
				<th>ID</th>
				<th>firstname</th>
				<th>lastnameame</th>
				<th>email</th>
				<th>password</th>
			</tr>
			<?php
				$query="select * from customer;";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr> 
						<td>".$row['ID']."</td>".
						"<td>".$row['firstname']."</td>".
						"<td>".$row['lastname']."</td>".
						"<td>".$row['email']."</td>".
						"<td>".$row['password']."</td></tr>";
					
				}
				echo "<table>"
			?>
		</table>
	</body>
</html>