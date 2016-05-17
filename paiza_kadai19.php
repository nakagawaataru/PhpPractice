<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = trim(fgets(STDIN));
$a = explode(" ",$input_lines);
$b = substr($a[0], $a[1]-1, 1 );
echo $b;
?>
