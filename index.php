<!DOCTYPE php>
<html lang="en">
	<head>
		<?php 
			require $_SERVER['DOCUMENT_ROOT'].'php-scripts/include.php';
		?>
		<title>
			<?php
				$window = parse_url($_SERVER['HTTP_HOST']);
				$window=$window["path"];
				if(endsWith($window,'repl.co')) {
					$window='source-replit';
				}
				$jsonString = file_get_contents($jsonFile);
				$data = json_decode($jsonString, true);
				$data = $data[window]+1;
				echo "This site has had {$data} visitors";

			?>
		</title>
		<style>
	  
			:root {
				color:aqua;
		
				background-color:#420;
			}
		</style>
	</head>
	<body>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/php-scripts/visitorCounter/visitorCounter.php';?>
		
		<?php echo '<p>Hello World</p>'; ?> 

  </body>
</html>