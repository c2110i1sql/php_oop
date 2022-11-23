<?php 
include 'Author.php';
include 'Question.php';

$auth = new Author(2, 'Minh Đại Ca','0986421127','abc@gmail.com', 'Minh đẹp phố huế');

$q = new Question(1, "Học PHP khó hay dễ", $auth);

echo '<pre>';
print_r($q);