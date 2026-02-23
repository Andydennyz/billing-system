<?php

header("Content-Security-Policy: default-src 'self'; script-src 'self' http://127.0.0.1:5174; style-src 'self' http://127.0.0.1:5174; img-src 'self' data:; connect-src 'self' http://127.0.0.1:5174");
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
