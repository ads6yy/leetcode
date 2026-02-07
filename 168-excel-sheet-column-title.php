<?php

class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $alphabet = range('A', 'Z');
        $letters = '';

        $i = $columnNumber;
        while ($i > 26) {
            // si modulo = 0, on veut Z et pas A.
            $modulo = $i % 26 === 0 ? 26 : $i % 26;
            $letters .= $alphabet[$modulo - 1];
            $i = ($i - $modulo) / 26;
        }
        $letters .= $alphabet[$i - 1];

        return strrev($letters);
    }
}

$solution = new Solution();

var_dump($solution->convertToTitle(2147483647));