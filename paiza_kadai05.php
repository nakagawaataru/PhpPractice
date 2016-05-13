<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = trim(fgets(STDIN));
$a = explode(" ",$input_lines);
$m = $a[0];
$n = $a[1];
echo $m;
for($i=1;$i<10;$i++){
$a = $m + ($i*$n);
echo " ".$a;
}
?>
