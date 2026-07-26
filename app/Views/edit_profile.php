<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f7fc;">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Edit Profile</h3>
        </div>

        <div class="card-body">

            <form action="<?= base_url('profile/update') ?>" method="post">

                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="full_name" class="form-control"
                           value="<?= esc($user['full_name']) ?>">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= esc($user['email']) ?>">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control"
                           value="<?= esc($user['phone'] ?? '') ?>">
                </div>

                <div class="mb-3">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="Male" <?= ($user['gender'] ?? '')=='Male'?'selected':'' ?>>Male</option>
                        <option value="Female" <?= ($user['gender'] ?? '')=='Female'?'selected':'' ?>>Female</option>
                        <option value="Other" <?= ($user['gender'] ?? '')=='Other'?'selected':'' ?>>Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Qualification</label>
                    <input type="text" name="qualification" class="form-control"
                           value="<?= esc($user['qualification'] ?? '') ?>">
                </div>

                <div class="mb-3">
                    <label>Location</label>
                    <input type="text" name="location" class="form-control"
                           value="<?= esc($user['location'] ?? '') ?>">
                </div>

                <button class="btn btn-success">
                    Save Changes
                </button>

                <a href="<?= base_url('profile') ?>" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>