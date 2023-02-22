<?php
	function solution($A) {
		$diff_array = [];
		$part1 = 0;
		$part2 = 0;
		for ($i = 0; $i < count($A); $i++)
			$part2 += $A[$i];
		for ($i = 0; $i < count($A)-1; $i++) {
			$part1 += $A[$i];
			$part2 -= $A[$i];
			$diff = abs($part1 - $part2);
			array_push($diff_array, $diff);
		}
		$min_diff = min($diff_array);
		return $min_diff;
	}
	echo(solution([3,1,2,4,3]));