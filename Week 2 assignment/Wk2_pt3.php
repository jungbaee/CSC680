<?php

    $nums = array(-2,1,-3,4,-1,2,1,-5,4);

    for ($i = 1; $i < COUNT($nums); $i++) {
        $nums[$i] = max($nums[$i], $nums[$i] +$nums[$i-1]);
        $max = max($max, $nums[$i]);
    }
    print_r($nums);

    echo $max;

?>