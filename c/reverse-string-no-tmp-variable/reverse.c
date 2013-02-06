#include <stdlib.h>
#include <stdio.h>
#include <string.h>

// Program to reverse a string using the "XOR trick"
// Not an intuitive way of solving this problem but it uses no temp variable
// See https://github.com/cjwfuller/practicing-php for an easier approach
// but with a temp variable
int main() {
    // Input string
    char str[] = "test";
    printf( "Input string: %s\n", str );
    // End of string
    int end = strlen(str) - 1;
    // Start of string
    int start = 0;
    while(start < end) {
        // The "XOR trick"
        str[start] ^= str[end];
        str[end] ^= str[start];
        str[start]^= str[end];
        ++start;
        --end;
    }
    printf( "Reversed string: %s\n", str );
    return 0;
}
