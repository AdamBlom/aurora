<?php
	require_once "functions.php";
	$user_id = 1;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Add Tracks</title>
	</head>
	<body>
		<form action="add2.php" method="post">
			<div><label for="series_id">Series: </label></div>
			<div>
				<select id="series_id" name="ser_id">
					<option value="0">Add New...</option>
					<?php
						$query = "SELECT * FROM `lps_pla_vid_series` WHERE `pla_vid_ser_type` = 'epis' ORDER BY `pla_vid_ser_sort_title` ASC";

						$result = $link->query($query);
						if(!is_null($result)) {
							while($row = $result->fetch_array()) {
								echo "<option value'".$row['pla_vid_ser_id'].">".$row['pla_vid_ser_title']."</option>";
							}
						}
					?>
				</select>
			</div>
			<br/>
			<div>SERIES INFO (for new):</div>
			<div><label for="series_name">Series Name: </label><input type="text" id="series_name" name="ser_name" /></div>

			<div>Series Type:</div>
			<div><input type="radio" id="series_type_1" value="sing" name="ser_type" /><label for="series_type_1">Single</label></div>
			<div><input type="radio" id="series_type_2" value="epis" name="ser_type" /><label for="series_type_2">Episodic/Series</label></div>

			<div>Series Medium:</div>
			<div><input type="radio" id="series_med_1" value="mov" name="ser_med" /><label for="series_med_1">Movie/Feature</label></div>
			<div><input type="radio" id="series_med_2" value="tv" name="ser_med" /><label for="series_med_2">Television</label></div>

			<div><label for="series_genre">Series Genre: </label></div>
			<div>
				<select id="series_genre" name="ser_genre">
					<option value="0">Add New...</option>
					<?php
						$query2 = "SELECT DISTINCT FROM `lps_pla_vid_meta` WHERE `pla_vid_meta_type` = 'series' ORDER BY `pla_vid_meta_genre` ASC";

						$result2 = $link->query($query2);
						if(!is_null($result2)) {
							while($row2 = $result2->fetch_array()) {
								echo "<option value'".$row2['pla_vid_meta_genre'].">".$row2['pla_vid_meta_genre']."</option>";
							}
						}
					?>
				</select>
			</div>
			<br />
			<div>TRACK INFO:</div>
			<div><label for="track_name">Track Name: </label><input type="text" id="track_name" name="trk_name" /></div>


			<input type="submit" value="Add" />
			<input type="reset" value="Clear" />

		</form>

	</body>
</html>

