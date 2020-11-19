<?php
	require_once 'connect.php';
	if( isset($_POST['submit']) ) {

	$date = date("d-m-Y");
	$query = "INSERT INTO booking (uid,dplace,pplace,pdate,ptime,ctype,btype,pass,distance,time,fare,pay,bdate) VALUES ('$_POST[uid]','$_POST[dplace]','$_POST[pplace]','$_POST[pdate]','$_POST[ptime]','$_POST[ctype]','$_POST[btype]','1','$_POST[distance]','$_POST[time]','$_POST[fare]','$_POST[payment]','$date')";

	if($connection->query($query)===TRUE) {
	echo "<script type='text/javascript'>alert('Your Booking Confirmed Successfully!')</script>";
	echo "<script type='text/javascript'>window.location.href = 'home.php'</script>";
	}	
	else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
}


?>