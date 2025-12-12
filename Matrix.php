<?php

class Matrix
{
    function getSimpleArr($n, $m): array
    {
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $result[$i][$j] = $i * 10 + $j;
            }
        }

        return $result;
    }

    function getRandomArr($n, $m): array
    {
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $result[$i][$j] = rand(0, $n * $m - 1);
            }
        }

        return $result;
    }

    function getUniqueRandomArr($n, $m): array
    {
        $result = [];
        $takenNumbers = [];
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                $number = rand(0, $n * $m - 1);
                while (isset($takenNumbers[$number])) {
                    $number = rand(0, $n * $m - 1);
                }
                $takenNumbers[$number] = 1;
                $result[$i][$j] = $number;
            }
        }

        return $result;
    }

}
