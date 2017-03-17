//fightcalculate update in database here.
<?php
include "connectdb.php";

$data=json_decode(file_get_contents("php://input"));

		$id=$dbhandle->real_escape_string($data->id);
		$health=$dbhandle->real_escape_string($data->health);
       	$query="UPDATE student SET health = '".$health."' WHERE studid=$id ";
       	$dbhandle->query($query);
?>
