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

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    function isSameTree($p, $q): bool
    {
        if (!$p && !$q) return true;
        if (!$p || !$q) return false;

        if ($p->val !== $q->val) return false;

        $checkLeft = $this->isSameTree($p->left, $q->left);
        $checkRight = $this->isSameTree($p->right, $q->right);

        return $checkLeft && $checkRight;
    }

    function invertTree($root): ?TreeNode {
        if ($root === null) return null;

        $left = $root->left;
        $right = $root->right;

        $root->left = $right ? $this->invertTree($right) : null;
        $root->right = $left ? $this->invertTree($left) : null;

        return $root;
    }

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root): bool
    {
        if (!$root->left && !$root->right) return true;
        if (!$root->left || !$root->right) return false;

        return $this->isSameTree($root->left, $this->invertTree($root->right));
    }
}

$solution = new Solution();

var_dump($solution->isSymmetric(buildTree([1,0])));