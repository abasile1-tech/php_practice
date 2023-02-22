<?php
	function solution($A) {	
		$B = [];
		for ($i=1; $i < count($A)+1; $i++)
			$B[$i] = 0;
		for ($i=0; $i < count($A); $i++) {
			if (array_key_exists($A[$i],$B))
				unset($B[$A[$i]]);
			if (count($B) <= 0)
				return 1;
		}
		return 0;
	}
	echo(solution([4,1,3,2]));