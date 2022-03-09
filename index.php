<html>
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
			
			$window = parse_url($_SERVER['HTTP_HOST']);
			$window=$window["host"];
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