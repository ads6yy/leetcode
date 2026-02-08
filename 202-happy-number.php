<?php

class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $alreadySeen = [];
        while ($n !== 1) {
            $numbers = "$n";
            $n = 0;
            for ($j = 0; $j < strlen($numbers); $j++) {
                $n += pow($numbers[$j], 2);
            }

            if (in_array($n, $alreadySeen)) return false;

            $alreadySeen[] = $n;
        }

        return true;
    }
}

$solution = new Solution();

var_dump($solution->isHappy(2));