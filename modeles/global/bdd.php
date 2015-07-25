<?php
	try {
		$bdd = new PDO("mysql:host=localhost;dbname=atelier801", "root", "");
	} catch (Exception $e) {
		die('Error: ' . $e->getMessage());
	}
?>