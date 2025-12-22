<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert(array $nums, int $target): int
    {
        $numsLength = count($nums);
        for($i = 0; $i < $numsLength; $i++) {
            if ($nums[$i] >= $target) {
                return $i;
            }
        }

        return $numsLength;
    }
}

$solution = new Solution();

var_dump($solution->searchInsert([1,3,5,6], 7));