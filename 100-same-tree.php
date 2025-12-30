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

    function recursive(&$result, TreeNode $node1, TreeNode $node2): void
    {
        if ($node1->val !== $node2->val
            || ($node1->left !== null && $node2->left === null)
            || ($node1->left === null && $node2->left !== null)
            || ($node1->right !== null && $node2->right === null)
            || ($node1->right === null && $node2->right !== null)
        ) {
            $result = false;
            return;
        }

        if ($node1->left !== null && $node2->left !== null) {
            $this->recursive($result, $node1->left, $node2->left);
        }

        if ($node1->right !== null && $node2->right !== null) {
            $this->recursive($result, $node1->right, $node2->right);
        }
    }

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q): bool
    {
        if (!$p && !$q) return true;
        if (!$p || !$q) return false;

        $result = true;

        $this->recursive($result, $p, $q);
        return $result;
    }
}

$solution = new Solution();

var_dump($solution->isSameTree(buildTree([]), buildTree([0])));