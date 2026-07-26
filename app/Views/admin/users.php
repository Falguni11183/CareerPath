<!DOCTYPE html>
<html>

<head>

<title>Users</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f7fb;
}

.card{
border:none;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.table th{
background:#eef4ff;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="card p-4">

<h2>Registered Users</h2>

<table class="table table-bordered mt-3">

<thead>

<tr>

<th>ID</th>
<th>FullName</th>
<th>Email</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php foreach($users as $user): ?>

<tr>

<td><?= $user['id']; ?></td>

<td><?= $user['full_name']; ?></td>

<td><?= $user['email']; ?></td>

<td>

<a href="<?= base_url('admin/delete-user/'.$user['id']) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete User?')">
Delete
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</body>

</html>