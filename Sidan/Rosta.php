<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Skickar rost</title>
</head>
	
   <?php
   		$variabel = $_GET['Rost'];
		
		include ("phpsaurus.php");
	
		$query = "UPDATE `unversus` SET Roster1 = Roster1 + 1 WHERE ID = " . $variabel . "";
		
		$response = @mysqli_query($dbc, $query);
		
		if ($response) {
			header('Location: html.html');
		} else {
			echo "Error";
			echo $variabel;
		 }
   ?>
    
<body>
</body>
</html>