<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add record</title>
</head>
<body>
	<?php
		require("config.inc.php");
		$name = $_POST['name'];
		$email = $_POST['email'];
		$name = $_POST['addr'];

		if($email == "" or $name=="") {
			echo ("Please Enter name or email");
			exit();
		}

		$name = trim($name);
		$email = trim($email);
		echo"email: $email <br>";
		echo "name: $name <br>";

		//connect Data base
		$conn = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

		if(!$conn){
			die("Connection failed: " .mysql_connect_error());
		}

		mysqli_query($conn, "SET NAME utf8");
		$sql = "INSERT into student (name,email,address)
				values ('$name','$email','$addr')";

		if(mysqli_query($conn,$sql)){
			echo "New record created successfully";
			echo "<hr><a href = addrecord.html>Add more</a> | <a href=listdata.php> List Data</a>";
		}else {
			echo "Error: $sql <br>".mysqli_error($conn);
		}

		mysqli_close($conn);

		?>

</body>
</html>