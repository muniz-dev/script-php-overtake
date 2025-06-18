<?php

$chicoHeight = 1.5;
$chicoGrowth = 0.02;

$jucaHeight = 1.1; 
$jucaGrowth = 0.03; 

$years = 0; 

while ($jucaHeight <= $chicoHeight) {
    $chicoHeight += $chicoGrowth;
    $jucaHeight += $jucaGrowth;
    $years++;
}

echo "After $years years, Juca will be taller than chico.\n";
echo "Chico's height: " . number_format($chicoHeight, 2) . " meters\n";
echo "Juca's height: " . number_format($jucaHeight, 2) . " meters\n";