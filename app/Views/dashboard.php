<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CareerPath | Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">

</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

    <div class="logo">

        <h2>CareerPath</h2>

    </div>

    <ul>

        <li class="active">

            <a href="#">

                <i class="fa-solid fa-house"></i>

                Dashboard

            </a>

        </li>

        <li>

            <a href="<?= base_url('profile') ?>">
    <i class="fa fa-user"></i> Profile
</a>

                

        </li>

        <li>

            <a href="<?= base_url('assessment') ?>">

                <i class="fa-solid fa-file-circle-question"></i>

                Career Test

            </a>

        </li>

        <li>

            <a href="<?= base_url('result') ?>">

                <i class="fa-solid fa-chart-line"></i>

                Recommendation

            </a>

        </li>

        <li>

            <a href="<?= base_url('roadmap') ?>">

                <i class="fa-solid fa-road"></i>

                Roadmap

            </a>

        </li>

        <li>

            <a href="<?= base_url('/logout') ?>">

                <i class="fa-solid fa-right-from-bracket"></i>

                Logout

            </a>

        </li>

    </ul>

</div>

<!-- Main -->

<div class="main-content">

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-white shadow-sm rounded-4 px-4">

        <div class="container-fluid">

            <h4 class="fw-bold">

                Welcome,
                <?= session()->get('full_name') ?? 'Student'; ?>

                👋

            </h4>

            <div>

                <i class="fa-regular fa-bell fs-4 me-4"></i>

                <img src="https://ui-avatars.com/api/?name=Student&background=4f46e5&color=fff"
                    class="rounded-circle"
                    width="45">

            </div>

        </div>

    </nav>

    <!-- Hero -->

    <section class="hero mt-4">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <?php if (!empty($latestResult)) : ?>

<h1>
    Welcome Back, <?= session()->get('full_name'); ?> 👋
</h1>

<p>
    Your recommended career is
    <strong><?= esc($latestResult['career_name']); ?></strong>
</p>


<?php else: ?>

<h1>
    Discover Your Perfect Career
</h1>

<p>
    Take an assessment test, get personalized recommendations,
    and follow your career roadmap.
</p>

<a href="<?= base_url('assessment') ?>" class="btn btn-primary">
    Start Assessment
</a>

<?php endif; ?>

                <a href="<?= base_url('assessment') ?>" class="btn btn-primary">Start Assessment</a>
            </div>

            <div class="col-lg-5 text-center">

                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                    class="img-fluid hero-img">

            </div>

        </div>

    </section>

    <!-- Statistics -->

    <div class="row mt-5">

        <div class="col-md-3">

            <div class="stat-card">

                <i class="fa-solid fa-book-open"></i>

                <h2>12</h2>

                <p>Career Paths</p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stat-card">

                <i class="fa-solid fa-user-graduate"></i>

                <h2><?= $assessmentCount ?></h2>
<p>Assessments</p>
            </div>

        </div>

        <div class="col-md-3">

            <div class="stat-card">

                <i class="fa-solid fa-chart-column"></i>

                <h2><?= $latestResult['score'] ?? 0 ?>%</h2>
<p>Career Match</p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stat-card">

                 <i class="fa-solid fa-award"></i>

            <h2>5</h2>

            <p>Achievements</p>

            </div>

        </div>

    </div>

    <!-- Quick Actions -->

    <div class="row mt-5">

        <div class="col-md-6">

            <div class="action-card">

                <i class="fa-solid fa-file-circle-question"></i>

                <h4>

                    Career Assessment

                </h4>

                <p>

                    Start your aptitude test to discover the best career.

                </p>

                <a href="<?= base_url('assessment') ?>" class="btn btn-primary">

    Start Assessment

</a>

            </div>

        </div>

        <div class="col-md-6">

            <div class="action-card">

                <i class="fa-solid fa-chart-line"></i>

                <h4>

                    Recommendations

                </h4>

                <p>

                    View careers recommended according to your interests.

                </p>

                <a href="<?= base_url('result') ?>"
class="btn btn-success">

View Recommendation

</a>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>