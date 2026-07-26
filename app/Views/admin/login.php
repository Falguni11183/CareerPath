<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CareerPath Admin Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('css/admin-login.css') ?>">

</head>

<body>

<div class="login-container">

    <div class="login-card">

        <div class="text-center mb-4">

            <div class="icon-box">
                <i class="fa-solid fa-user-shield"></i>
            </div>

            <h2>CareerPath Admin</h2>

            <p>Sign in to continue</p>

        </div>

        <?php if(session()->getFlashdata('error')): ?>

            <div class="alert alert-danger">

                <?= session()->getFlashdata('error') ?>

            </div>

        <?php endif; ?>

        <form action="<?= base_url('admin/check') ?>" method="post">

            <?= csrf_field(); ?>

            <div class="mb-3">

                <label class="form-label">

                    Username

                </label>

                <input
                    type="text"
                    name="username"
                    class="form-control"
                    placeholder="Enter Username"
                    required>

            </div>

            <div class="mb-4">

                <label class="form-label">

                    Password

                </label>

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

    </div>

</div>

</body>

</html>