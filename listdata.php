<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>List</title>
</head>
<body>
	<?php
		require("config.inc.php");
		$conn = mysqli_concent($dbserver,$dbuser,$dbpass,$dbname);

		if(!$conn){
			die("Connection failed: " .mysql_connect_error());
		}

		mysqli_query($conn, "SET NAME utf8");
		$sql = "SELECT * From student";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$name = $row['name'];
				$email = $row['email']

				echo "<a href = 'viewrecord.php?id=$id'> $id $name $email</a> <hr>";
			}
		}else {
			echo "no data";
		}

		mysqli_close($conn);
		?>

		<a href= 'addrecord.html'> Add record </a>


</body>
</html>