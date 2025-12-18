<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt(string $s): int
    {
        $result = 0;

        $sArray = str_split($s);
        foreach ($sArray as $i => $currentLetter) {
            $previousLetter = $i !== 0 ? $sArray[$i-1] : null;

            var_dump($currentLetter, $previousLetter);

            $result += match ([$currentLetter, $previousLetter]) {
                ['V', 'I'] => 3,
                ['X', 'I'] => 8,
                ['L', 'X'] => 30,
                ['C', 'X'] => 80,
                ['D', 'C'] => 300,
                ['M', 'C'] => 800,
                default => match ($currentLetter) {
                    'I' => 1,
                    'V' => 5,
                    'X' => 10,
                    'L' => 50,
                    'C' => 100,
                    'D' => 500,
                    'M' => 1000,
                    default => 0,
                }
            };
        }

        return $result;
    }
}

$solution = new Solution();

var_dump($solution->romanToInt('LIV'));