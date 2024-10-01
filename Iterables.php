<?php
/*
    I learned that iterables are like lists of things that we can go through one by one. 
    It’s like having a list of numbers, and we look at them one by one in order.

    In this example, we have a Numbers class that holds a list of numbers: 10, 20, and 30.
    The class helps us to move through this list of numbers using something called an iterator.
    The iterator lets us start from the first number, and we can keep moving to the next one 
    until we’ve gone through the whole list.

    When we use the foreach loop, it goes through each number in the list, 
    and we can print each one. It’s like saying, "Let me see the first number, 
    now the second, and then the third," and so on.
*/

class Numbers implements Iterator {
    private $numbers = [10, 20, 30];
    private $position = 0;

    public function current() {
        return $this->numbers[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        $this->position++;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function valid() {
        return isset($this->numbers[$this->position]);
    }
}

$nums = new Numbers();
foreach ($nums as $num) {
    echo $num . "\n";  // Output: 10 20 30
}
?>
