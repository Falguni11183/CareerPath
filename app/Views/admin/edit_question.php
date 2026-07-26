<!DOCTYPE html>
<html>
<head>
    <title>Edit Question</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Edit Question</h3>
        </div>

        <div class="card-body">

            <form action="<?= base_url('admin/update-question/'.$question['id']) ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Question</label>

                    <textarea
                        name="question"
                        class="form-control"
                        rows="3"
                        required><?= $question['question'] ?></textarea>
                </div>

                <div class="mb-3">

                    <label class="form-label">Career Profile</label>

                    <select name="career_profile_id" class="form-select">

                        <?php foreach($profiles as $p): ?>

                        <option
                            value="<?= $p['id'] ?>"
                            <?= ($p['id']==$question['career_profile_id'])?'selected':'' ?>>

                            <?= $p['career_name'] ?>

                        </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label>Category</label>

                    <input
                        type="text"
                        name="category"
                        value="<?= $question['category'] ?>"
                        class="form-control">

                </div>

                <hr>

                <h5>Options</h5>

                <div class="mb-3">

                    <label>Option A</label>

                    <input
                        type="text"
                        name="option_a"
                        value="<?= $question['option_a'] ?>"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Option B</label>

                    <input
                        type="text"
                        name="option_b"
                        value="<?= $question['option_b'] ?>"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Option C</label>

                    <input
                        type="text"
                        name="option_c"
                        value="<?= $question['option_c'] ?>"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label>Option D</label>

                    <input
                        type="text"
                        name="option_d"
                        value="<?= $question['option_d'] ?>"
                        class="form-control">

                </div>

                <button class="btn btn-success">
                    Update Question
                </button>

                <a href="<?= base_url('admin/questions') ?>" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>