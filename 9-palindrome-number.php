<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $xString = (string) $x;
        return $xString === strrev($xString);
    }
}

$solution = new Solution();

var_dump($solution->isPalindrome(12321));