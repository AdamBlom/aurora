<?php
	require_once "functions.php";

?>


<h2>Group Information</h2>

<form action="add2.php" method="post">
<div id="media">
	<label for="media_type">Select Media:</label>
	<select id="media_type" name="media_type">
		<option value="0">Select...</option>
		<option value="video">Video</option>
		<option value="audio">Audio</option>
	</select>
</div>

<div id="video_info" style="display:none">Video</div>
<div id="audio_info" style="display:none">Audio</div>

<script>
	$("#media_type").on("change", function (e) {
		e.stopPropagation();
		switch($("#media_type").val()) {
			case "video":
				$("#audio_info").slideUp(250, function() {
					$("#video_info").slideDown(250);
				});
				break;
			case "audio":
				$("#video_info").slideUp(250, function() {
					$("#audio_info").slideDown(250);
				});
				break;
			default:
				$("#video_info, #audio_info").slideUp(250);
		}
	});


</script>