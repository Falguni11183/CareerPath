<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CareerPath | Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('css/register.css') ?>">

</head>

<body>

<div class="register-container">

    <div class="register-card">

        <h2>CareerPath</h2>

        <p>Create Your Account</p>

        <form action="<?= base_url('register/save') ?>" method="post">

            <?= csrf_field() ?>

            <div class="mb-3">

                <label class="form-label">Full Name</label>

                <input
                    type="text"
                    name="full_name"
                    class="form-control"
                    placeholder="Enter Full Name"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">Email Address</label>

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
                    placeholder="Create Password"
                    required>

            </div>

            <div class="mb-4">

                <label class="form-label">Confirm Password</label>

                <input
                    type="password"
                    name="confirm_password"
                    class="form-control"
                    placeholder="Confirm Password"
                    required>

            </div>

            <button
                type="submit"
                class="btn btn-success w-100">

                Create Account

            </button>

        </form>

        <hr>

        <p class="text-center mt-3">

            Already have an account?

            <a href="<?= base_url('login') ?>">

                Login

            </a>

        </p>

    </div>

</div>

</body>

</html>