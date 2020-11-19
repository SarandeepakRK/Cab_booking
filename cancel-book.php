<?php
	require('connect.php');
		
	$bid=$_GET['bid'];
	$query = "DELETE FROM booking WHERE bid = $bid";

	if($connection->query($query)===TRUE) {
	echo "<script type='text/javascript'>alert('Booking Canceled Successfully!')</script>";
	echo "<script type='text/javascript'>window.location.href = 'history.php'</script>";
	}	
	else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
?>