<?php
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "Emprendedor";

	if (isset($_POST['APP'])) {
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO MU VALUES (curtime())";

		$conn->query($sql);
		$conn->close();
    	header('Location: http://run.mockplus.com/uPEg8epKMRRLsNyy/index.html');
		exit;
	}
	if (isset($_POST['FB'])) {
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO FB VALUES (curtime())";

		$conn->query($sql);
		$conn->close();
    	header('Location: https://www.facebook.com/Seats-144218809649728/');
		exit;
	}
?>