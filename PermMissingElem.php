<?php
	function solution($A) {
		$N = count($A);
		if ($N == 0)
			return 1;
		$B = [];
		for ($i = 1; $i < ($N+2); $i++)
			$B[$i] = 2;
		for ($i = 0; $i < $N; $i++)
			$B[$A[$i]] = 1;
		foreach($B as $key => $value) {
			if ($value == 2)
				return $key;
		}
	}
	echo(solution([2,3,1,5]));