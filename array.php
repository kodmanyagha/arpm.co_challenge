<?php
$array = [
	'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
	'red' => ['strawberry', 'cheer', 'tomato'],
	'sweet' => ['sugar', 'cake', 'strawberry'],
];

$count = 0;
array_map(function($item1) use (&$count) {
    array_map(function($item2) use (&$count) {
        $count += (int)($item2 === 'strawberry');
    }, $item1);
}, array_values($array));
echo $count . PHP_EOL;

/////////////////////////////////////////

$count = 0;
array_walk_recursive($array, function($item) use (&$count) {
    $count += (int)($item === 'strawberry');
});
echo $count . PHP_EOL;


