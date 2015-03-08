<?php
	require_once "functions.php";
?>

<h2>Sub-Group Information</h2>

<p>Coming Soon</p>

<div><label for="series_id">Group: </label></div>
	<div>
		<select id="group_id" name="ser_id">
			<option value="0">-- No Group --</option>
			<?php
				$query1 = "SELECT * FROM `lps_pla_group` WHERE `pla_grp_media_type` = 'video' AND `pla_grp_type` = 'episodic' ORDER BY `pla_grp_sort_title` ASC";
				$query2 = "SELECT * FROM `lps_pla_group` WHERE `pla_grp_media_type` = 'video' AND `pla_grp_type` = 'related' ORDER BY `pla_grp_sort_title` ASC";

				$result1 = $link->query($query1);
				$result2 = $link->query($query2);
				
				if(!is_null($result1)) {
					echo "<p>Episodic</p>"
					while($row1 = $result1->fetch_array()) { //Need to parental controls for content in query
						echo "<option value'".$row1['pla_grp_id'].">".$row1['pla_grp_title']."</option>";
					}
				}

				if(!is_null($result1)) {
					echo "<p>Related</p>"
					while($row2 = $result2->fetch_array()) { //Need to parental controls for content in query
						echo "<option value'".$row2['pla_grp_id'].">".$row2['pla_grp_title']."</option>";
					}
				}
			?>
		</select>
		<p><a href="add.php?asset=group">Add Group</a></p>
	</div>