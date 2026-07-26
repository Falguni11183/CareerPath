<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Question</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f7fb;
padding:40px;
}

.card{

max-width:850px;
margin:auto;
background:#fff;
padding:35px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,.08);

}

h2{

margin-bottom:25px;
font-size:34px;
color:#222;

}

label{

display:block;
font-weight:bold;
margin-top:18px;
margin-bottom:8px;

}

textarea,
select,
input{

width:100%;
padding:12px;
border:1px solid #ddd;
border-radius:8px;
font-size:15px;

}

textarea{

height:120px;
resize:none;

}

.row{

display:flex;
gap:15px;
margin-top:12px;

}

.row input:first-child{

flex:4;

}

.row input:last-child{

flex:1;

}

button{

margin-top:30px;
background:#2563eb;
color:#fff;
padding:13px 28px;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;

}

button:hover{

background:#1d4ed8;

}

.back{

float:right;
text-decoration:none;
color:#2563eb;
font-weight:bold;

}

</style>

</head>

<body>

<div class="card">

<a href="<?= base_url('admin/questions') ?>" class="back">
← Question Bank
</a>

<h2>Add New Question</h2>

<form method="post"
action="<?= base_url('admin/save-question') ?>">

<label>Question Text</label>

<textarea
name="question"
required
placeholder="Enter Question"></textarea>


<label>Career Profile</label>

<select name="career_profile_id" required>

<?php foreach($profiles as $p): ?>

<option value="<?= $p['id'] ?>">
<?= $p['career_name'] ?>
</option>

<?php endforeach; ?>

</select>


<label>Category</label>

<select name="category">

<option>Technical</option>
<option>Business</option>
<option>Academic</option>
<option>Personality</option>
<option>Career Interest</option>

</select>

<label>Answer Options</label>

<div class="row">

<input
type="text"
name="option_a"
placeholder="Option A">

<input
type="number"
name="score1"
placeholder="Score">

</div>

<div class="row">

<input
type="text"
name="option_b"
placeholder="Option B">

<input
type="number"
name="score2"
placeholder="Score">

</div>

<div class="row">

<input
type="text"
name="option_c"
placeholder="Option C">

<input
type="number"
name="score3"
placeholder="Score">

</div>

<div class="row">

<input
type="text"
name="option_d"
placeholder="Option D">

<input
type="number"
name="score4"
placeholder="Score">

</div>

<button type="submit">

Save Question

</button>

</form>

</div>

</body>
</html>