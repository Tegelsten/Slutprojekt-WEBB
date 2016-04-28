<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP</title>
<link href='/sidan/css.css' rel='stylesheet' />
</head>
    
	<?php 
		
		require_once('phpsaurus.php');
		
		$query = "SELECT `ID`, `FaktaNamn`, `FaktaLank`, `Roster` FROM `unfakta` ORDER BY Roster DESC;";

		$response = @mysqli_query($dbc, $query);
	
		if($response){
	
			echo '<table border="1" align="left" cellspacing="2" cellpadding="7" width="400">
		
			<tr>
			<td align="left"><h3>Fakta ID</h3></td>
			<td align="left" id="nagonting"><h3>Fakta</h3></td>
			<td align="left" id="nagonting"><h3>Roster</h3></td>
			</tr>';
		
			while($row = mysqli_fetch_array($response)){
		
				echo '<tr><td class="FaktaID" align="left">' .
			
				$row['ID'] . '</td><td align="center"><a href="' . 
				$row['FaktaLank'] . '">' . $row['FaktaNamn'] . '</a></td><td align="center">' . $row['Roster'];
				
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