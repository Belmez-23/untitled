<?php
// Use composer autoloader
require '/home/a1/vendor/autoload.php';

// Setup Whoops error and exception handlers
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

throw new \Exception('This is an exception!');
