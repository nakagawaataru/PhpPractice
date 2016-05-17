<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $count = 0;
    for ( $i=0; $i<7; $i++ ){
        $input_lines = fgets(STDIN);
        if ( $input_lines === "no\n" ){
            $count = $count + 1;
        }
    }
    echo $count;
?>
