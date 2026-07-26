<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Career Profile</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f7fc;
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;
}

.card{

width:700px;
background:#fff;
padding:35px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,.1);

}

h2{

margin-bottom:25px;
color:#333;

}

label{

display:block;
margin-top:18px;
margin-bottom:8px;
font-weight:bold;

}

input,
textarea{

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

input[type=color]{

height:55px;
padding:5px;
cursor:pointer;

}

button{

margin-top:25px;
background:#4f46e5;
color:#fff;
border:none;
padding:14px 25px;
border-radius:8px;
cursor:pointer;
font-size:16px;

}

button:hover{

background:#4338ca;

}

.back{

margin-left:15px;
text-decoration:none;
color:#555;

}

</style>

</head>

<body>

<div class="card">

<h2>Add Career Profile</h2>

<form method="post" action="<?= base_url('admin/save-career-profile') ?>">

<label>Career Name</label>

<input
type="text"
name="career_name"
placeholder="Software Engineer"
required>

<label>Description</label>

<textarea
name="description"
placeholder="Best for students interested in programming..."
required></textarea>

<label>Roadmap</label>

<textarea
name="roadmap"
placeholder="Learn C → Java → PHP → MySQL → CodeIgniter → Internship"
required></textarea>



<button type="submit">
Save Career Profile
</button>

<a class="back"
href="<?= base_url('admin/career-profiles') ?>">
Cancel
</a>

</form>

</div>

</body>

</html>