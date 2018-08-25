<?php
// getSecondLargest
function getSecondLargest($array, $arrSize)
{
    if ($arrSize < 2)
    {
        echo(" Salah Data ");
        return;
    }

    $first = $second = PHP_INT_MIN;
    for ($i = 0; $i < $arrSize ; $i++)
    {
        if ($array[$i] > $first)
        {
            $second = $first;
            $first = $array[$i];
        }

        else if ($array[$i] > $second &&
                 $array[$i] != $first)
            $second = $array[$i];
    }
    if ($second == PHP_INT_MIN)
        echo("Tidak terdapat element array kedua terbesar");
    else
        echo("Element array terbesar kedua adalah " . $second);
}

$array = array(12, 35, 1, 10, 34, 1);
$size = sizeof($array);
getSecondLargest($array, $size);
?>

