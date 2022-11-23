<?php 
include 'ICaculator.php';
include 'Addition.php';
include 'Subtraction.php';


$add = new Addition;
$sub = new Subtraction;

$add->setNumber(15,35);
$sub->setNumber(15,35);

echo $add->excecute();
echo $sub->excecute();