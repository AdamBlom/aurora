<?php
	require_once "functions.php";
			
	if($_REQUEST['asset'] == "group"){
		if(isset($_REQUEST['media']) && $_REQUEST['media'] != "")	{
			$media=$_REQUEST['media'];
		} else {
			$media="all";
		}

		if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")	{
			$id=$_REQUEST['id'];
		} else {
			$id="all";
		}

		$groups = get_groups($db,$media,$id);
		print($groups);
	}
	
?>