<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Home | Student Information</title>
    <link rel="stylesheet" href="<?= base_url('assets/student.css'); ?>">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="<?= site_url('student'); ?>">
                Student Information
                <span>Student portal</span>
            </a>
            <nav class="primary-nav" aria-label="Primary navigation">
                <a href="<?= site_url('student'); ?>" aria-current="page">Home</a>
                <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
            </nav>
        </div>
    </header>

    <main class="page-shell">
        <div class="page-heading">
            <p class="eyebrow">Overview</p>
            <h1>Welcome to the student portal</h1>
            <p class="intro">Find your student information quickly using the navigation above.</p>
        </div>
        <section class="content-panel" aria-labelledby="quick-access-title">
            <h2 id="quick-access-title">Quick access</h2>
            <p>View your student profile to see your current academic and contact details.</p>
            <a class="button" href="<?= site_url('student/profile'); ?>">View student profile</a>
        </section>
    </main>
</body>
</html>
