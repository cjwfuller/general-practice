/**
 * Stack implementation using arrays
 *
 * References: http://www.cs.bu.edu/teaching/c/stack/array/,
 * http://www.stanford.edu/class/cs97si/03-data-structures.pdf 
 *
 * Author: Chris Fuller <chris@cjwfuller.com>
 */

#ifndef _STACK_H
#define _STACK_H

#include <stdlib.h>
#include <stdio.h>

/* change to desired stack data type */
typedef char my_stack_element;

/* stack type */
typedef struct {
    my_stack_element *contents;
    int top;
    int max_size;
} my_stack;   

/* Push an element to the top of a stack
 * Usage: push( &stack, element );
 */
void push( my_stack *stack, my_stack_element element );

/* Pop an element off the top of a stack
 * Usage: element = pop( &stack );
 */
my_stack_element pop( my_stack *stack );

/*
 * Returns a value if stack is empty
 */
int empty( my_stack *stack );

/*
 * Returns a value if stack is full
 */
int full( my_stack *stack );

/* Initialise a new stack with a maximum size
 * Usage: init( &stack, max_size );
 */
void init( my_stack *stack, int max_size );

/* Frees all memory associated with a stack
 * Usage: destroy( &stack );
 */
void destroy( my_stack *stack );

#endif
