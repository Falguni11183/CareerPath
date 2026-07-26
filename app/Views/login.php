<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CareerPath | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">

</head>

<body>

<div class="login-container">

    <div class="login-card">

        <h2>CareerPath</h2>

        <p>Login to Continue</p>

        <!-- Success Message -->
        <?php if(session()->getFlashdata('success')): ?>

            <div class="alert alert-success">

                <?= session()->getFlashdata('success') ?>

            </div>

        <?php endif; ?>

        <!-- Error Message -->
        <?php if(session()->getFlashdata('error')): ?>

            <div class="alert alert-danger">

                <?= session()->getFlashdata('error') ?>

            </div>

        <?php endif; ?>

        <form action="<?= base_url('login') ?>" method="post">

            <?= csrf_field(); ?>

            <div class="mb-3">

                <label class="form-label">Email</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Email"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter Password"
                    required>

            </div>

            <button type="submit" class="btn btn-primary w-100">

                Login

            </button>

        </form>

        <hr>

        <p class="text-center mb-0">

            Don't have an account?

            <a href="<?= base_url('register') ?>">

                Register

            </a>

        </p>

    </div>

</div>

</body>

</html>