<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr(string $haystack, string $needle) {
        if (!str_contains($haystack, $needle)) return -1;

        $haystackExploded = explode($needle, $haystack);
        if (!empty($haystackExploded)) {
            return strlen($haystackExploded[0]);
        }

        return -1;
    }
}

$solution = new Solution();

var_dump($solution->strStr("sadzzsadbutsad", "sad"));