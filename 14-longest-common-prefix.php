<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix(array $strs): string
    {
        $result = '';
        $firstString = array_shift($strs);
        for ($i = 1; $i <= strlen($firstString); $i++) {
            $strCut = substr($firstString, 0, $i);
            foreach ($strs as $str) {
                if (!str_starts_with($str, $strCut)) {
                    return $result;
                }
            }
            $result = $strCut;
        }

        return $result;
    }
}

$solution = new Solution();

var_dump($solution->longestCommonPrefix(["c","acc","ccc"]));