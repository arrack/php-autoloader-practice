<?php
// 失效了
function __autoload($classname) {
    echo '__autoload(' . $classname . ')' . PHP_EOL;

    $filename = __DIR__ . "/models/". $classname . ".php";
    include_once($filename);
}

function hello_autoload($classname) {
    echo 'hello_autoload(' . $classname . ')' . PHP_EOL;

    $filename = __DIR__ . "/models/". str_replace('\\', DIRECTORY_SEPARATOR, $classname) . ".php";
    if (file_exists($filename)) {
        include_once($filename);
    }
}

function libs_autoload($classname) {
    echo 'libs_autoload(' . $classname . ')' . PHP_EOL;

    $filename = __DIR__ . "/libs/". $classname . ".php";
    if (file_exists($filename)) {
        include_once($filename);
    }
}

spl_autoload_register("hello_autoload");
spl_autoload_register("libs_autoload");

$hello = new Hello\Hello1;
echo $hello->world() . PHP_EOL;

$hello = new Hello\Hello2;
echo $hello->world() . PHP_EOL;

echo MoneyLib::calc(100, 200) . PHP_EOL;
echo MoneyLib::calc(300, 400) . PHP_EOL;



