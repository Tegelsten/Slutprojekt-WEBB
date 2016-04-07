<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Namnlöst dokument</title>
</head>
    	
	<?php 
		
		require_once('phpsaurus.php');
		
		$query = "SELECT ID, Liga FROM uuuu";
	
		$result = mysqli_query($dbc, $query);
		
		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
				echo "ID: " . $row["ID"]. " - Liga: " . $row["Liga"]. "<br>";
			}
		} else {
			echo "0 results";
		}

	?>

<body>
</body>
</html>