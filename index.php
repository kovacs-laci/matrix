<?php
require_once "Html.php";
require_once "Matrix.php";

Html::head();
Html::body();
$matrix = new Matrix();
$n = 10;

$simpleArray = $matrix->getSimpleArr($n, $n);
Html::table($n, $simpleArray);
echo "A táblázatban szereplő számok összege: <br>";
echo "A táblázatban szereplő, hárommal osztható számok összege: <br>";
echo "<br>";


Html::footer();

