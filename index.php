<?php

// Basic calculator class
class Calculator
{
    private $result;

    // Set initially $result = 0
    public function __construct()
    {
        $this->result = 0;
    }

    // Add method for sum
    public function add($num)
    {
        $this->result += $num;
    }

    // subtract method for minus
    public function subtract($num)
    {
        $this->result -= $num;
    }

    // multiply method for multiplication
    public function multiply($num)
    {
        $this->result *= $num;
    }

    // divide method for division
    public function divide($num)
    {
        if ($num != 0) {
            $this->result /= $num;
        } else {
            throw new Exception("Cannot divide by zero.");
        }
    }

    // getResult method - returns result
    public function getResult()
    {
        return $this->result;
    }
}

// Usage example:
$calculator = new Calculator();
$calculator->add(5);
$calculator->subtract(3);
$calculator->multiply(2);
$calculator->divide(4);
echo "Result: " . $calculator->getResult();
