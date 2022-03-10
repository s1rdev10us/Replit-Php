<?php
	function consoleLog($data = '') {
		GLOBAL $consoleCounter;
		$consoleCounter=$consoleCounter+1;
		echo "<script id='$consoleCounter'>document.getElementById('$consoleCounter').remove();console.log('$data')</script>";
	}
?>