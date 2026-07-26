<!DOCTYPE html>
<html>
<head>
    <title>Question Bank</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fb;
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 5px 20px rgba(0,0,0,.08);
        }

        .badge{
            font-size:14px;
        }

        h2{
            font-weight:bold;
        }

    </style>

</head>

<body>

<div class="container mt-5">

<div class="d-flex justify-content-between mb-4">



<h2 class="fw-bold mb-4">
Question Bank
</h2>




<a href="<?= base_url('admin/add-question') ?>"
class="btn btn-primary">

+ Add Question

</a>
</div>


<div class="card">

<div class="card-body">

<table class="table table-bordered table-hover">

<thead class="table-primary">

<tr>

<th>ID</th>

<th>Question</th>

<th>Career</th>

<th>Category</th>

<th>Action</th>

</tr>

</thead>
<?php $sr = 1; ?>
<tbody>

<?php foreach($questions as $q): ?>

<tr>
<td><?= $sr++ ?></td>

<td><?= $q['question'] ?></td>

<td><?= esc($q['career_name']) ?></td>
<td>

<span class="badge bg-info">

<?= $q['category'] ?>

</span>

</td>

<td>
    <a href="<?= base_url('admin/edit-question/'.$q['id']) ?>" class="btn btn-warning btn-sm">
        Edit
    </a>

    <a href="<?= base_url('admin/delete-question/'.$q['id']) ?>"
       class="btn btn-danger btn-sm"
       onclick="return confirm('Delete this question?')">
        Delete
    </a>
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