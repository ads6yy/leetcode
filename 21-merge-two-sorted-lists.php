<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function arrayToListNode($array) {
    if (empty($array)) return null;
    $head = new ListNode($array[0]);
    $current = $head;

    for ($i = 1; $i < count($array); $i++) {
        $current->next = new ListNode($array[$i]);
        $current = $current->next;
    }

    return $head;
}

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $dummy = new ListNode();
        $tail = $dummy;

        while ($list1 !== null && $list2 !== null) {
            if ($list1->val <= $list2->val) {
                $tail->next = $list1;
                $list1 = $list1->next;
            } else {
                $tail->next = $list2;
                $list2 = $list2->next;
            }
            $tail = $tail->next;
        }
        $tail->next = $list1 ?? $list2;
        return $dummy->next;
    }
}

$solution = new Solution();

var_dump($solution->mergeTwoLists(arrayToListNode([1,2,4]), arrayToListNode([1,3,3,4])));