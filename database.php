<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Database</title>
	</head>
	<body>
		<div id="header">
			<div id="navbar">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="database.php">Database Table</a></li>
					<li><a href="datainfo.php">Data Info</a></li>
					<li><a href="aboutus.php">About Us</a></li>
				</ul>
			</div>
		</div>
		

		<div class="center"> 

			<?php // Create connection | mysqli_connect(host,username,password,dbname, port);


			// Check connection
			if (mysqli_connect_errno()) {
				echo '<span style="color:#FFF;text-align:center;">Failed to connect to MySQL:</span>';
			} else {
				echo '<span style="color:#FFF;text-align:center;">Showing Data from the Database:</span>';
			}
			$result = mysqli_query($con,"SELECT * FROM wsn.data");

			echo "<table border='1'>
			<tr>
			<th>Data_id</th>
			<th>Sensor_id</th>
			<th>Location_id</th>
			<th>Timestamp</th>
			<th>Type</th>
			<th>Value</th>
			</tr>";

			while($row = mysqli_fetch_array($result)) {
			  echo "<tr>";
			  echo "<td>" . $row['datum_id'] . "</td>";
			  echo "<td>" . $row['sensor_id'] . "</td>";
			  echo "<td>" . $row['location_id'] . "</td>";
			  echo "<td>" . $row['timestamp'] . "</td>";
			  echo "<td>" . $row['type'] . "</td>";
			  echo "<td>" . $row['value'] . "</td>";
			  echo "</tr>";
			}

			echo "</table>";

			mysqli_close($con);


			?>

		</div>
		<div id="footer">
			<p>Sense Group | <a class="email" href="mailto:wsn.group@u.washington.edu">wsn.group@u.washington.edu</a></p>
		</div>
	</body>
</html>
