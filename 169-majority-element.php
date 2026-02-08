<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $numsCount = [];
        $majority = null;
        for ($j = 0; $j < count($nums); $j++) {
            if (!isset($numsCount[$nums[$j]])) $numsCount[$nums[$j]] = 0;
            $numsCount[$nums[$j]]++;
            $majority = !$majority || $numsCount[$nums[$j]] > $numsCount[$majority] ? $nums[$j] : $majority;
        }

        return $majority;
    }
}

$solution = new Solution();

var_dump($solution->majorityElement([2,2,1,1,1,2,2]));