<?php
require_once('vendor/autoload.php');

$hello = new Hello\Hello1;
echo $hello->world() . PHP_EOL;

$hello = new Hello\Hello2;
echo $hello->world() . PHP_EOL;

echo MoneyLib::calc(100, 200) . PHP_EOL;
echo MoneyLib::calc(300, 400) . PHP_EOL;



