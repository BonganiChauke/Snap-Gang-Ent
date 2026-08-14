<?php
// app/core/config.php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host     = $_SERVER['HTTP_HOST'];

// Directory of public/index.php, e.g. /Snap_Gang_Ent/public
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$basePath = rtrim($basePath, '/');

define('ROOT',     $protocol . '://' . $host . $basePath);
define('BASE_URL', $protocol . '://' . $host . $basePath . '/assets/');

define('INCLUDES', __DIR__ . '/../pages/includes/');

?>