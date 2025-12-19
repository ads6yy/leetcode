<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(array &$nums): int
    {
        $uniques = [];

        foreach ($nums as $num) {
            if (!in_array($num, $uniques)) {
                $uniques[] = $num;
            }
        }

        $nums = $uniques;

        return count($uniques);
    }
}

$solution = new Solution();

$nums = [0,0,1,1,1,2,2,3,3,4];
var_dump($solution->removeDuplicates($nums));