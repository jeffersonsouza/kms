<?php
function totalAmountWithVat (float $price, float $vat) {
    $gesamtVat = $price / $vat;
    return $gesamtVat + $price;
}

$products = [
    ['name' => 'Cheese', 'price' => 2.49, 'vat' => 7],
    ['name' => 'Banana', 'price' => 1.49, 'vat' => 7],
    ['name' => 'Bier', 'price' => 1000.39, 'vat' => 19],
];

$totalAmount = 0;

foreach($products as $product) {
    $totalAmount += totalAmountWithVat($product['price'], $product['vat']);
}
$totalAmount = number_format($totalAmount, 2, ',', '');

echo "The total amount of your shop list is {$totalAmount}EUR.";



