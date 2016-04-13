<html>
<body>
<head>
<meta charset="utf-8">
</head>
<?php

	$query = "SELECT test.comeback,comebackvotes,comebackid FROM test ORDER BY comebackvotes DESC;";

	$response = @mysqli_query($dbc, $query);

	if($response){

	echo '<table border="1" align="left" cellspacing="2" cellpadding="7" width="790">

	<tr>
	<td align="left"><h3>Comeback</h3></td>
	<td align="left" id="nagonting"><h3>Comebackvotes</h3></td>
	</tr>';

	while($row = mysqli_fetch_array($response)){

	echo '<tr><td class="comebackbord" align="left">' .

	$row['comeback'] . '</td><td align="center">' . 
	$row['comebackvotes'] . '<form action="gilla.php" method="POST">
	<button type="submit" id="Tabell" value="'.(int)$row['comebackid'].'" name="gilla">Gilla</button>
	</form>' . 
	'</td><td align="left">';

	;

	echo '</tr>';

	}

	echo '</table>';

	} else {

	echo "Couldn't issue database query<br />";

	echo mysqli_error($dbc);

	}

	mysqli_close($dbc);

		?>
</body>
</html>