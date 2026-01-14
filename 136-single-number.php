<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $unique = 0;
        foreach ($nums as $num) {
            var_dump("num : $num");
            $unique ^= $num;
            var_dump("unique value : $unique");
        }
        return $unique;
    }
}

$solution = new Solution();

$nums = [2,1,2,4,4];
var_dump($solution->singleNumber($nums));