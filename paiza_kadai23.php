<?php
    $input_lines = trim(fgets(STDIN));
    $a = $input_lines;
    $a_A = 0;
    $a_st = strlen($a);
    for($i=0; $i<$a_st; $i++){
        if($a[$i] == 'A'){
            $a_A = $a_A+1;
        }
    }
    echo $a_A;
?>
