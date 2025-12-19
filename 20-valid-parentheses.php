<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s) {
        $pile = [];

        for ($i = 0; $i < strlen($s); $i++) {
            $currentParenthese = $s[$i];
            $previousParenthese = end($pile);

            $isClosingParenthese = match ([$currentParenthese, $previousParenthese]) {
                [')', '('], [']', '['], ['}', '{'] => true,
                default => false
            };

            if ($isClosingParenthese) {
                array_pop($pile);
            } else {
                $pile[] = $currentParenthese;
            }
        }

        return empty($pile);
    }
}

$solution = new Solution();

var_dump($solution->isValid("{({[]})"));