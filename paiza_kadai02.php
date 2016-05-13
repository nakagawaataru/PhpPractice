<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input = explode(" ", $input_lines);
    $a = $input[0];
    $b = $input[1];

    if($a > $b){
        echo $a;
    }
    elseif ($a < $b){
    echo $b;
    }
    else{
    echo "eq";
    }

?>
