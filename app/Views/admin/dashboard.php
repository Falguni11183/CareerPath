<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareerPath Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>

body{
    background:#f5f7fb;
    font-family:Segoe UI,sans-serif;
}

.sidebar{
    position:fixed;
    width:240px;
    height:100vh;
    background:#fff;
    box-shadow:0 0 15px rgba(0,0,0,.08);
    padding:25px;
}

.sidebar h3{
    font-weight:bold;
    color:#4f46e5;
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    padding:14px;
    color:#444;
    text-decoration:none;
    border-radius:10px;
    margin-bottom:10px;
    transition:.3s;
}

.sidebar a:hover{
    background:#4f46e5;
    color:#fff;
}

.main{
    margin-left:260px;
    padding:30px;
}

.card-box{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.progress{
    height:12px;
}

</style>

</head>

<body>

<div class="sidebar">

<h3>CareerPath</h3>

<a href="#"><i class="fa fa-chart-line"></i> Dashboard</a>

<a href="<?= base_url('admin/questions') ?>"><i class="fa fa-question-circle"></i> Question Bank</a>

<a href="<?= base_url('admin/career-profiles') ?>"><i class="fa fa-user-graduate"></i> Career Profiles</a>

<a href="<?= base_url('admin/users') ?>"><i class="fa fa-users"></i> Users</a>

<a href="<?= base_url('admin/results') ?>"><i class="fa fa-file"></i> Results</a>

<a href="<?= base_url('/') ?>">

<i class="fa fa-sign-out-alt"></i> Logout
</a>

</div>

<div class="main">

<h2 class="mb-4">
Admin Dashboard
</h2>

<div class="row">

<div class="col-md-3">

<div class="card card-box text-center p-4">

<i class="fa fa-users fa-2x text-primary mb-3"></i>

<h2><?= $totalUsers ?></h2>

<p>Total Users</p>

</div>

</div>

<div class="col-md-3">

<div class="card card-box text-center p-4">

<i class="fa fa-question fa-2x text-success mb-3"></i>

<h2><?= $totalQuestions ?></h2>

<p>Total Questions</p>

</div>

</div>

<div class="col-md-3">

<div class="card card-box text-center p-4">

<i class="fa fa-file-alt fa-2x text-warning mb-3"></i>

<h2><?= $totalTests ?></h2>

<p>Test Attempts</p>

</div>

</div>

<div class="col-md-3">

<div class="card card-box text-center p-4">

<i class="fa fa-briefcase fa-2x text-danger mb-3"></i>

<h2><?= $totalProfiles ?></h2>

<p>Career Profiles</p>

</div>

</div>

</div>

<div class="card mt-5 card-box">

<div class="card-header">

<h4>Results by Career Profile</h4>

</div>

<div class="card-body">

<?php foreach($careerStats as $row): ?>

<div class="mb-4">

<div class="d-flex justify-content-between">

<strong><?= esc($row['career_name']) ?></strong>

<strong><?= $row['total'] ?></strong>

</div>

<div class="progress">

<div class="progress-bar bg-primary"

style="width:<?= min($row['total']*10,100) ?>%">

</div>

</div>

</div>

<?php endforeach; ?>

</div>

</div>

</div>

</body>
</html>