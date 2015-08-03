<?php
	session_start();
	if (isset($_SESSION['member'])) {
		$_SESSION['member'] = "";
		session_destroy();
	}
?>