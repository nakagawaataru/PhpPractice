<?php
// 自分の得意な言語で
// Let's チャレンジ！！
$input_lines = trim(fgets(STDIN));
 for($i=1; $i<10; $i++){
     echo $input_lines * $i ;
     if($i<9){
         echo " ";
     }
 }
 ?>
