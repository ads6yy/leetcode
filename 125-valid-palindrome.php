<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $sClean = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($s));
        return strrev($sClean) === $sClean;
    }
}

$solution = new Solution();

var_dump($solution->isPalindrome("A man, a plan, a canal: Panama"));