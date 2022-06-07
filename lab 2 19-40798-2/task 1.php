<?php

function areaRectangle( $a, $b)
{
	$area = $a * $b;
	return $area;
}

function perimeterRectangle( $a, $b)
{
	$perimeter = 2 * ($a + $b);
	return $perimeter;
}

// Driver program
$a = 5;
$b = 6;
echo("Area = " );
echo(areaRectangle($a, $b));
echo("\n");
echo( "Perimeter = ");
echo(perimeterRectangle($a, $b));


?>
