<?php
print_r(arrayReverse([1,2,3,4,5,6]));
/*
 * @param array
 *
 * @return array
 * */
function arrayReverse(array $arr):array{
    $output = [];
    $array_len = count($arr);

    for ($i = $array_len - 1; $i >=0; $i--){
        array_push($output, $arr[$i]);
    }
    return $output;ijuij
}
