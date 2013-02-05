#!/usr/bin/python

# Find prime numbers up to a given integer
# Uses the sieve of Eratosthenes algorithm

import math

# Actual sieve of Eratosthenes algorithm
def sieve( start, end ):
    if start < 2:
        start = 2
    # Dictionary indexed by 2, 3, ..., num_tests + 1
    # with all values set to True
    numbers = {}
    for i in range( start, end + 1 ):
        numbers[i] = True
    # do the sieve
    for i in range( start, int( math.sqrt( end ) ) ):
        if numbers[i] == True:
            # list of form i^2, i^2+i, i^2+2i, ..., n
            seq = range( i**2, end + 1, i ) 
            for j in seq:
                numbers[j] = False 
    print numbers
    return numbers

num_tests = input()
tests = []
for i in range( 0, num_tests ):
    test = raw_input().split( ' ' )
    start = int( test[0] )
    end = int( test[1] )
    numbers = sieve( start, end )
