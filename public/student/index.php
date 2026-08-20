<?php
// Proxy front controller for servers without mod_rewrite.
// Allows accessing /student by visiting /LavaLust/public/student.
$_SERVER['REQUEST_URI'] = '/student';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php/student';
require __DIR__ . '/../index.php';
