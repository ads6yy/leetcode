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

    /**
     * @param TreeNode $root
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum): bool {
        if (!$root) return 0;

        if (!$root->left && !$root->right) {
            return ($targetSum - $root->val) === 0;
        }

        $left = $this->hasPathSum($root->left, $targetSum - $root->val);
        $right = $this->hasPathSum($root->right, $targetSum - $root->val);

        return $left || $right;
    }
}

$solution = new Solution();

var_dump($solution->hasPathSum(buildTree([5,4,8,11,null,13,4,7,1,null,null,null,1]), 22));