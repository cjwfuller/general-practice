#ifndef _MY_LL_H
#define _MY_LL_H

#include <stdio.h>

// A linked list consists of a datum and reference 
// See http://en.wikipedia.org/wiki/Linked_list for cool a diagram
struct ll {
    int datum; 
    struct ll *next;
};

// conveniently refer to a linked list node
typedef struct ll node;

// delete the middle node
node *delete_middle();
// print a linked list's datums
void print(node *curr);
// return the number of nodes in a a linked list
int size(node *curr);

#endif
