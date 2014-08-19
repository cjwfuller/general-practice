import unittest
import bst

class TestBST(unittest.TestCase):
    def test_basic_insert(self):
        tree = bst.BST(5, bst.BST(4))

    def test_single_element_inorder(self):
        tree = bst.BST(4, None, None)
        results = tree.inorder(tree)
        for r in results:
            self.assertEquals(4, r)

if __name__ == '__main__':
    unittest.main()