<?php

class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $alphabet = range('A', 'Z');
        $result = 0;
        $columnTitleLen = strlen($columnTitle);
        $columnTitleRev = strrev($columnTitle);

        for ($i = 0; $i < $columnTitleLen; $i++) {
            $letter = $columnTitleRev[$i];
            $letterAlphabetPosition = array_search($letter, $alphabet);
            $value = ($letterAlphabetPosition % 26) + 1;
            $result += $value * pow(26, $i);
        }
        return $result;
    }
}

$solution = new Solution();

var_dump($solution->titleToNumber("AAAB"));