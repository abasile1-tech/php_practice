<?php
	function solution($X, $Y, $D) {
		if ((($Y-$X) % $D) == 0) {
			$min_jumps = intdiv(($Y-$X),$D);
		} else {
			$min_jumps = intdiv(($Y-$X),$D) + 1;
		}
		return $min_jumps;
	}
	echo(solution(10,85,30));