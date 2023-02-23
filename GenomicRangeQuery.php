<?php
	function solution($S,$P,$Q) {
		if (!function_exists('str_contains')) {
			function str_contains (string $haystack, string $needle) {
					return empty($needle) || strpos($haystack, $needle) !== false;
			}
		}
		$res = [];
		for ($i=0; $i<count($P); $i++) {
			$sliced_S = substr($S,$P[$i],$Q[$i]-$P[$i]+1);
			if (str_contains($sliced_S,'A')) {
				array_push($res,1);
			} elseif (str_contains($sliced_S,'C')) {
				array_push($res,2);
			} elseif (str_contains($sliced_S,'G')) {
				array_push($res,3);
			} else {
				array_push($res,4);
			}
		}
		return $res;
	}
	print_r(solution("CAGCCTA",[2,5,0],[4,5,6]));