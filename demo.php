#!/usr/bin/env php
<?php
/**
 * @desc Zend Framework without require_once
 */
$zfPath = '/Users/till/Documents/workspaces/imagineeasy_v5/trunk/library';

/**
 * Loads classname-filename-convention.
 */
function test1($class) {
    require str_replace('_', '/', $class) . '.php';
}
/**
 * Loads some vendor specific stuff.
 */
function test2($class) {
    require __DIR__ . '/vendor.php';
}

spl_autoload_register('test1');
spl_autoload_register('test2');

$foobar = new Foobar();
echo "Foobar loaded." . PHP_EOL;

/**
 * @desc This class is never loaded.
 */
$vendor = new CrazyConventionAllClassesInOneFile();
echo "Vendor loaded." . PHP_EOL;
