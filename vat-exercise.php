<?php
function totalAmountWithVat (int $price, int $vat) {
    $gesamtVat = $price / $vat;
    return $gesamtVat + $price;
}

$price = (int) readline ('How much is the price for the product?');
$vat = (int) readline ('How much is the VAT?');

echo totalAmountWithVat ($price, $vat);