<?php

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne(array $digits): array
    {
        $reversed = array_reverse($digits);
        $digitsLength = count($reversed);

        for ($i = 0; $i < count($digits); $i++) {
            $keyToIncrement = $digitsLength - $i;
            if ($reversed[$i] === 9) {
                $digits[$keyToIncrement - 1] = 0;
            } else {
                $digits[$keyToIncrement - 1] = $reversed[$i] + 1;
                return $digits;
            }
        }

        array_unshift($digits, 1);

        return $digits;
    }
}

$solution = new Solution();

var_dump($solution->plusOne([9, 8, 9]));