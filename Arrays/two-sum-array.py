"""
LeetCode 1: Two Sum
https://leetcode.com/problems/two-sum/

Approach:
- Use hashmap to store value and index
- Check if target - current exists

Time Complexity: O(n)
Space Complexity: O(n)
"""

def twoSum(nums, target):
    hashmap = {}
    for i, num in enumerate(nums):
        diff = target - num
        if diff in hashmap:
            return [hashmap[diff], i]
        hashmap[num] = i
