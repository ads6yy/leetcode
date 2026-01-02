<?php

/**
 * Definition for a binary tree node.
 */
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

/**
 * HELPER: Converts LeetCode-style array to TreeNode structure
 */
function buildTree($arr)
{
    if (empty($arr) || $arr[0] === null) return null;

    $root = new TreeNode($arr[0]);
    $queue = [$root];
    $i = 1;

    while ($i < count($arr)) {
        $curr = array_shift($queue);

        // Left Child
        if ($i < count($arr) && $arr[$i] !== null) {
            $curr->left = new TreeNode($arr[$i]);
            $queue[] = $curr->left;
        }
        $i++;

        // Right Child
        if ($i < count($arr) && $arr[$i] !== null) {
            $curr->right = new TreeNode($arr[$i]);
            $queue[] = $curr->right;
        }
        $i++;
    }
    return $root;
}

class Solution
{
    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q): bool
    {
        if (!$p && !$q) return true;
        if (!$p || !$q) return false;

        if ($p->val !== $q->val) return false;

        $checkLeft = $this->isSameTree($p->left, $q->left);
        $checkRight = $this->isSameTree($p->right, $q->right);

        return $checkLeft && $checkRight;
    }
}

$solution = new Solution();

var_dump($solution->isSameTree(buildTree([0]), buildTree([])));