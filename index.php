<?php

if (isset($_GET['errors'])) {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

include './vendor/autoload.php';

define('FIREWALLED', true);
define('FIREWALL_ROOT', __DIR__ . '/firewall/');
include FIREWALL_ROOT . 'app/index.php';
