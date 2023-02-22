<?php
	function solution($N) {
		$binary = "";
		while ($N != 0) {
			$remainder = $N % 2;
			$N = intdiv($N,2);
			$binary = strval($remainder) . $binary;
		}
		$count = 0;
		$longest_gap = 0;
		for ($i = 0; $i < strlen($binary); $i++) {
			if ($binary[$i] == '0') {
				$count += 1;
			} elseif ($binary[$i] == '1') {
				if ($count > $longest_gap) {
					$longest_gap = $count;
				}
				$count = 0;
			}
		}
		return $longest_gap;
	}
	echo("writing stuff\n");
	echo(solution(1041));
?>