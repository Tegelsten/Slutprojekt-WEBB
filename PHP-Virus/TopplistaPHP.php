<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP</title>
<link href='/sidan/css.css' rel='stylesheet' />
</head>
    
	<?php 
		
		require_once('phpsaurus.php');
		
		$query = "SELECT `ID`, `FaktaNamn`, `FaktaLank`, `Roster` FROM `unfakta` ORDER BY Roster DESC LIMIT 10;";

		$response = @mysqli_query($dbc, $query);
	
		if($response){
	
			echo '<table border="1" id="nagonting2">
		
			<tr>
			
			<td align="left" id="nagonting"><h1>Fakta</h1></td>
			<td align="left" id="nagonting"><h1>Roster</h1></td>
			</tr>';
		
			while($row = mysqli_fetch_array($response)){
		
				echo '<tr><td align="center" id="dragonting"><a href="' . 
				$row['FaktaLank'] . '">' . $row['FaktaNamn'] . '</a></td><td align="center" id="dragonting2">' . $row['Roster'];
				
				echo '</tr>';
		
			}
		
				echo '</table>';
	
		} else {
	
			echo "Couldn't find database query<br />";
		
			echo mysqli_error($dbc);
	
		}
	
		mysqli_close($dbc);
		
	?>
    
</body>
</html>