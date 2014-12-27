<?php
	session_start();

	$_SESSION['active']['user_id'] = 1;

	//Local credentials
	$link = new mysqli("localhost", "root", "", "lps_pla_dev");
?>