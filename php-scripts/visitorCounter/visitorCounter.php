<?php
	$consoleCounter=0;
	$window = parse_url($_SERVER['HTTP_HOST']);
	consoleLog($window);
	$window=$window["path"];
	consoleLog($window);
	if(endsWith($window,'repl.co')) {
		$window='source-replit';
	}
	consoleLog($window);
	$jsonFile = $_SERVER['DOCUMENT_ROOT'].'/php-scripts/visitorCounter/visitorCounter.json';
	$jsonString = file_get_contents($jsonFile);
	$data = json_decode($jsonString, true);
	$data[$window]=$data[$window]+1;
	echo "<h1>This site has been visited {$data[$window]} times</h1>";
	$newJsonString = json_encode($data);
	file_put_contents($jsonFile, $newJsonString);
?>