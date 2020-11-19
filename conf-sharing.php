<?php
	require_once 'connect.php';
	if( isset($_POST['submit']) ) {

	$date = date("d-m-Y");
	$query = "INSERT INTO share (bid,uid,status,date) VALUES ('$_POST[bid]','$_POST[uid]','$_POST[status]','$date')";

	if($connection->query($query)===TRUE) {
	echo "<script type='text/javascript'>alert('Your Sharing Confirmed Successfully!')</script>";
	echo "<script type='text/javascript'>window.location.href = 'home.php'</script>";
	}	
	else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
}


?>