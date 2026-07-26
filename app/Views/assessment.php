<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Assessment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/assessment.css') ?>">
</head>

<body>

<div class="container py-5">

    <div class="assessment-card">

        <div class="text-center mb-4">

            <h2>Career Aptitude Assessment</h2>

            <p>Answer all questions honestly.</p>

        </div>

        <div class="progress mb-4" style="height:10px;">

            <div id="progressBar"
                 class="progress-bar bg-success"
                 style="width:0%">
            </div>

        </div>

        <form action="<?= base_url('assessment/submit') ?>" method="post">

            <?= csrf_field() ?>

            <?php foreach($questions as $index=>$question): ?>

            <div class="question-page <?= $index==0?'active':'' ?>">

                <h5 class="question-count">
                    Question <?= $index+1 ?> of <?= count($questions) ?>
                </h5>

                <h3 class="question-title">

                    <?= esc($question['question']) ?>

                </h3>

                <input type="hidden"
                       name="question_id[]"
                       value="<?= $question['id'] ?>">

                <div class="option">

                    <input type="radio"
                           id="a<?= $question['id']?>"
                           name="answer[<?= $question['id']?>]"
                           value="A">

                    <label for="a<?= $question['id']?>">

                        <?= esc($question['option_a']) ?>

                    </label>

                </div>

                <div class="option">

                    <input type="radio"
                           id="b<?= $question['id']?>"
                           name="answer[<?= $question['id']?>]"
                           value="B">

                    <label for="b<?= $question['id']?>">

                        <?= esc($question['option_b']) ?>

                    </label>

                </div>

                <div class="option">

                    <input type="radio"
                           id="c<?= $question['id']?>"
                           name="answer[<?= $question['id']?>]"
                           value="C">

                    <label for="c<?= $question['id']?>">

                        <?= esc($question['option_c']) ?>

                    </label>

                </div>

                <div class="option">

                    <input type="radio"
                           id="d<?= $question['id']?>"
                           name="answer[<?= $question['id']?>]"
                           value="D">

                    <label for="d<?= $question['id']?>">

                        <?= esc($question['option_d']) ?>

                    </label>

                </div>

                <div class="button-group mt-5">

                    <?php if($index>0): ?>

                        <button
                            type="button"
                            class="btn btn-secondary prevBtn">

                            Previous

                        </button>

                    <?php else: ?>

                        <div></div>

                    <?php endif; ?>

                    <?php if($index<count($questions)-1): ?>

                        <button
                            type="button"
                            class="btn btn-primary nextBtn">

                            Next

                        </button>

                    <?php else: ?>

                        <button
                            type="submit"
                            class="btn btn-success">

                            Submit Assessment

                        </button>

                    <?php endif; ?>

                </div>

            </div>

            <?php endforeach; ?>

        </form>

    </div>

</div>
<script>

let currentQuestion = 0;

const pages = document.querySelectorAll(".question-page");

const progressBar = document.getElementById("progressBar");

function showQuestion(index){

    pages.forEach((page)=>{

        page.classList.remove("active");

        page.style.display="none";

    });

    pages[index].style.display="block";

    pages[index].classList.add("active");

    let percent=((index+1)/pages.length)*100;

    progressBar.style.width=percent+"%";

}

showQuestion(0);

document.querySelectorAll(".nextBtn").forEach((btn)=>{

    btn.addEventListener("click",()=>{

        let checked=pages[currentQuestion].querySelector("input[type=radio]:checked");

        if(!checked){

            alert("Please select an answer.");

            return;

        }

        currentQuestion++;

        showQuestion(currentQuestion);

        window.scrollTo({

            top:0,

            behavior:"smooth"

        });

    });

});

document.querySelectorAll(".prevBtn").forEach((btn)=>{

    btn.addEventListener("click",()=>{

        currentQuestion--;

        showQuestion(currentQuestion);

        window.scrollTo({

            top:0,

            behavior:"smooth"

        });

    });

});

</script>

</body>

</html>