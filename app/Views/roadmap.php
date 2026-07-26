<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Career Roadmap</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('css/roadmap.css') ?>">

</head>

<body>

<div class="container py-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h2>
                        <i class="fa-solid fa-road"></i>
                        Career Roadmap
                    </h2>

                    <h5 class="mt-2">
                        <?= esc($career) ?>
                    </h5>

                </div>

                <a href="<?= base_url('dashboard') ?>" class="btn btn-light">
                    Dashboard
                </a>

            </div>

        </div>

        <div class="card-body">

            <h5 class="mb-3">
                Overall Progress
            </h5>

            <div class="progress mb-5" style="height:25px;">

                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"

                    style="width:<?= $progress ?>%">

                    <?= $progress ?>%

                </div>

            </div>

            <?php if(empty($roadmap)): ?>

                <div class="alert alert-warning text-center">

                    No Roadmap Available.

                </div>

            <?php else: ?>

                <?php foreach($roadmap as $step): ?>

                    <div class="timeline mb-4">

                        <div class="circle">

                            <?php if(in_array($step['id'],$completedIds)): ?>

                                <i class="fa-solid fa-check"></i>

                            <?php else: ?>

                                <i class="fa-solid fa-book-open"></i>

                            <?php endif; ?>

                        </div>

                        <div class="content">

                            <div class="d-flex justify-content-between">

                                <div>

                                    <h4>

                                        Step <?= $step['step_no'] ?>

                                    </h4>

                                    <h5>

                                        <?= esc($step['title']) ?>

                                    </h5>

                                </div>

                                <div>

                                    <?php if(in_array($step['id'],$completedIds)): ?>

                                        <span class="badge bg-success">

                                            Completed

                                        </span>

                                    <?php else: ?>

                                        <span class="badge bg-warning text-dark">

                                            Pending

                                        </span>

                                    <?php endif; ?>

                                </div>

                            </div>

                            <p class="mt-3">

                                <?= esc($step['description']) ?>

                            </p>

                            <p>

                                <strong>Duration :</strong>

                                <?= esc($step['duration']) ?>

                            </p>

                            <div class="mt-3">

    <a href="<?= base_url('course/'.$step['id']) ?>"
       class="btn btn-primary me-2">
        <i class="fa-solid fa-book-open"></i> Learn Now
    </a>

    <?php if(!in_array($step['id'],$completedIds)): ?>

        <a href="<?= base_url('roadmap/complete/'.$step['id']) ?>"
           class="btn btn-success">
            <i class="fa-solid fa-check"></i> Mark Complete
        </a>

    <?php else: ?>

        <button class="btn btn-outline-success" disabled>
            <i class="fa-solid fa-circle-check"></i> Completed
        </button>

    <?php endif; ?>

</div>

                        </div>

                    </div>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>

    </div>

</div>

</body>
</html>