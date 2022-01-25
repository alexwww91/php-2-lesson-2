<?php
require_once "good.php";

class SimpleGood extends Good
{
    public function __construct($price, $count)
    {
        parent::__construct($price, $count);
    }
}
