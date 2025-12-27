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
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head): ListNode
    {
        $result = new ListNode($head->val);
        $resultTail = $result;

        $tail = $head;

        while ($tail->next) {
            if ($tail->next->val !== $tail->val) {
                $resultTail->next = new ListNode($tail->next->val);
                $resultTail = $resultTail->next;
            }
            $tail = $tail->next;
        }

        return $result;
    }
}

$solution = new Solution();

var_dump($solution->deleteDuplicates(arrayToListNode([1,1,1,2,3,3,4,4,4])));