<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>session</title>
</head>
<body>
	<?php 
		session_start();
		$user=$_POST['user'];
		if(!isset($_SESSION["username"])) {
			$_SESSION["username"] = $user;
		} 
		
		echo "Welcom to <a href='./3.php'>back</a>";
		
	 ?>
</body>
</html>