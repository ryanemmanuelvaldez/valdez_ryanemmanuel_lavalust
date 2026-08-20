<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile | Student Information</title>
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
                <a href="<?= site_url('student'); ?>">Home</a>
                <a href="<?= site_url('student/profile'); ?>" aria-current="page">Student Profile</a>
            </nav>
        </div>
    </header>

    <main class="page-shell">
        <div class="page-heading">
            <p class="eyebrow">Account details</p>
            <h1>Student profile</h1>
            <p class="intro">Your registered academic and contact information.</p>
        </div>
        <section class="content-panel" aria-labelledby="profile-details-title">
            <h2 id="profile-details-title">Profile details</h2>
        <?php $escape = static function ($value) {
            return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
        }; ?>
            <dl class="profile-list">
                <div class="profile-item"><dt>Student ID</dt><dd><?= $escape($student_id ?? ''); ?></dd></div>
                <div class="profile-item"><dt>Name</dt><dd><?= $escape($name ?? ''); ?></dd></div>
                <div class="profile-item"><dt>Course</dt><dd><?= $escape($course ?? ''); ?></dd></div>
                <div class="profile-item"><dt>Year level</dt><dd><?= $escape($year ?? ''); ?></dd></div>
                <div class="profile-item"><dt>Section</dt><dd><?= $escape($section ?? ''); ?></dd></div>
                <div class="profile-item"><dt>Email</dt><dd><?= $escape($email ?? ''); ?></dd></div>
            </dl>
        </section>
    </main>
</body>
</html>
