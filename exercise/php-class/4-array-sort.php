<?php

class array_sort
{
    protected $_asort;

    public function __construct(array $asort)
    {
        $this->_asort = $asort;
    }

    public function alhsort()
    {
        $sorted = $this->_asort;

        sort($sorted);
        return $sorted;
    }

}

$sortArray = new array_sort(array(11, -2, 3, 34, 0, 4, 0));

print_r($sortArray->alhsort());