<?php
// Given the arrays bellow, find which items are present in both data sets

$firstSet = [
    ['id' => 2, 'firstname' => 'Winni', 'lastname' => 'Warr'],
    ['id' => 1, 'firstname' => 'Rora', 'lastname' => 'Humbey'],
    ['id' => 10, 'firstname' => 'Filberto', 'lastname' => 'MacUchadair'],
    ['id' => 4, 'firstname' => 'Brittni', 'lastname' => 'Risom'],
    ['id' => 8, 'firstname' => 'Vassili', 'lastname' => 'Piell'],
    ['id' => 6, 'firstname' => 'Gris', 'lastname' => 'Chown'],
    ['id' => 3, 'firstname' => 'Jarib', 'lastname' => 'Bratley'],
    ['id' => 7, 'firstname' => 'Elysia', 'lastname' => 'Senior'],
    ['id' => 9, 'firstname' => 'Bendick', 'lastname' => 'Cawt'],
    ['id' => 5, 'firstname' => 'Beaufort', 'lastname' => 'Ansley'],
];

$secondSet = [
    ['id' => 11, 'firstname' => 'Hakeem', 'lastname' => 'Shakelade'],
    ['id' => 6, 'firstname' => 'Gris', 'lastname' => 'Chown'],
    ['id' => 12, 'firstname' => 'Sandie', 'lastname' => 'Winstanley'],
    ['id' => 13, 'firstname' => 'Carl', 'lastname' => 'Vinden'],
    ['id' => 5, 'firstname' => 'Beaufort', 'lastname' => 'Ansley'],
    ['id' => 14, 'firstname' => 'Adham', 'lastname' => 'Stanesby'],
    ['id' => 7, 'firstname' => 'Elysia', 'lastname' => 'Senior'],
    ['id' => 15, 'firstname' => 'Evangeline', 'lastname' => 'Jervois'],
    ['id' => 16, 'firstname' => 'Lanny', 'lastname' => 'Bramo'],
    ['id' => 1, 'firstname' => 'Rora', 'lastname' => 'Humbey'],
];

function findDuplicates(array $originalData, array $dataToCompare): array 
{
    $duplicates = [];
    foreach($originalData as $originalItem) {
        foreach($dataToCompare as $itemToCompare) {
            if($originalItem === $itemToCompare) {
                $duplicates[] = $originalItem;
            }
        }
    }

    return $duplicates;
}

var_dump(findDuplicates($firstSet, $secondSet));
