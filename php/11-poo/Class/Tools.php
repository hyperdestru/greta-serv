<?php

Class Tools {

	static function debug($content) {
		echo "<pre>";
		foreach ($content as $key => $value) {
			var_dump($value);
		}
		echo "</pre>";
	}
}