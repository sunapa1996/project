<?php

	//session_start();
	$db = new mysqli($dbserver,$dbuser,$dbpass,$dbname);
	$stmt = $db->query('SELECT * from members');
	$user = $_POST['user'];
	//echo $user;
	$pass = $_POST['pw'];
	echo '<table>';
	while($rows = $stmt->fetch()){
		echo "<tr><td>". $rows['userID'] . "</td><td>" . $rows['email'] . "</td></tr>";

};
echo'</table>'
?>
	//echo '<br>'.$pass;
	//$str = "SELECT * FROM members WHERE username ='sunapa'";
	//$objQuery = mysqli_query($conn,$str);
	//$row = mysqli_num_rows($objQuery);
	//echo $row;
	//$pass_data = $row['password'];
	//if(verify($pass,$pass_data)){
	//	$result = mysqli_fetch_assoc($objQuery);
		
	//}else{
	//	echo '<h1>Cannot find username</h1>';
	//}
	

	// $strSQL = "SELECT * FROM members WHERE Username = '".mysql_real_escape_string($_POST['user'])."' 
	// and Password = '".mysql_real_escape_string($_POST['pw'])."'";
	// $objQuery = mysqli_query($strSQL);
	// echo $objQuery;
	// if(!$objResult)
	// {
	// 		echo "Username and Password Incorrect!";
	// }
	// else
	// {
	// 		$_SESSION["UserID"] = $objResult["UserID"];
	// 		$_SESSION["Status"] = $objResult["Status"];

	// 		session_write_close();
			
	// 		if($objResult["Status"] == "ADMIN")
	// 		{
	// 			header("location:admin_page.php");
	// 		}
	// 		else
	// 		{
	// 			header("location:user_page.php");
	// 		}
	// }
?>