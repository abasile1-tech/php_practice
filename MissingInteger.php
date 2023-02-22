<?php
	function solution($A) {
		$B = [];
		foreach($A as $value) {
			if ($value > 0)
				$B[$value] = 1;
		}
		for ($i=1; $i < count($B)+2; $i++) {
			if (array_key_exists($i,$B) == false)
				return $i;
		}
		return 1;
	}
	echo(solution([1,3,6,4,1,2]));