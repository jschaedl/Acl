<?php

/**
 * Setup autoloading for all library classes
 */
function autoloadLibrary($class) {
    $aclRoot = realpath(dirname(__DIR__));
    $aclLibrary = "$aclRoot/library";
    $class = $aclLibrary . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($class)) {
        require_once ($class);
    }
}
spl_autoload_register('autoloadLibrary');
