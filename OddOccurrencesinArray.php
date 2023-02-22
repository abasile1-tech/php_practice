<?php
	function solution($A) {
		$B = [];
		for ($i = 0; $i < count($A); $i++) {
			if (array_key_exists($A[$i],$B) == false) {
				$B[$A[$i]] = 1;
			} else {
				$B[$A[$i]]++;
			}
		}
		foreach ($B as $key => $value) {
			if ($value % 2 != 0) {
				return $key;
			}
		}
	}
	echo(solution([9,3,9,3,9,7,9]));