<?php
$arr = [];

for($i = 0; $i < 20; $i++) {
    for($j = 0; $j < 52; $j++) {
        $arr[$i][$j] = mt_rand(10, 20);
    }
}

$cumulative_sum = [];

$until = 2;

for($i = 0; $i < 20; $i++) {
    $total = 0;
    for($j = 0; $j < $until; $j++) {
        $total += $arr[$i][$j];
    }
    $cumulative_sum[$i] = $total;
}

// now we can put this data to a bar graph.
print_r($cumulative_sum);



