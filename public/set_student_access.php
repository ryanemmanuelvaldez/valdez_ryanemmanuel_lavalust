<?php
// Temporary helper to enable student access for testing
session_start();
$_SESSION['student_access'] = true;
header('Location: ' . (isset($_SERVER['HTTP_HOST']) ? ('http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']) . '/student/profile') : '/student/profile'));
exit;
