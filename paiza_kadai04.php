<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = trim(fgets(STDIN));
	for ($i = 0; $i < $input_lines; $i++) {
		$s[] = trim(fgets(STDIN));
	}
	    $s = implode(",", $s);
	echo "Hello " . $s . ".";
 ?>
