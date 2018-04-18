<?php
session_start();
include 'connect.php';

$query = "select * from nova where Sec=".$_SESSION['sec'];
$result = mysqli_query ($dbc, $query) or die ("Connection Error". mysqli_error($dbc));

echo '<form id ="sherlock1">';
$n = mysqli_num_rows($result);
for ($i=0; $i<$n;$i++)
	{
		$res = mysqli_fetch_array($result);
		echo "<input type=radio id='option1' name='rad' value=".$res['Name'].">".$res['Name']."</input><br />";
	}
	echo '</form>';
 ?>
