#!/bin/python

import random

def insertion_sort( items, list_size ):
    """ Insertion sort
        
        An implementation of merge sort using The 'Algorithm Design Manual' 
        book by Steven S. Skiena (author's implementation is in a pseudo C
        language) 
        
        Args:
           items: A list of inetegers to be sorted
           list_size: Number of elements in list to be sorted

        Returns:
            A sorted list of integers between 0 and 9
    """
    for i in range( len( items ) ):
        j = i
        while j > 0 and items[j] < items[j - 1]:
            # values need swapping
            # use temporary variable to swap the values 
            tmp = items[j]
            items[j] = items[j - 1]
            items[j - 1] = tmp 
            j = j - 1
    return items

# Generate a list of random numbers
#list_size = 10 
#random_items = [int( 100 * random.random() ) for i in xrange( list_size )]

#print "Random, probably unsorted list:"
#print random_items

#print "Sorted list:"
#sorted_items = insertion_sort( random_items, list_size )
#print sorted_items
