<?php
/*
    Iterables are things we can loop through using foreach, like arrays or objects.
    This example shows how to loop through a Numbers class that stores numbers.
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
