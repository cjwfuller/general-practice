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

    # TODO don't like this - recursion would look clearer
    def insert(self, data):
        """Insert element into BST"""
        if self.root == None:
            self.root = Node(data)
        else:
            current = self.root
            while True:
                if(data < current.data):
                    if(current.left):
                        current = current.left
                    else:
                        current.left = Node(data)
                elif(data > current.data):
                    if(current.right):
                        current = current.right
                    else:
                        current.right = Node(data)
                else:
                    break