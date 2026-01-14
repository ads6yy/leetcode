<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $uniques = [];
        for ($i = 0; $i < count($nums); $i++) {
            $val = $nums[$i];
            if (!array_key_exists($val, $uniques)) {
                $uniques[$val] = true;
            } else {
                unset($uniques[$val]);
            }
        }

        return key($uniques);
    }
}

$solution = new Solution();

$nums = [2,1,2];
var_dump($solution->singleNumber($nums));