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
			
			<td align="left" id="nagonting"><h3>Fakta</h3></td>
			<td align="left" id="nagonting"><h3>Antal röster</h3></td>
			</tr>';
		
			while($row = mysqli_fetch_array($response)){
		
				echo '<tr id="hej"><td align="center" id="hej" ><a style=" color: rgb(228, 192, 0); "href="' . 
				$row['FaktaLank'] . '">' . $row['FaktaNamn'] . '</a></td><td align="center" >' . $row['Roster'];
				
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