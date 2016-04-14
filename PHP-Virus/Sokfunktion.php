<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Namnlöst dokument</title>
</head>

	<?php
		
		// Sök efter FaktaNamn på i MySQL
		// $query = SELECT 'FaktaNamn','FaktaLank' FROM `unfakta` WHERE FaktaNamn LIKE '%Sökfunktion%';
		
		require_once('phpsaurus.php');
		
		
		
		$query = "SELECT `ID`, `FaktaNamn`, `FaktaLank`, `Roster` FROM `unfakta` ORDER BY Roster DESC;";

		$response = @mysqli_query($dbc, $query);
		
	?>

<body>
</body>
</html>