<?php
$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$deal1_cost = $price1 / $quantity1 ;
$deal2_cost = $price2 / $quantity2;

if ($deal1_cost < $deal2_cost) {
    echo "Deal 1 is the best option. Unit price: $" . $deal1_cost;
} elseif ($deal2_cost < $deal1_cost) {
    echo "Deal 2 is the best option. Unit price: $" . $deal2_cost;
} else {
    echo "Both deals have the same cost. Unit price: $" . $deal1_cost;
}
?>