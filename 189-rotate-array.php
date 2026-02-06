<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(array &$nums, int $k) {
        $numsLength = count($nums);
        $kModulo = $k % $numsLength;
        $lastElements = array_splice($nums, -$kModulo);
        array_unshift($nums, ...$lastElements);

        var_dump($nums);

        return null;
    }
}

$solution = new Solution();

$nums = [1, 2, 3, 4, 5, 6, 7];
$k = 6;
var_dump($solution->rotate($nums, $k));