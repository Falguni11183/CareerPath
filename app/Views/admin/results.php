<!DOCTYPE html>
<html>

<head>

<title>Assessment Results</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f7fb;
}

.card{
border-radius:15px;
border:none;
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


<h2>Assessment Results</h2>


<table class="table table-bordered mt-3">

<thead>

<tr>

<th>ID</th>

<th>Student</th>

<th>Email</th>

<th>Suggested Career</th>

<th>Score</th>

<th>Action</th>

</tr>

</thead>


<tbody>


<?php foreach($results as $row): ?>


<tr>

<td><?= $row['id'] ?></td>


<td><?= $row['full_name'] ?></td>


<td><?= $row['email'] ?></td>


<td>
<b><?= $row['career_name'] ?></b>
</td>


<td><?= $row['score'] ?></td>


<td>

<a href="<?= base_url('admin/delete-result/'.$row['id']) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Delete Result?')">

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