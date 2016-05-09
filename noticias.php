<!DOCTYPE html>
<html>
<head>
	<title>Videoo</title>
</head>
<body>
	<?php

		$misVideos = scandir("uploads");
		if(count($misVideos) > 2){
			foreach ($misVideos as $key => $value) {
				$video = "uploads/" . $value;
				if(is_file($video)){
					echo <<<CODE
					<video width="400" height="300" autoplay src="{$video}" controls muted></video>
CODE;
				}
			}
		}
	?>
	
</body>
</html>