class Node:
    def __init__(self, data, left=None, right=None):
        self.left = left
        self.right = right
        self.data = data

class BST:
    """Binary Search Tree"""

    def inorder(self, node):
        """Perform in-order traversal of BST"""
        if node is not None:
            self.inorder(node.left)
            print node.data
            self.inorder(node.right)