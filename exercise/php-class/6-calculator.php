<?php

class Calculator
{

    protected $arg1;
    protected $arg2;
    protected $result;

    public function __construct($arg1, $arg2)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;

    }

    public function add()
    {
        $result = $this->arg1 + $this->arg2;

        echo $result;
    }

    public function substract()
    {
        $result = $this->arg1 - $this->arg2;
        echo $result;
    }
    public function multiply()
    {
        $result = $this->arg1 * $this->arg2;
        echo $result;
    }
    public function divide()
    {
        $result = $this->arg1 / $this->arg2;
        echo $result;
    }

}

$obj = new Calculator(10, 4);
$obj->add();
echo "<br>";
$obj->substract();
echo "<br>";
$obj->multiply();
echo "<br>";
$obj->divide();