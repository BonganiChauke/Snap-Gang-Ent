<?php

// app/core/config.php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host     = $_SERVER['SERVER_NAME'];

if ($host === 'localhost') {
    define('ROOT',     'http://localhost/Snap_Gang_Ent/public');
    define('BASE_URL', 'http://localhost/Snap_Gang_Ent/public/assets/');
} else {
    define('ROOT',     $protocol . '://www.mywebsite.com/public');
    define('BASE_URL', $protocol . '://www.mywebsite.com/public/assets/');
}

define('INCLUDES', __DIR__ . '/../pages/includes/');

?>