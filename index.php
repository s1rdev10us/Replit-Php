<!DOCTYPE php>
<html lang="en">
	<head>
		<title>
			<?php
				$window = parse_url($_SERVER['HTTP_HOST']);
				consoleLog($window);
				$window=$window["path"];
				consoleLog($window);
				function endsWith($string, $endString)
				{
					$len = strlen($endString);
					if ($len == 0) {
						return true;
						}
					return (substr($string, -$len) === $endString);
				}
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