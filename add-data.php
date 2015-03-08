<?php
	require_once "functions.php";
			
	if($_REQUEST['asset'] == "group" && (isset($_REQUEST['media'])){
		if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")	{
			$id=$_REQUEST['id'];
		} else {
			$id="all"
		}

		get_groups($db,$type,$id);
		print($groups);
	}
	
?>