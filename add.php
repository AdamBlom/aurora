<?php
	require_once "functions.php";
	if(isset($_GET['asset'])) {
		switch($_GET['asset']) {
			case "track":
			case "subgroup":
			case "group":
				include "add-data.php";
				break;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Add Media</title>
	</head>
	<body>
		<div id="wrapper">
			<main>
			<?php 
				if(isset($_GET['asset'])) {
					switch($_GET['asset']) {
						case "track":
							include "add-track.php";
							break;
						case "subgroup":
							include "add-subgrp.php";
							break;
						case "group":
							include "add-group.php";
							break;
						default:
							include "add-request.php";
							break;
					}
				} else {
					include "add-request.php";
				}
			?>
			</main>
		</div><!-- closed wrapper -->
	</body>
</html>

