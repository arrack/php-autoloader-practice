<?php
// include, include_once, require, require_once
require(__DIR__ . '/models/Hello.php');

$hello = new Hello;
echo $hello->world() . PHP_EOL;
