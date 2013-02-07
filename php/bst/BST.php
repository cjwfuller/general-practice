<?php
class Node {

    public $data;
    public $left;
    public $right;

    function __construct( $data ) {
        $this->left = NULL;
        $this->right = NULL;
        $this->data = $data;
    }

    function __toString() {
        return "$this->data";
    }
}

class BST {

    private $root;

    function __construct() {
        $this->root = NULL;
    }

    /**
     * Iteratively insert data into the right place in the tree
     * @param Node $node
     * @param Integer $data
     */
    public function insert( $data ) {
        if( NULL === $this->root ) {
            $this->root = new Node( $data );
        } else {
            $current = $this->root;
            // While we have not found the correct place to insert the node
            while( true ) {
                // Data to insert is <= current node
                if( $data <= $current->data ) {
                    // Is there a node to the left
                    if( $current->left ) {
                        // There is so move left
                        $current = $current->left;    
                    } else {
                        // No node to the left so put the new node here
                        $current->left = new Node( $data );
                        break;
                    }
                } else if( $data > $current->data ) {
                    // Similar to the above but for the right branch
                    if( $current->right ) {
                        $current = $current->right;    
                    } else {
                        $current->right = new Node( $data );
                        break;
                    }
                } else {
                    break;
                }
            }
        } 
    }

    public function search( $node ) {

    }

    public function delete( $node ) {

    }

    /**
     * Inorder traversal, printing Nodes as they traversed
     * Uses recursive helper
     */
    public function inorder() {
        $this->inorder_helper( $this->root ); 
    }

    /**
     * Inorder traveral (left, root, right)
     * @param Node $node
     */
    private function inorder_helper( $node ) {
        if( NULL === $node ) {
            return;
        }
        $this->inorder_helper( $node->left );
        print $node->data . "\n";
        $this->inorder_helper( $node->right );
    }
}
?>
