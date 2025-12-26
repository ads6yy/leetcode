<?php

class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary(string $a, string $b)
    {
        $aArrayReversed = str_split(strrev($a));
        $bArrayReversed = str_split(strrev($b));

        $counter = 0;
        $hold = 0;

        $result = '';

        while (isset($aArrayReversed[$counter]) || isset($bArrayReversed[$counter])) {

            $aValue = $aArrayReversed[$counter] ?? '0';
            $bValue = $bArrayReversed[$counter] ?? '0';

            switch ([$aValue, $bValue]) {
                case ['0', '0']:
                    if ($hold === 1) {
                        $result .= '1';
                        $hold--;
                    } else {
                        $result .= '0';
                    }
                    break;
                case ['1', '0']:
                case ['0', '1']:
                    if ($hold === 1) {
                        $result .= '0';
                    } else {
                        $result .= '1';
                    }
                    break;
                case ['1', '1']:
                    if ($hold === 0) {
                        $result .= '0';
                        $hold++;
                    } else {
                        $result .= '1';
                    }
                    break;
            }

            $counter++;
        }

        if ($hold === 1) {
            $result .= '1';
        }

        return strrev($result);
    }
}

$solution = new Solution();

var_dump($solution->addBinary("11", "111"));