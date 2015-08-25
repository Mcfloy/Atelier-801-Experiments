<?php
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=atelier801", "", "");
	}
	catch (Exception $e)
	{
		die('Error: ' . $e->getMessage());
	}
?>
