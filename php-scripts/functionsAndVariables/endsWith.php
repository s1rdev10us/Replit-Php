<?php
	function endsWith($string, $endString)
		{
			$len = strlen($endString);
			if ($len == 0) {
				return true;
			}
			return (substr($string, -$len) === $endString);
		}
?>