class Node:
    """Node (of a Binary Search Tree)"""

    def __init__(self, data):
        self.left = None
        self.right = None
        self.data = data

class BST:
    """Binary Search Tree"""

    def __init__(self):
        self.root = None

    def inorder(self, node):
        """Perform in-order traversal of BST"""
        if node is not None:
            for elem in self.inorder(node.left):
                yield elem
            yield node.data
            for elem in self.inorder(node.right):
                yield elem