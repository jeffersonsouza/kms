<?php

function totalAmountWithVat (int $price, int $vat) {
    $gesamtVat = $price / $vat;
    return $gesamtVat + $price;
}