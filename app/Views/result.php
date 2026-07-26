<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Career Recommendation</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}


body{

min-height:100vh;

background:
linear-gradient(
135deg,
#667eea,
#764ba2
);

padding:40px 0;

}


/* MAIN */

.main-card{

background:rgba(255,255,255,.95);

border-radius:35px;

padding:50px;

box-shadow:
0 25px 60px rgba(0,0,0,.25);

}


.top-icon{

width:90px;
height:90px;

background:
linear-gradient(
135deg,
#2563eb,
#9333ea
);

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

font-size:45px;

margin:auto;

color:white;

}


.small-title{

margin-top:20px;

font-weight:700;

color:#6366f1;

letter-spacing:1px;

}


.heading{

font-size:42px;

font-weight:900;

color:#111827;

}


.career-name{

font-size:42px;

font-weight:900;

background:
linear-gradient(
90deg,
#2563eb,
#9333ea
);

-webkit-background-clip:text;

color:transparent;

}


.desc{

max-width:800px;

margin:auto;

font-size:18px;

color:#475569;

line-height:1.8;

}



/* SCORE BOX */


.score-box{

margin:35px auto;

width:170px;

height:170px;

border-radius:50%;

background:

linear-gradient(
135deg,
#22c55e,
#16a34a
);


display:flex;

align-items:center;

justify-content:center;

flex-direction:column;

color:white;

box-shadow:

0 15px 35px rgba(34,197,94,.4);

}


.score-box h2{

font-size:42px;

font-weight:900;

}


.score-box span{

font-size:14px;

}



/* ROADMAP */


.roadmap-card{

margin-top:40px;

background:#f8fafc;

border-radius:25px;

padding:35px;

border-left:8px solid #6366f1;

}


.roadmap-card h3{

font-weight:900;

color:#4338ca;

}


.roadmap-card p{

margin-top:20px;

font-size:17px;

line-height:2;

color:#334155;

}



/* BUTTON */

.btn-home{

display:inline-block;

margin-top:35px;

padding:14px 40px;

background:

linear-gradient(
135deg,
#2563eb,
#7c3aed
);

color:white;

border-radius:35px;

font-weight:700;

text-decoration:none;

box-shadow:

0 10px 25px rgba(79,70,229,.4);

}


.btn-home:hover{

color:white;

transform:translateY(-3px);

}


</style>

</head>



<body>


<div class="container">


<?php

$career = session()->get('career');

?>


<div class="main-card text-center">


<div class="top-icon">

🚀

</div>


<div class="small-title">

CAREERPATH RECOMMENDATION

</div>



<h1 class="heading mt-3">

Your Ideal Career Path

</h1>



<h2 class="career-name mt-4">

<?= esc($career['career_name']) ?>

</h2>



<p class="desc mt-4">

<?= esc($career['description']) ?>

</p>




<div class="score-box">


<h2>

<?= $career['percentage'] ?>%

</h2>


<span>

Career Match

</span>


</div>





<div class="roadmap-card text-start">


<h3>

🛤 Recommended Roadmap

</h3>



<p>

<?= nl2br(esc($career['roadmap'])) ?>

</p>



</div>





<a href="<?= base_url('dashboard') ?>"
class="btn-home">

← Back To Dashboard

</a>




</div>


</div>



</body>

</html>