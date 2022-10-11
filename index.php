<?php
$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$result = array_map(function (int $num) {
    if ($num % 2 == 0) {
        echo "четное\n";
    } else {
        echo "нечетное\n";
    }
}, $numbers);

function getMaxMinAvgFromArray(array $array): array
{
    $result[] = (int) max($array);
    $result[] = (int) min($array);
    $result[] = (float) array_sum($array) / count($array);

    return $result;
};