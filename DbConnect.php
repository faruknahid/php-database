<?php
	function connect() {
		$conn = new mysqli("localhost", "ofn", "123", "demo");
		if($conn->connect_errno) {
			die("Connection failed due to " . $conn->connect_error);
		}
		return $conn;
	}
?> 