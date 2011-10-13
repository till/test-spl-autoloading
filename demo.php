#!/usr/bin/env php
<?php
/**
 * Loads classname-filename-convention.
 */
function test1($class) {
    echo ">> test1 called" . PHP_EOL;
    require str_replace('_', '/', $class) . '.php';
}
/**
 * Loads some vendor specific stuff.
 */
function test2($class) {
    echo ">> test2 called" . PHP_EOL;
    require __DIR__ . '/vendor.php';
}

/**
 * @desc register both in a chain
 */
spl_autoload_register('test1');
spl_autoload_register('test2');

$foobar = new Foobar();
echo "Foobar loaded." . PHP_EOL . PHP_EOL;

/**
 * @desc This class is never loaded.
 */
$vendor = new CrazyConventionAllClassesInOneFile();
echo "Vendor loaded." . PHP_EOL;
