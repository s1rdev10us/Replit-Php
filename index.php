<!DOCTYPE php>
<html lang="en">
	<head>
		<title>PHP Test</title>
		<style>
	  
			:root {
				color:aqua;
		
				background-color:#420;
			}
		</style>
	</head>
	<body>
		<?php 
			/*
			$data = file_get_contents ("visits.json")+1;
			file_put_contents ('visits.json',$data);
			echo '<h1>This site has been visited ';
			echo $data;
			echo ' times</h1>'
			*/
			$consoleCounter=0;
			function consoleLog($data = '') {
				GLOBAL $consoleCounter;
				$consoleCounter=$consoleCounter+1;
				echo "<script id='";
				echo $consoleCounter;
				echo "'>document.getElementById('";
				echo $consoleCounter;
				echo "').remove();console.log('";
				echo $data;
				echo "')</script>";
			}
			$window = parse_url($_SERVER['HTTP_HOST']);
			consoleLog($window);
			$window=$window["path"];
			
			consoleLog($window);
			if($window=='217069ec-c823-4d6d-8387-70c11deb3429.id.repl.co') {
				$window='replit-php.benjamindanielsimmons.repl.co';
			}
			consoleLog($window);
			$jsonString = file_get_contents('visitorCounter.json');
			$data = json_decode($jsonString, true);
			
			echo '<h1>This site has been visited ';
			echo $data[$window]+1;
			echo ' times';
			$data[$window]=$data[$window]+1;
			$newJsonString = json_encode($data);
			file_put_contents('visitorCounter.json', $newJsonString);
		?>
		
		<?php echo '<p>Hello World</p>'; ?> 

  </body>
</html>