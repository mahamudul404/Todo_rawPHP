<?php 

$age = 15;

$message = ($age <= 13 ) ? 'you are child' : (($age <= 18) ? 'you are teen' : 'you are adult');

echo $message."\n";



$check = ($age <= 18 ) ? 'you are child' : 'you are adult';

echo $check;