<?php
	
	include 'DbConnect.php';

	function register($username, $password, $FirstName, $LastName, $Gender, $DoB, $Religion, $PresentAddress, $PermanentAddress, $Phone, $Email, $PersonalWebsite) {

		$conn = connect();
		$stmt = $conn->prepare("INSERT INTO USER (username, password, FirstName, LastName, Gender, DoB, Religion, PresentAddress, PermanentAddress, Phone, Email, PersonalWebsite) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ss", $username, $password, $FirstName, $LastName, $Gender, $DoB, $Religion, $PresentAddress, $PermanentAddress, $Phone, $Email, $PersonalWebsite);
		return $res = $stmt->execute();
		
	}	
?>