<?php 
include 'Cat.php';

$cat = new Cat("Mèo mướp", 2, 'Đực');
$cat1 = new Cat("Mèo tam thể", 2, 'Cái');


echo '<pre>';
// $cat->name;
// $cat->gender;
$cat->runing();
$cat->eating();
$cat1->runing();
$cat1->eating();