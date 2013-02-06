<?php
/**
 * A hash table for storing Strings implemented using arrays
 * Uses arrays and seperate chaining for collisions (but with arrays instead 
 * of linked lists)
 */
class HashStringTable {

    private $data;
    private $capacity;
    private $size;

    /**
     *
     */
    function __construct( $capacity ) {
        $this->data = array();
        // Make the whole hash table NULL-ed so we easily check for collisions
        for( $i = 0; $i <= $capacity; ++$i ) {
            $this->data[$i] = NULL;
        }
    }

    /**
     *
     */
    public function put( $value ) {
        if( NULL !== $value ) {
            $hashed = $this->hash_me( $value );
            if( NULL === $this->data[$hashed] ) {
                // There was no collision
                $this->data[$hashed] = array( $value );
            } else {
                // Collision occured, append the value to the array of values
                // with this hash (so called 'seperate chaining' but with 
                // an array instead of linked list
                $this->data[$hashed][] = $value;
            }
            ++$this->size;
        }
    }

    /**
     * Get the key associated with a value and the number of comparisms
     * @param String $value
     * @returns Integer key
     */
    public function get( $value ) {
        $count = 1;
        $hashed = $this->hash_me( $value ); 
        // O(1) search because this value never collided with anything
        if( count( $this->data[$hashed] ) > 1 ) {
            // O(1+k/capacity) search (where k is the size of bucket)
            foreach( $this->data[$hashed] as $index => $element ) {
                if( $value !== $element ) {
                    ++$count;
                }
            }
        }
        // Deliberately using an array here instead of the obvious choice
        // that would PHP's 'hash table with extra functionality'
        return array( 
            0 => $hashed,
            1 => $count 
        );
    }

    /**
     * @param String $value
     * @returns Integer zero on success, non-zero on failure
     */
    public function delete( $value ) {
        $hashed = $this->hash_me( $value ); 
        // O(1) deletion
        if( count( $this->data[$hashed] ) > 1 ) {
            // O(1+k/capacity) deletion where k is the size of bucket)
            foreach( $this->data[$hashed] as $index => $element ) {
                unset( $this->data[$hashed][$index] );
                $this->data[$hashed] = array_values( $this->data[$hashed] );
            }
        } else {
            $this->data[$hashed] = NULL;
        }
    }

    /**
     * The hash function
     * Simple hash: Just adds up ASCII values of all the characters
     * in the String and takes the modulus with the length of the String
     * @param String $value 
     * @returns Integer result of applying hash to $value.  Returns -1
     * on error
     */
    public function hash_me( $value ) {
        $hashed = 0; 
        if( NULL === $value ) {
            $hashed = -1;
        } else {
            // Split value into array of characters
            $chars = str_split( $value );
            // Sum up the ASCII values in the String
            foreach( $chars as $char ) {
                $hashed += ord( $char ); 
            }
        }
        return $hashed % strlen( $value );
    }

    public function print_table() {
        print_r( $this->data );
    }
}
?>
