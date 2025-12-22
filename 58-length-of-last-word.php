<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord(string $s): int
    {
        $sLength = strlen(trim($s));
        if (!str_contains($s, " ")) return $sLength;

        $sReverse = strrev(trim($s));
        for($i = 0; $i < $sLength; $i++) {
            if ($sReverse[$i] === " ") {
                return $i;
            }
        }

        // impossible in reality.
        return $sLength;
    }
}

$solution = new Solution();

var_dump($solution->lengthOfLastWord(" a"));