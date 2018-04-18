<?php
include 'connect.php';
$vf = $_GET['thejus'];



$query = "update nova set VoteCount = VoteCount + 1 where Name='$vf'";

$result = mysqli_query ($dbc, $query) or die ("Error updating");
 ?>
