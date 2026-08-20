<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    /**
     * Handle the incoming request
     *
     * @param \Closure $next
     * @return mixed
     */
    public function handle(\Closure $next)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            @session_start();
        }

        if (!empty($_SESSION['student_access']) && $_SESSION['student_access'] === true) {
            return $next();
        }

        if (function_exists('redirect')) {
            redirect('student');
            return;
        }

        $loc = defined('BASE_URL') ? rtrim(BASE_URL, '/') . '/student' : '/student';
        header('Location: ' . $loc);
        exit;
    }
}
