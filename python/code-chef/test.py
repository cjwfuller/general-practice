#!/usr/bin/python

from collections import deque

# Your program is to use the brute-force approach in order to find the Answer to 
# Life, the Universe, and Everything. More precisely... rewrite small numbers from 
# input to output. Stop processing input after reading in the number 42. All 
# numbers at input are integers of one or two digits.

queue = [];
while True:
    number = input()
    if number == 42:
        break 
    else:
        queue.append( number )
for s in queue:
    print s
