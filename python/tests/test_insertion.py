#!/usr/bin/python

import unittest
import sorting.insertion

class SortingTests( unittest.TestCase ):
    """Sorting unit tests"""
    
    def test_trivially_sorted( self ):
        """A list with a single element should be trivially sorted"""
        trivial = [1]
        trivial_sorted = sorting.insertion.insertion_sort( trivial, 1 )  

if __name__ == '__main__':
    unittest.main()
