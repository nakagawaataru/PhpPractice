<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = trim(fgets(STDIN));
$num = explode(" ",$input_lines);
$n = $num[0];
$s = $num[1];
if($s=='km'){
    echo $n * 1000000;
}
elseif($s=='m'){
    echo $n * 1000;
}
elseif($s=='cm'){
    echo $n * 10;
}
?>
