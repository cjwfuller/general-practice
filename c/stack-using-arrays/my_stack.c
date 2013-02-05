#include "my_stack.h"

void init( my_stack *stack, int max_size ) {
    my_stack_element *contents;
    /* allocate memory for a stack using a maximum size and data type of elements
     * that stack will store */
    contents = (my_stack_element *)malloc( sizeof( my_stack_element ) * max_size );
    if( NULL == contents ) {
       fprintf( stderr, "Insufficient memory to initialise stack\n" ); 
       exit( EXIT_FAILURE );
    }
    stack->contents = contents;
    stack->max_size = max_size;
    stack->top = -1; /* i.e. empty */
}

void destroy( my_stack *stack ) {
    free( stack->contents );
    stack->max_size = 0;
    stack->top = -1; /* empty */
}

void push( my_stack *stack, my_stack_element element ) {
    if( full( stack ) ) {
        fprintf( stderr, "Cannot push element, stack is full\n" );    
        exit( EXIT_FAILURE );
    }
    stack->contents[++stack->top] = element;
}

my_stack_element pop( my_stack *stack ) {
    if( empty( stack ) ) {
        fprintf( stderr, "Cannot pop, stack is empty\n" );
        exit( EXIT_FAILURE );
    }
    return stack->contents[stack->top--];
}

int empty( my_stack *stack ) {
    return stack->top < 0;
}

int full( my_stack *stack ) {
    return stack->top >= stack->max_size - 1;
}
