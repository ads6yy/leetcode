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

    function recursive(TreeNode $node, int &$result, int $level = 1): void
    {
        if ($node->left !== null || $node->right !== null) {
            if ($result < $level + 1) $result++;
        }

        if ($node->left !== null) {
            $this->recursive($node->left, $result, $level + 1);
        }
        if ($node->right !== null) {
            $this->recursive($node->right, $result, $level + 1);
        }
    }

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if (!$root) return 0;

        $result = 1;

        $this->recursive($root, $result);

        return $result;
    }
}

$solution = new Solution();

var_dump($solution->maxDepth(buildTree([0,2,4,1,null,3,-1,5,1,null,6,null,8])));