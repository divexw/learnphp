<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nosession</title>
</head>
<body>
	<?php 
		session_start();
		echo "报错".$_SESSION['username'];
	 ?>
</body>
</html>