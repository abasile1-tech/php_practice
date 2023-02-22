<?php
function solution($A) {
	$numZ = 0;
	$pairs = 0;
	for ($i=0; $i < count($A); $i++) {
		if ($A[$i] == 0)
			$numZ++;
		if ($A[$i] == 1)
			$pairs += $numZ;
	}
	if ($pairs > 1000000000)
		return -1;
	return $pairs;
}
echo(solution([0,1,0,1,1]));