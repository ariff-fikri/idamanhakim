<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

/**
 * Vercel serverless entrypoint.
 *
 * Vercel's filesystem is read-only except for /tmp. Before the framework boots
 * we create writable directories under /tmp and redirect every path Laravel
 * needs to write to (storage + the bootstrap cache files) into them.
 */
$storagePath = '/tmp/storage';
$cachePath = '/tmp/bootstrap/cache';

$directories = [
    $cachePath,
    $storagePath.'/app/public',
    $storagePath.'/framework/cache/data',
    $storagePath.'/framework/sessions',
    $storagePath.'/framework/testing',
    $storagePath.'/framework/views',
    $storagePath.'/logs',
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        @mkdir($directory, 0755, true);
    }
}

$env = [
    'LARAVEL_STORAGE_PATH' => $storagePath,
    'APP_CONFIG_CACHE' => $cachePath.'/config.php',
    'APP_EVENTS_CACHE' => $cachePath.'/events.php',
    'APP_PACKAGES_CACHE' => $cachePath.'/packages.php',
    'APP_ROUTES_CACHE' => $cachePath.'/routes-v7.php',
    'APP_SERVICES_CACHE' => $cachePath.'/services.php',
];

foreach ($env as $key => $value) {
    putenv("{$key}={$value}");
    $_ENV[$key] = $_SERVER[$key] = $value;
}

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
