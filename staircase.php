<?php

	function staircase($length) {
		for($i = 1; $i <= $length; $i++) {
			echo str_repeat(" ", $length - $i);
			echo str_repeat("#", $i);
			echo "\n";
		}
	}

	staircase(10);

?>
