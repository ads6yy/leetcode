<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $k = $n;
        $i = $n - 1;

        $result = 0;
        while ($i > 0) {
            $result += $i;

            $k = $k - 2;
            $i = $k - 1;
        }

        return $result + 1;
    }
}

$solution = new Solution();

var_dump($solution->climbStairs(6));