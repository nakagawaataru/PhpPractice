<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $count = 0;
    for($i='A';$i <= $input_lines;$i++){
        $count++;
        if($i==='Z'){
            break;
        }
    }
    echo $count;
?>
