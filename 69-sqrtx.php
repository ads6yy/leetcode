<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $result = 1;
        while ($result * $result <= $x) {
            $result++;
        }

        return $result - 1;
    }
}

$solution = new Solution();

var_dump($solution->mySqrt(25));