<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Skickar rost2</title>
</head>

	<?php
		$variabel = $_GET['poang'];
		
		include ("phpsaurus.php");
	
		// $query = "INSERT INTO `ponangs`(`highscor`) VALUES ('" . $variabel . "')";
		
		$query = "UPDATE `unversus` SET Roster2 = Roster2 + 1 WHERE 1";
		
		// UPDATE test SET comebackvotes = 	comebackvotes + 1 WHERE comebackid = $wutu;";
		
		$response = @mysqli_query($dbc, $query);
		
		if ($response) {
			header('Location: html.html');
		} else {
			echo "Error";
		 }
	?>

<body>
</body>
</html>