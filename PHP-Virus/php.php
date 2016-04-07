<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Namnlöst dokument</title>
</head>
    	
	<?php 
		
		require_once('phpsaurus.php');
		
		$query = "SELECT ID, FaktaNamn, FaktaLank, Roster FROM unFakta";
	
		$result = mysqli_query($dbc, $query);
		
		if (mysqli_num_rows($result) > 0) {
		// Skriver ut datan från varje rad
		while($row = mysqli_fetch_assoc($result)) {
				echo "ID: " . $row["ID"]. " - Faktanamn: " . $row["FaktaNamn"]. " - Faktalänk: " . $row["FaktaLank"]. " - Röster: " . $row["Roster"]. "<br>";
			}
		} else {
			echo "0 results";
		}

	?>

<body>
</body>
</html>