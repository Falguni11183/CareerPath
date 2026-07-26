<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= esc($course['title']) ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>

body{
    background:#f5f7fb;
}

.card{
    border:none;
    border-radius:15px;
}

.btn{
    border-radius:10px;
}

</style>

</head>

<body>

<div class="container py-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h2>

<i class="fa-solid fa-book-open"></i>

<?= esc($course['title']) ?>

</h2>

</div>

<div class="card-body">

<h5>Description</h5>

<p>

<?= esc($course['description']) ?>

</p>

<hr>

<h5>Duration</h5>

<p>

<?= esc($course['duration']) ?>

</p>

<hr>

<div class="row">

<div class="ratio ratio-16x9 mb-4">

    <iframe
        src="https://www.youtube.com/embed/<?= esc($course['course_link']) ?>"
        title="Course Video"
        allowfullscreen>
    </iframe>

</div>
</a>

</div>





</div>



</div>

</div>

<hr>

<div class="d-flex justify-content-between">

<a href="<?= base_url('roadmap') ?>"
class="btn btn-secondary">

Back to Roadmap

</a>

<a href="<?= base_url('roadmap/complete/'.$course['id']) ?>"
class="btn btn-success">

Complete Course

</a>

</div>

</div>

</div>

</div>

</body>
</html>