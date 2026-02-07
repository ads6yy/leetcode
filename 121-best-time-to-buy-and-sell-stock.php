<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $lowestPrice = $prices[0];
        for($i = 1; $i < count($prices); $i++) {
            if($lowestPrice > $prices[$i]) {
                $lowestPrice = $prices[$i];
                continue;
            }

            $maxProfit = max($maxProfit, $prices[$i] - $lowestPrice);
        }

        return $maxProfit;
    }
}

$solution = new Solution();

$nums = [7,1,5,3,6,4];
var_dump($solution->maxProfit($nums));