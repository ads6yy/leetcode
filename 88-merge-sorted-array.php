<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $result = [];

        $i1 = 0;
        $i2 = 0;

        while ($i1 < $m || $i2 < $n) {
            $comparedValue1 = $i1 < $m ? $nums1[$i1] : null;
            $comparedValue2 = $nums2[$i2] ?? null;

            if (is_null($comparedValue1)) {
                $result[] = $comparedValue2;
                $i2++;
                continue;
            }

            if (is_null($comparedValue2)) {
                $result[] = $comparedValue1;
                $i1++;
                continue;
            }

            if ($comparedValue1 <= $comparedValue2) {
                $result[] = $comparedValue1;
                $i1++;
            } else {
                $result[] = $comparedValue2;
                $i2++;
            }
        }

        $nums1 = $result;

        return null;
    }
}

$solution = new Solution();

$nums1 = [0];
$nums2 = [1];
var_dump($solution->merge($nums1, 0, $nums2, 1));