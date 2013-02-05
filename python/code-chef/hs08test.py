#!/usr/bin/python

transaction = input().split(' ')
withdrawal = int( transaction[0] )
init_balance = float( transaction[1] )
new_balance = init_balance - withdrawal - 0.50

if ( withdrawal % 5 ) != 0:
    print( "%.2f" % init_balance )
elif ( new_balance < 0 ):
    print( "%.2f" % init_balance )
else:
    print( "%.2f" % new_balance )
