<?php
require_once "good.php";

class DigitalGood extends Good
{
    public function __construct($price, $count)
    {
        parent::__construct($price, $count);
    }

    function calcTotalPrice()
    {
        return parent::calcTotalPrice() / 2;
    }
}
