import unittest
import inverter

class TestInverter(unittest.TestCase):
    def test_basic(self):
        r = inverter.Inverter()
        self.assertEquals('olleh dlrow', r.invert_letters('hello world'))

    def test_single_letters(self):
        r = inverter.Inverter()
        self.assertEquals('a b c', r.invert_letters('a b c'))

    def test_single_word(self):
        r = inverter.Inverter()
        self.assertEquals('oof', r.invert_letters('foo'))

if __name__ == '__main__':
    unittest.main()