<?php
	function solution($N,$A) {
		$B = array_fill(0,$N,0);
		$maxCounter = 0;
		$lastUpdate = 0;
		for ($i=0; $i<count($A); $i++) {
			if ($A[$i] <= $N) {
				if ($B[$A[$i]-1] < $lastUpdate)
					$B[$A[$i]-1] = $lastUpdate;
				$B[$A[$i]-1]++;
				if ($B[$A[$i]-1] > $maxCounter)
					$maxCounter++;
			} else {
				$lastUpdate = $maxCounter;
			}
		}
		for ($i=0; $i < count($B); $i++) {
			if ($B[$i] < $lastUpdate)
				$B[$i] = $lastUpdate;
		}
		return $B;
	}
	print_r(solution(5,[3,4,4,6,1,4,4]));