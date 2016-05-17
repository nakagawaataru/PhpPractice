<?php
// 自分の得意な言語で
// Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $ymd = explode(" ", $input_lines);
    $y = $ymd[0];
    $m = $ymd[1];
    $d = $ymd[2];
        echo $y . "/" . $m . "/" . $d;
?>
