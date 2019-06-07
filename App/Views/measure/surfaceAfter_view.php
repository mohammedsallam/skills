<div class="card col-sm-12">
    <h3 class="card-header primary-color white-text mt-3 text-center">Last Exam</h3>
    <style>
        .progressbar {
            width: 80%;
            margin: 25px auto;
            border: solid 1px #000;
            /*display: inline-block;*/
        }
        .progressbar .inner {
            height: 15px;
            animation: progressbar-countdown;
            /* Placeholder, this will be updated using javascript */
            /*animation-duration: 1800s;*/
            /* We stop in the end */
            animation-iteration-count: 1;
            /* Stay on pause when the animation is finished finished */
            animation-fill-mode: forwards;
            /* We start paused, we start the animation using javascript */
            animation-play-state: paused;
            /* We want a linear animation, ease-out is standard */
            animation-timing-function: linear;
        }
        @keyframes progressbar-countdown {
            0% {
                width: 100%;
                background: #0F0;
            }
            100% {
                width: 0%;
                background: #F00;
            }
        }
    </style>

    <div class="col-lg-7 m-auto d-flex justify-content-center align-items-center">
        <div class="text-danger"><i class="fa fa-clock-o"></i> Timer</div>
        <div id='progressbar'></div>
        <div data-href="<?= $this->route->baseUrl()?>" id="counter" class="text-success"></div>
    </div>

    <script>

        /*
         *  Creates a progressbar.
         *  @param id the id of the div we want to transform in a progressbar
         *  @param duration the duration of the timer example: '10s'
         *  @param callback, optional function which is called when the progressbar reaches 0.
         */
        function createProgressbar(id, duration, counterId, counterTime, callback) {
            // We select the div that we want to turn into a progressbar
            var progressbar = document.getElementById(id);
            progressbar.className = 'progressbar';

            // We create the div that changes width to show progress
            var progressbarinner = document.createElement('div');
            progressbarinner.className = 'inner';



            var counter = document.getElementById(counterId);
            counter.innerHTML = counterTime + ' Minutes';

            var buffer= setInterval(function () {
                counterTime--;
                counter.innerHTML = counterTime + ' Minutes';
                if (counterTime === 0){
                    window.location.href = counter.getAttribute('data-href');
                    window.reload();
                    clearInterval(buffer);
                    counter.innerHTML = 'Timeout';
                    counter.className = 'text-danger';
                }
            },60000);

            // Now we set the animation parameters
            progressbarinner.style.animationDuration = duration;

            // Eventually couple a callback
            if (typeof(callback) === 'function') {
                progressbarinner.addEventListener('animationend', callback);
            }

            // Append the progressbar to the main progressbardiv
            progressbar.appendChild(progressbarinner);

            // When everything is set up we start the animation
            progressbarinner.style.animationPlayState = 'running';
        }

        addEventListener('load', function() {
            createProgressbar('progressbar', '1800s', 'counter', 28);

        });

    </script>
    <div class="card-body col-sm-10 m-auto answer_form">
        <?php

        foreach ($questions as $question) {
            $sql = "SELECT * FROM choices WHERE question_id = $question->question_id";
            $choices = \Models\ChoicesModel::query($sql);
            ?>
            <form action="<?= $this->route->baseUrl() . 'measure/examAdd'?>" method="post" id="form_<?= $question->question_id?>" class="form_<?= $question->question_id?> mb-5 d-none">
                <input type="hidden" name="model" value="AnswersSurfaceAfterModel">
                <input type="hidden" name="table" value="answers_after_surface">
                <input type="hidden" name="student_id" value="<?= $this->session->get('user_id') ?>">
                <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - <?= $question->question_id?></h4>
                <label for="que_<?= $question->question_id ?>" class="form-group w-100">
                    <input type="text" disabled value="<?= $this->filter->string($question->question_title) ?>" class="form-control font-weight-bold" id="que_<?= $question->question_id ?>">
                    <input type="hidden" name="question_id" value="<?= $question->question_id ?>">
                </label>
                <?php
                foreach ($choices as $choice) {

                    $sId = $this->session->get('user_id');
                    $queId = $question->question_id;
                    $sql = "SELECT * FROM answers_after_surface WHERE question_id = $queId AND student_id = $sId";
                    $answer = \Models\AnswersSurfaceAfterModel::query($sql);
                    $checked = '';

                    if(empty($answer) == false){
                        foreach ($answer as $item) {
                            $checked = ($item->answer == $choice->choice) ? 'checked' : '';
                        }
                    }
                    ?>
                    <div class="custom-control custom-radio">
                        <input <?= $checked ?> type="radio" value='<?= $choice->mark.'_'.$choice->choice?>' class="custom-control-input answer_check" id="check_<?= $choice->choice_id ?>" name="mark">
                        <label class="custom-control-label" for="check_<?= $choice->choice_id ?>" > <?= $this->filter->string($choice->choice) ?> </label>
                    </div>
                <?php } ?>
                <hr>
            </form>
        <?php } ?>
        <a href="<?= $this->route->baseUrl() . 'measure/surfaceAfter'?>" class="btn btn-success text-light text-uppercase mb-5 d-none save_surface_answer">Save answers</a>
    </div>

</div>
