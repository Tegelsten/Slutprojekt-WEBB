<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Skickar rost2</title>
</head>

	<?php
		$variabel = $_GET['Rost'];
		
		include ("phpsaurus.php");
	
		// $query = "INSERT INTO `ponangs`(`highscor`) VALUES ('" . $variabel . "')";
		
		$query = "UPDATE `unversus` SET Roster2 = Roster2 + 1 WHERE ID = " . $variabel . "";
		
		// UPDATE test SET comebackvotes = 	comebackvotes + 1 WHERE comebackid = $wutu;";
		
		$response = @mysqli_query($dbc, $query);
		
		if ($response) {
			header('Location: ' . $_SERVER["HTTP_REFERER"] );
		exit;
		} else {
			echo "Error";
		 }
	?>

<body>
</body>
</html>