<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $n1 = 0;
        $n2 = 1;

        $count = 0;

        while($count < $n) {
            $add = $n1 + $n2;
            $n1 = $n2;
            $n2 = $add;

            $count++;
        }

        return $n2;
    }
}

$solution = new Solution();

var_dump($solution->climbStairs(6));