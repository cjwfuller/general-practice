#include <stdlib.h>
#include <stdio.h>
#include "my_ll.h"

int main(int argc, char *argv[]) {
    printf("\nCreating a linked list with 10 nodes\n\n");
    node *new_node, *head;
    // the head points nowhere
    head = NULL;    
    for(int i = 0; i < 10; i++) {
        new_node = (node *)malloc(sizeof(node));
        // give the node a datum (the loop index)
        new_node->datum = i;
        // point the new node to the head node 
        new_node->next = head;
        // make the head of the linked list be the new node
        head = new_node;
        printf("Adding a new node with datum %d\n", new_node->datum);
    }
    // print the whole linked list
    // use the same pointer but point it to the head of the structure
    new_node = head;
    print(new_node);
    // delete the middle element
    // TODO(chris) move pointer back to head again?
    //delete_middle(new_node);
}
