<?php
$totalAmount = 1400;

if ($totalAmount > 1000) {
    $discount = 100;
    $finalAmount = $totalAmount - $discount;
    echo "Congratulations! You qualify for a discount of Rs. " . $discount . ". Your final amount is Rs. " . $finalAmount . ".";
} else {
    echo "Sorry, your order total does not qualify for the discount.";
}
?>
