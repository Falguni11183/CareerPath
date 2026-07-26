<!DOCTYPE html>
<html>

<head>

<title>Edit Career Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f7fb;
font-family:Arial;
}

.box{

width:700px;
margin:40px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);

}

</style>

</head>

<body>

<div class="box">

<h2>Edit Career Profile</h2>

<form method="post"
action="<?= base_url('admin/update-career-profile/'.$profile['id']) ?>">

<div class="mb-3">

<label>Career Name</label>

<input
type="text"
name="career_name"
class="form-control"
value="<?= $profile['career_name'] ?>"
required>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
rows="4"
class="form-control"
required><?= $profile['description'] ?></textarea>

</div>

<div class="mb-3">

<label>Roadmap</label>

<textarea
name="roadmap"
rows="5"
class="form-control"
required><?= $profile['roadmap'] ?></textarea>

</div>

<?php if(isset($profile['color_code'])): ?>

<div class="mb-3">

<label>Color</label>

<input
type="color"
name="color_code"
class="form-control form-control-color"
value="<?= $profile['color_code'] ?>">

</div>

<?php endif; ?>

<button class="btn btn-primary">

Update Career

</button>

<a href="<?= base_url('admin/career-profiles') ?>"
class="btn btn-secondary">

Cancel

</a>

</form>

</div>

</body>

</html>