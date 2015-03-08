<?php
	session_start();

	$_SESSION['active']['user_id'] = 1;

	$user_id = $_SESSION['active']['user_id'];

	//Local credentials
	$db = new mysqli("localhost", "root", "", "lps_pla_dev");





	/* Groups */

	function get_groups($db,$id) {
		if($id="all") {
			$query = "SELECT * FROM `lps_pla_group` WHERE `pla_grp_media_type` = 'video' AND (`pla_grp_type` = 'episodic' OR `pla_grp_type` = 'related') ORDER BY `pla_grp_sort_title` ASC";
		} else {
			$query = "SELECT * FROM `lps_pla_group` WHERE `pla_grp_id` = '$id'";
		}
		$groups = array(
			'episodic' => array(),
			'related' => array()
		);
		
		$result = $db->query($query);
		if(!empty($result)) {
			while($r = $result->fetch_array()) { //Need to parental controls for content in query
				$type = $r['pla_grp_type'];
				array_push($groups[$type],$r);
			}
		}
		return $groups;
	}

	function get_subgroups($db) {
		$query = "SELECT * FROM `lps_pla_subgroup` WHERE `pla_subgrp_media_type` = 'video' ORDER BY `pla_subgrp_sort_title` ASC";
		$subgroups = array();
		
		$result = $db->query($query);
		if(!empty($result)) {
			while($r = $result->fetch_array()) { //Need to parental controls for content in query
				$type = $r['pla_grp_type'];
				array_push($subgroups,$r);
			}
		}
		return $subgroups;
	}
?>