<?php
require_once "good.php";

class WeightGood extends Good
{
    private $wight;
    public function __construct($price, $count, $wight)
    {
        parent::__construct($price, $count);
        $this->wight = $wight;
    }

    function calcTotalPrice()
    {
        return parent::calcTotalPrice() * $this->wight;
    }
}
