<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP</title>
<link href='/sidan/css.css' rel='stylesheet' />
</head>
    
	<?php 
		
		require_once('phpsaurus.php');
		
		$query = "SELECT `ID`, `FaktaNamn`, `FaktaLank`, Roster1,Roster2 FROM `unversus` ORDER BY Roster1+Roster2 DESC LIMIT 10;";

		$response = @mysqli_query($dbc, $query);
	
		if($response){
	
			echo '<table border="1" id="nagonting2">
		
			<tr>
			
			<td align="left" id="nagonting"><h3>Fakta</h3></td>
			<td align="left" id="nagonting"><h3>Antal röster</h3></td>
			</tr>';
		
			while($row = mysqli_fetch_array($response)){
		
			$antalRoster = $row['Roster1'] + $row['Roster2'];
		
				echo '<tr id="hej"><td align="center" id="hej" ><a style=" color: rgb(228, 192, 0); "href="' . 
				$row['FaktaLank'] . '">' . $row['FaktaNamn'] . '</a></td><td align="center" >' . $antalRoster;
				
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