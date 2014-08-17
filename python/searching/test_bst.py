import unittest
import bst

class TestBST(unittest.TestCase):
    def test_basic_insert(self):
        tree = bst.BST()
        tree.insert(3)

    def test_inorder(self):
        tree = bst.BST()
        tree.insert(3)
        tree.insert(4)
        tree.insert(1)
        tree.insert(0)

        answers = [0, 1, 3, 4]

        count = 0
        results = tree.inorder(tree.root)
        for r in results:
            self.assertEquals(answers[count], r)
            count = count + 1

if __name__ == '__main__':
    unittest.main()