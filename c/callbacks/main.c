/**
 * Callbacks in C
 *
 * Playing with solution on stackoverflow.com/questions/142789/
 */

#include <stdlib.h>
#include <stdio.h>

static void populateArray( int * myArray, size_t arraySize, int (*getNextValue)(void) ) {
    size_t i;
    for ( i = 0; i < arraySize; i++ ) {
        myArray[i] = getNextValue();
        printf( "%d\n", myArray[i] );
    }
}

static int getNextRandomValue() {
    return rand();
}

int main() {
    int myArray[10];
    populateArray( myArray, 10, getNextRandomValue );
    return 0;
}
