<?php

function count_colors($p_array, $p_color) {
	$result = 0;

	foreach ($p_array as $value) {

		if ($value['color'] == $p_color) {
			$result++;
		}

	}

	return $result;
}

function count_open($p_array, $p_color = null) {
	$result = 0;

	foreach ($p_array as $key => $value) {

		if ($p_color == NULL) {

			if ($value['open'] == true) {
				$result++;
			}

		} else if ($value['color'] == $p_color && $value['open'] == true) {
			$result++;
		}
	}
	
	return $result;
}