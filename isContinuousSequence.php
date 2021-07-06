<?php
function isContinuousSequence($nums)
{
    if (!$nums){
        return false;
    }

    for ($n = 0; $n < count($nums) - 1; $n++){
        if($nums[$n] + 1 != $nums[$n + 1]){
            return false;
        }
    }
    return true;
}
var_dump(isContinuousSequence([10, 11, 12, 13]));     // true
var_dump(isContinuousSequence([10, 11, 12, 14, 15])); // false
var_dump(isContinuousSequence([1, 2, 21, 3]));         // false
var_dump(isContinuousSequence([]));                   // false

var_dump(isContinuousSequence([-1]));
var_dump(isContinuousSequence([-4, -3, -2, -1]));