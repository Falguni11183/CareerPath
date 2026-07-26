<!DOCTYPE html>
<html>
<head>

<title>Career Profiles</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f7fb;
    font-family:Arial,sans-serif;
}

.container{
    margin-top:40px;
}

.card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.card-header{
    background:white;
    border-bottom:none;
    padding:20px;
}

.card-header h2{
    font-weight:bold;
}

.table th{
    background:#eef4ff;
}

.btn-add{
    float:right;
}

.action-btns{
    display:flex;
    gap:8px;
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<div class="card-header">

<h2 class="d-inline">Career Profiles</h2>

<a href="<?= base_url('admin/add_career_profile') ?>"
class="btn btn-primary btn-add">
+ Add Career
</a>

</div>

<div class="card-body">

<table class="table table-bordered table-hover align-middle">

<thead>

<tr>

<th width="60">ID</th>

<th width="180">Career</th>

<th>Description</th>

<th>Roadmap</th>

<th width="160">Action</th>

</tr>

</thead>

<tbody>

<?php foreach($profiles as $row): ?>

<tr>

<td><?= $row['id']; ?></td>

<td>
<b><?= $row['career_name']; ?></b>
</td>

<td><?= $row['description']; ?></td>

<td><?= $row['roadmap']; ?></td>

<td>

<div class="action-btns">

<a href="<?= base_url('admin/edit-career-profile/'.$row['id']) ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a href="<?= base_url('admin/delete-career-profile/'.$row['id']) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this Career Profile?')">
Delete
</a>

</div>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>
<div class="text-center mt-4">

<a href="<?= base_url('admin/dashboard') ?>"
class="btn btn-primary px-4 py-2">

← Back To Admin Dashboard

</a>

</div>

</div>

</div>

</div>

</body>
</html>