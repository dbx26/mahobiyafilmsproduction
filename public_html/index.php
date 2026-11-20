<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));
ini_set('memory_limit', '512M');
set_time_limit(0);

// Path to Laravel core
$corePath = __DIR__ . '/../core';

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = $corePath . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require $corePath . '/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once $corePath . '/bootstrap/app.php';

// Ensure public path is bound to this public_html directory
$app->usePublicPath(__DIR__);

$app->handleRequest(Request::capture());
