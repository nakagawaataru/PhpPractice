<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = explode(" ", $input_lines);
    $a = $i[0];
    $b = $i[1];
    echo $a[0] . "." . $b[0];
?>
