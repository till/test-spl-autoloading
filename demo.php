#!/usr/bin/env php
<?php
/**
 * @desc Zend Framework without require_once
 */
$zfPath = '/Users/till/Documents/workspaces/imagineeasy_v5/trunk/library';

function test1($class) {
    echo "test1 called" . PHP_EOL;
    include $GLOBALS['zfPath'] . '/' . str_replace('_', '/', $class) . '.php';
}
function test2($class) {
    echo "test2 called" . PHP_EOL;
}

spl_autoload_register('test1');
spl_autoload_register('test2');

$v = new Zend_Version();

