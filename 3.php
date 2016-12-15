<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>constant</title>
</head>
<body>
	<?php 
		session_start();
		echo "Welcom to 3!";
		echo "I am ".$_SESSION["username"];
		unset($_SESSION['username']);
		echo "session 已注销，<a href='./4.php'>4</a>";
	 ?>
</body>
</html>