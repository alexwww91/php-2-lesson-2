<?php
require_once "digitalGood.php";
require_once "simpleGood.php";
require_once "weightGood.php";

$goodOne = new SimpleGood(1000, 2);
$goodTwo = new DigitalGood($goodOne->calcTotalPrice(), 1);
$goodThree = new WeightGood(200, 3, 3);

$goodOnePrice = $goodOne->calcTotalPrice();
$goodTwoPrice = $goodTwo->calcTotalPrice();
$goodThreePrice = $goodThree->calcTotalPrice();

$goodOnePrice = $goodOne->calcTotalPrice();
$goodTwoPrice = $goodTwo->calcTotalPrice();
$goodThreePrice = $goodThree->calcTotalPrice();

$goodOneSum = $goodOne->calcTotalSum($goodOnePrice);
$goodTwoSum = $goodTwo->calcTotalSum($goodTwoPrice);
$goodThreeSum = $goodThree->calcTotalSum($goodThreePrice);

$total = Good::calcTotal($goodOneSum, $goodTwoSum, $goodThreeSum);
echo $total;
