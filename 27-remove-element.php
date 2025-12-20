<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(array &$nums, int $val): int
    {
        foreach ($nums as $index => $num) {
            if ($num === $val) {
                unset($nums[$index]);
            }
        }

        return count($nums);
    }
}

$solution = new Solution();

$nums = [0,1,2,2,3,0,4,2];
var_dump($solution->removeElement($nums, 2));