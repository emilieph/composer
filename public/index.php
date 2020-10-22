<?php
//index.php
require_once __DIR__ . '/../vendor/autoload.php';

USE App\Wcs\Hello;
$hello = new Hello();

echo $hello->talk();

USE HelloWorld\SayHello;
$SayHello = new SayHello();

echo $SayHello-> world();

