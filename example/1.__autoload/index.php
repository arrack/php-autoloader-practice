<?php
function __autoload($classname) {
    echo '__autoload(' . $classname . ')' . PHP_EOL;

    $filename = __DIR__ . "/models/". $classname . ".php";
    include_once($filename);
}

$hello = new Hello;
echo $hello->world() . PHP_EOL;

// 已載入的 Class 不會再次進入 __autoload()
$hello = new Hello;
echo $hello->world() . PHP_EOL;
