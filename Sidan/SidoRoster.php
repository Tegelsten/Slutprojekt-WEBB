<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ment</title>
</head>
	
    <?php
		
		include ("phpsaurus.php");
	
		$query = "SELECT `Sida1`, `Roster1`, `Sida2`, `Roster2`,'ID' FROM unversus LIMIT 1";

		$response = @mysqli_query($dbc, $query);
		
		if($response){
			
			while($row = mysqli_fetch_array($response)){
		
				$Sida1 = $row['Sida1'];
				
				$Roster1 = $row['Roster1'];
				
				$Sida2 = $row['Sida2'];
				
				$Roster2 = $row['Roster2'];
				
				$IDs = $row['ID'];
			
			}
			
		} else {
	
				echo "Nope";
				echo mysqli_error($dbc);

		}
		
	?>
    
<body>
</body>
</html>