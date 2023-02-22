<?php
	function solution($A,$K) {
		$B = $A;
		while ($K > 0 and count($A) > 1) {
			for ($i = 0; $i < count($A); $i++) {
				if ($i == 0) {
					$A[$i] = $B[count($B)-1];
				} else {
					$A[$i] = $B[$i-1];
				}
			}
			$K -= 1;
			$B = $A;
		}
		return $A;
	}
	print_r(solution([3,8,9,7,6],3));
?>