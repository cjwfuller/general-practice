import unittest
import reverser

class TestReverseWords(unittest.TestCase):
    def test_basic_reverse_words(self):
        r = reverser.Reverser()
        self.assertEquals(
            r.reverse_words(
                'if into the security recordings you go only pain will you find'
            ),
            'find you will pain only go you recordings security the into if'
        )

if __name__ == '__main__':
    unittest.main()
