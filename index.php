<?php
date_default_timezone_set('Asia/Saigon');
echo date('s-i-h').'<br>';

include_once 'StopWatch.php';
$a = [];
for ($i = 0; $i < 10000; $i++){
    $a[$i]= $i;
}
$stopwatch = new StopWatch();
$stopwatch->start();
selection_sort($a);
$stopwatch->stop();


echo $stopwatch->getStarttime().'<br>';
echo $stopwatch->getEndtime().'<br>';
echo $stopwatch->getElapsedTime().'<br>';



function selection_sort($data)
{
    for($i=0; $i<count($data)-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<count($data); $j++) {
            if ($data[$j]<$data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

function swap_positions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}