<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = fgets(STDIN);
    $b = fgets(STDIN);
    $c = fgets(STDIN);
    if($a == $b && $b == $c){
        echo "YES";
    }
    else{
    echo "NO";
    }
?>
