<?php
/*
 * @param array
 *
 * @return array
 * */
function arrayReverse($arr):array{
    $output = [];
    $array_len = count($arr);

    for ($i = $array_len - 1; $i >=0; $i--){
        array_push($output, $arr[$i]);
    }
    return $output;
}