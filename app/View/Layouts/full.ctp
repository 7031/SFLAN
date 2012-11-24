<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title_for_layout; ?> - SFLAN</title>
		<style type="text/css">
			html {
				margin: 0;
				padding: 0;
				height: 100%;
				width: 100%;
			}
			body {
				background-color: #000;
				color: #fff;
				font-family: sans-serif;
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				overflow: hidden;
			}
			#player {
				height: 100%;
				width: 100%;
				margin: 0;
				padding: 0;
			}
		</style>
	</head>
	<body>
		<?php echo $content_for_layout; ?>
	</body>
</html>