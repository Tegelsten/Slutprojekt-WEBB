
	<?php
	
		include('phpsaurus.php');
		
		if(isset($_GET['s']) && $_GET['s'] != ''){
		$s = $_GET['s'];
		$sql = "SELECT ID,FaktaNamn,FaktaLank,Roster FROM unfakta WHERE FaktaNamn LIKE '%$s%' ORDER BY Roster DESC";
		$result = mysqli_query($dbc,$sql);
		while($row = mysqli_fetch_array($result)){
			$url = $row['FaktaLank'];
			$title = $row['FaktaNamn'];
			echo "<div style='' id='searchtitle'>" . "<a style='font-family: verdana; text-decoration: none; color: black;' href='$url'>" . $title . "</a>" . "</div>";
			}
		}
	?>	
