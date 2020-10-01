<?php
	$connection = mysqli_connect('localhost','root','','tutorials');
	if(!$connection){
	  echo "Error:".mysqli_connect_error();
	}
	$sql = "SELECT * FROM students";
	$result = mysqli_query($connection, $sql);
	foreach ($result as $key => $value) {
		echo $value['name']." ";
		echo $value['roll']."<br>";
	}

?>