class BST:
    """Binary Search Tree"""

    def __init__(self, data, left=None, right=None):
        self.left = None
        self.right = None
        self.data = data

    def inorder(self, node):
        """Perform in-order traversal of BST"""
        if node.left is not None:
            self.inorder(node.left)
        yield node.data
        if node.right is not None:
            self.inorder(node.right)