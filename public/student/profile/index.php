<?php
// Proxy front controller for servers without mod_rewrite.
// Allows accessing /student/profile by visiting /LavaLust/public/student/profile.
$_SERVER['REQUEST_URI'] = '/student/profile';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php/student/profile';
require __DIR__ . '/../../index.php';
