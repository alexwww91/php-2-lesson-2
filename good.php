<?php

abstract class Good
{
    private $price; //цена товара
    private $count; //количество товара

    public function __construct($price, $count)
    {
        $this->price = $price;
        $this->count = $count;
    }

    function calcTotalPrice()
    {
        return $this->price;
    }

    function calcTotalSum($calcTotalPrice)
    {
        return $calcTotalPrice * $this->count;
    }

    static function calcTotal(...$sums)
    {
        $totalSum = 0;
        foreach ($sums as $sum) {
            $totalSum += $sum;
        }

        return $totalSum;
    }
}
