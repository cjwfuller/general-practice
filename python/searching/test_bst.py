import unittest
import bst

class TestBST(unittest.TestCase):
    def test_basic_insert(self):
        tree = bst.BST(5, bst.BST(4), None)

    def test_left_element_inorder(self):
        tree = bst.BST(4, 3, None)
        results = tree.inorder(tree)
        answer = [3, 4]
        count = 0
        for result in results:
            self.assertEquals(result, answer[count])

    def test_right_element_inorder(self):
        tree = bst.BST(5, None, 6)
        results = tree.inorder(tree)
        answer = [5, 6]
        count = 0
        for result in results:
            self.assertEquals(result, answer[count])

    def test_basic_inorder(self):
        tree = bst.BST(7, bst.BST(1, None, None), bst.BST(9, None, None))
        results = tree.inorder(tree)
        answer = [1, 7, 9]
        count = 0
        for result in results:
            self.assertEquals(result, answer[count])
            count = count + 1

if __name__ == '__main__':
    unittest.main()