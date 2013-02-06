#include <stdio.h>
#include <string.h>
#include "main.h"

int main( int argc, char *argv[] ) {
    const int buff_size = 100;
    my_stack stack;
    char str[buff_size]; /* array to store user input */
    char *ptr; /* pointer to string input */

    printf( "Enter a string:\n" );
    fgets( str, buff_size, stdin );
    init( &stack, strlen( str ) );
    
    /* put each character that the user inputted onto the stack */
    for( ptr = str; *ptr != '\0'; ptr++ ) {
        push( &stack, *ptr );
    }

    /* begin popping each character off the stack */
    fprintf( stdout, "Popped characters are:" );
    while( !empty( &stack ) ) {
        printf( "%c", pop( &stack ) );
    }
    printf( "\n" );

    destroy( &stack );
    return 0;
}
