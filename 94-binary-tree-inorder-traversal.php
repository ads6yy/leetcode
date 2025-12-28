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
    function recursive(&$result, TreeNode $node): void
    {
        var_dump($node->val);

        if ($node->left !== null) {
            $this->recursive($result, $node->left);
            $result[] = $node->left->val;
        }
        if ($node->right !== null) {
            $this->recursive($result, $node->right);
            $result[] = $node->right->val;
        }
    }

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root): array
    {
        if (!$root) return [];

        $result = [$root->val];

        $this->recursive($result, $root);

        return $result;
    }
}

$solution = new Solution();

var_dump($solution->inorderTraversal(buildTree([1,2,3,4,5,null,8,null,null,6,7,9])));