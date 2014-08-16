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
