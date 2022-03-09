<?php
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
	$jsonString = file_get_contents('/php-scripts/visitorCounter/visitorCounter.json');
	$data = json_decode($jsonString, true);
	echo '\r\n<h1>This site has been visited ';
	echo $data[$window]+1;
	echo ' times</h1>';
	$data[$window]=$data[$window]+1;
	$newJsonString = json_encode($data);
	file_put_contents('/php-scripts/visitorCounter/visitorCounter.json', $newJsonString);
?>