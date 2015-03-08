<?php
	require_once "functions.php";
	require_once "add-data.php";

	print_r($groups);
?>


<h2>Sub-Group Information</h2>

<div>
	<label for="group_id">Select Group:</label>
	<select id="group_id" name="grp_id">
		<option value="0">-- No Group --</option>
		<?php
			if(count($groups["episodic"]) > 0) {
				echo "<p>Episodic</p>";
				foreach($groups["episodic"] as $group) {
					echo "<option value'".$group['pla_grp_id'].">".$group['pla_grp_title']."</option>";
				}
			}

			if(count($groups['related']) > 0) {
				echo "<p>Related</p>";
				foreach($groups['related'] as $group) {
					echo "<option value'".$group['pla_grp_id'].">".$group['pla_grp_title']."</option>";
				}
			}
		?>
	</select>
	<a href="add.php?asset=group">Add Group</a>
</div>