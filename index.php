<?php
require_once('./vendor/autoload.php');

use App\Hello;

$helloClass = new Hello('Smith');

echo $helloClass->hello('Bob');
