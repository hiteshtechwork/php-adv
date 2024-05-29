<?php

class Test
{
    public function __construct($name)
    {
        echo "Hello All, I am " . $name;
    }
}

$obj1 = new Test("hitesh");