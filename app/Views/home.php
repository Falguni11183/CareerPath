<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CareerPath | Build Your Future</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}


body{
background:#f8fafc;
}


/* NAVBAR */

.navbar{

padding:18px 8%;
background:rgba(255,255,255,.95);
backdrop-filter:blur(10px);
box-shadow:0 8px 25px rgba(79,70,229,.15);
position:sticky;
top:0;
z-index:100;

}


.logo{

font-size:30px;
font-weight:900;

background:linear-gradient(
90deg,#2563eb,#9333ea
);

-webkit-background-clip:text;
color:transparent;

}


.nav-link{

font-weight:600;
margin-left:25px;
color:#334155;
transition:.3s;

}


.nav-link:hover{

color:#4f46e5;

}


.admin-link{

background:#4f46e5;
color:white !important;
padding:10px 22px;
border-radius:30px;

}


.admin-link:hover{

background:#312e81;

}



/* HERO */


.hero{

min-height:88vh;
display:flex;
align-items:center;

padding:60px 8%;

background:

radial-gradient(
circle at top left,
#c7d2fe,
transparent 35%
),

linear-gradient(
135deg,
#eef2ff,
#ffffff
);

}



.hero h1{

font-size:58px;
font-weight:900;
color:#0f172a;
line-height:1.2;

}


.hero span{

background:linear-gradient(
90deg,#2563eb,#9333ea
);

-webkit-background-clip:text;

color:transparent;

}



.hero p{

font-size:19px;
margin-top:20px;
line-height:1.8;
color:#475569;

}


.btn-main{

display:inline-block;

margin-top:25px;

background:linear-gradient(
135deg,#2563eb,#7c3aed
);

padding:15px 35px;

border-radius:35px;

color:white;

text-decoration:none;

font-weight:700;

box-shadow:
0 10px 25px rgba(79,70,229,.4);

transition:.3s;

}


.btn-main:hover{

transform:translateY(-3px);

color:white;

}



/* HERO CARD */


.hero-card{

background:white;

padding:40px;

border-radius:30px;

box-shadow:

0 20px 50px rgba(79,70,229,.2);

border:1px solid #e0e7ff;

}


.hero-card h3{

color:#4f46e5;

font-weight:800;

}


.hero-card li{

margin:12px 0;

font-weight:500;

}



/* FEATURES */


.features{

padding:80px 8%;

}


.section-title{

text-align:center;

font-weight:900;

margin-bottom:50px;

color:#0f172a;

}


.feature-box{

height:100%;

background:white;

padding:35px;

border-radius:25px;

text-align:center;

box-shadow:

0 10px 30px rgba(0,0,0,.08);

transition:.4s;

}


.feature-box:hover{

transform:translateY(-12px);

box-shadow:

0 20px 40px rgba(79,70,229,.25);

}



.icon{

font-size:55px;

margin-bottom:20px;

}



.footer{

background:

linear-gradient(
90deg,#111827,#312e81
);

color:white;

padding:25px;

text-align:center;

}


</style>


</head>



<body>



<!-- NAVBAR -->


<nav class="navbar navbar-expand-lg">


<div class="container-fluid">


<div class="logo">

🎯 CareerPath

</div>


<div>


<a class="nav-link d-inline"
href="<?= base_url('/') ?>">

Home

</a>



<a class="nav-link d-inline"
href="<?= base_url('/login') ?>">

Student Login

</a>



<a class="nav-link d-inline"
href="<?= base_url('/register') ?>">

Register

</a>



<a class="nav-link d-inline admin-link"
href="<?= base_url('/admin/login') ?>">

Admin

</a>


</div>


</div>


</nav>






<!-- HERO -->


<section class="hero">


<div class="row align-items-center">



<div class="col-md-7">


<h1>

Discover Your

<br>

<span>

Perfect Career Path

</span>


</h1>



<p>

CareerPath helps students choose the right career through intelligent assessments,
personalized recommendations and complete learning roadmaps.

</p>



<a href="<?= base_url('/assessment') ?>"
class="btn-main">

Start Assessment →

</a>



</div>





<div class="col-md-5">


<div class="hero-card">


<h3>

🚀 Smart Career Guidance

</h3>


<p>

Find careers matching your skills, interests and future goals.

</p>


<hr>


<h5>

You will get:

</h5>



<ul>


<li>✔ Personalized Career Suggestions</li>


<li>✔ Complete Learning Roadmap</li>


<li>✔ Skill Improvement Path</li>


<li>✔ Future Career Direction</li>



</ul>



</div>


</div>


</div>


</section>







<!-- FEATURES -->


<section class="features">


<h2 class="section-title">

Why Choose CareerPath?

</h2>


<div class="row g-4">


<div class="col-md-4">


<div class="feature-box">


<div class="icon">

🎯

</div>


<h4>

Smart Assessment

</h4>


<p>

Analyze your skills and interests with intelligent questions.

</p>


</div>


</div>





<div class="col-md-4">


<div class="feature-box">


<div class="icon">

🛤️

</div>


<h4>

Career Roadmap

</h4>


<p>

Follow step-by-step guidance to achieve your dream career.

</p>


</div>


</div>





<div class="col-md-4">


<div class="feature-box">


<div class="icon">

💡

</div>


<h4>

Personalized Guidance

</h4>


<p>

Get career recommendations and learning paths based on your interests and abilities.

</p>
</div>


</div>



</div>


</section>






<div class="footer">

© 2026 CareerPath | Build Your Future 🚀

</div>



</body>

</html>