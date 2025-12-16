<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $alreadySeenNums = [];
        foreach ($nums as $i => $num) {
            if (!empty($alreadySeenNums)) {
                foreach ($alreadySeenNums as $j => $alreadySeenNum) {
                    if ($alreadySeenNum + $num === $target) {
                        return [$j, $i];
                    }
                }
            }
            $alreadySeenNums[] = $num;
        }
        return [];
    }
}

$solution = new Solution();

var_dump($solution->twoSum([2, 6, 7, 11, 15], 9));