<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = $input_lines;
    $b = explode(" ",$a);
    $c = $b[1] - $b[0];
    echo $c;
?>
