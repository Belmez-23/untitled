<?php
function bubbleSort($nums)
{
    for ($i = 0; $i < count($nums) - 1; $i++){
        for ($j = 0; $j < count($nums) - $i - 1; $j++){
            if($nums[$j] > $nums[$j + 1]){
                [$nums[$j], $nums[$j + 1]] = [$nums[$j + 1], $nums[$j]];
            }
        }
    }
    return $nums;
}

print_r(bubbleSort([])); // []
print_r(bubbleSort([3, 10, 4, 3])); // [3, 3, 4, 10]

print_r(bubbleSort([6, '2', 8, -7, -6, '0', '-8', 7]));