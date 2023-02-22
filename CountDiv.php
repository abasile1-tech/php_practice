<?php
	function solution($A,$B,$K) {
		$intermediary = $A - 1;
		$highEnd = intdiv_py($B,$K);
		$lowEnd = intdiv_py($intermediary,$K);
		return $highEnd - $lowEnd;
	}

	function intdiv_py(int $num1, int $num2): int{
    if ($num1 < 0 xor $num2 < 0){
        $num1 = abs($num1);
        $num2 = abs($num2);
        $remainder = $num1 % $num2;
        return $remainder ? -1 -($num1 - $remainder) / $num2 : -$num1 / $num2;
    }
    return intdiv($num1, $num2);
	}
	echo(solution(6,11,2));