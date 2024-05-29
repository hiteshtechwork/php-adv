<?php

class Factorial
{

    protected $_n;

    public function __construct($n)
    {
        if (!is_int($n)) {
            throw new InvalidArgumentException('Not a number or missing arguments');
        }
        $this->_n = $n;
    }

    // Define a method named result to calculate the factorial of the number
    public function result()
    {
        // Initialize the factorial variable to 1
        $factorial = 1;
        // Iterate from 1 to the value of $_n
        for ($i = 1; $i <= $this->_n; $i++) {
            // Multiply the factorial by the current value of $i
            $factorial *= $i;
        }
        // Return the calculated factorial
        return $factorial;
    }
}

$obj1 = new Factorial(5);
$obj1->result();