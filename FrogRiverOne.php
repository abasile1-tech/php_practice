<?php
	function solution($X, $A) {
		$B = [];
		$count = 0;
		for ($i = 1; $i < ($X + 1); $i++)
			$B[$i] = 0;
		for ($i = 0; $i < count($A); $i++) {
			if (array_key_exists($A[$i],$B))
				unset($B[$A[$i]]);
			$count++;
			if ($count >= $X) {
				if (count($B) <= 0) {
					return $i;
				}
			}
		}
		return -1;
	}
	echo(solution(5,[1,3,1,4,2,3,5,4]));