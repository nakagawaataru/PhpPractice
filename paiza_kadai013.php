<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
 $input_lines = trim(fgets(STDIN));
    $input = explode(" ", $input_lines);
    $m = $input[0];
    $n = $input[1];
    $b = floor($m / $n);
    echo $b . " ";
    echo ($m % $n);
?>
