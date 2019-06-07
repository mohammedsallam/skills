<!-- Lesson list title -->

<div class="card text-center mt-3 mb-5">

    <a target="_blank" class="btn btn-primary col-lg-1 m-auto" href="<?=$this->route->baseUrl() . 'chat'?>">Chat</a>

    <div class="card-body">
        <h2>Dear student here list of lessons</h2>
    </div>
</div>

<div class="col-lg-12 row">
    <!-- Lesson side list-->

    <div class="card col-lg-3 mb-5 list_side">
        <div class="card-header">
            <div class="card-title">
                <h4>Lessons list</h4>
            </div>
        </div>

        <ul class="list-group list-group-flush">
            <?php
            $ids= [];

            foreach ($lessons as $lesson) {
                array_push($ids, $lesson->lesson_id);
            }


            $ids = array_unique($ids);

            foreach ($ids as $id) {
                $answersBeforeSql = "SELECT * FROM lessons WHERE lesson_id = $id";
                $lessons = \Models\LessonsModel::query($answersBeforeSql);
                $lessons = array_shift($lessons); ?>

                <li class="list-group-item">
                    <?= $this->filter->string($lessons->lesson_title) ?>
                    <span class="fa fa-check text-success d-none"></span>
                </li>
            <?php } ?>
        </ul>
    </div>

    <!-- lesson content -->

    <div class="col-lg-9 mx-auto coder my-4">
        <div class="steps-form-2">
            <div class="steps-row-2 deep_Track d-flex justify-content-between">
                <?php
                foreach ($ids as $id) {
                    $answersBeforeSql = "SELECT * FROM lessons WHERE lesson_id = $id";
                    $lessons = \Models\LessonsModel::query($answersBeforeSql);
                    $lessons = array_shift($lessons); ?>

                    <div class="steps-step-2">
                        <a href="#step-<?= $lessons->lesson_id ?>" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0 clicked" data-toggle="tooltip" data-placement="top" title="Basic Information">Lesson <?= $lessons->lesson_id ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- First Step -->

        <?php
        foreach ($ids as $id) {
            $answersBeforeSql = "SELECT * FROM lessons WHERE lesson_id = $id";
            $lessons = \Models\LessonsModel::query($answersBeforeSql);
            $lessons = array_shift($lessons); ?>

            <div class="row setup-content-2" id="step-<?= $lessons->lesson_id ?>">
                <div class="col-md-12">
                    <p class="my-3">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                            Show Lesson objectives
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            <h6>By the end of this lesson, you will be able to:</h6>
                            <?php

                            $sql = "SELECT * FROM lesson_goal WHERE lesson_id = $lessons->lesson_id";
                            $goals = \Models\LessonGoalModel::query($sql);
                            $goals = array_shift($goals);
                            $goals = explode('-', $goals->goal);

                            ?>
                            <ul>
                                <?php

                                foreach ($goals as $goal) { ?>

                                    <li><?= $this->filter->string($goal) ?></li>

                               <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <h3 class="font-weight-bold pl-0 my-4"><strong><a target="_blank" href="<?= $lessons->book ?>">Lesson <?= $lessons->lesson_id ?> Book</a></strong></h3>
                    <div class="form-group md-form">
                        <div class="lesson_video">
                            <iframe class="w-50 float-left" src="<?=$lessons->video_1?>" allowfullscreen></iframe>
                        </div>

                        <div class="lesson_video">
                            <iframe class="w-50 float-left" src="<?=$lessons->video_2?>" allowfullscreen></iframe>
                        </div>
                        <div class="clearfix"></div>
                    </div>
<!--                    <button class="btn btn-mdb-color btn-rounded deep-prevBtn-2 float-left" type="button">Previous</button>-->
<!--                    <button class="btn btn-mdb-color btn-rounded deep-nextBtn-2 float-right" type="button">Next</button>-->
                    <a href="<?= $this->route->baseUrl() . 'measure/deepAfter'?>" class="btn btn-success btn-rounded float-right">Go to exam</a>
                </div>

                <?php

                $sql = "SELECT * from quize WHERE lesson_id = $id";
                $quizes = \Models\QuizModel::query($sql);

                $counter = 1;



                $activitySql = "SELECT * FROM activity WHERE lesson_id = $id";
                $activities = \Models\ActivityModel::query($activitySql);



                foreach ($quizes as $quize) {

                    $sql = "SELECT * from quiz_choices WHERE question_id = $quize->question_id";
                    $quizeChoices = \Models\QuizChoiceModel::query($sql);


                    ?>

                    <div class="card-body col-sm-10 m-auto lesson_question_deep_form">
                        <form action="">
                            <h4 class="card-title bg-info w-25 p-1 rounded mb-3">Que - <?= $counter++ ?></h4>
                            <label for="que_<?=$quize->question_id?>" class="form-group w-100">
                                <input type="text" disabled value="<?= $quize->question_title?>" class="form-control font-weight-bold" id="que_<?=$quize->question_id?>">
                            </label>

                            <?php

                            foreach ($quizeChoices as $quizeChoice) { ?>
                                <div class="custom-control custom-radio">
                                    <input  type="radio" value="<?=$quizeChoice->mark?>" class="custom-control-input " id="check_<?=$quizeChoice->choice_id?>" name="mark">
                                    <label class="custom-control-label" for="check_<?=$quizeChoice->choice_id?>" > <?= $this->filter->string($quizeChoice->choice) ?> </label>
                                </div>
                              <?php  } ?>
                        </form>
                        <hr>
                    </div>

                <?php } $activities = array_shift($activities); ?>

                <div class="col-lg-12">
                    <h3 class="text-center bg-info text-light py-3 rounded">Activity</h3>
                    <p class="lead border rounded p-3"><?=$activities->activity?></p>
                </div>

            </div>

        <?php }




        ?>





        <div class="col-lg-12 m-auto row coder">
            <h3 class="text-center w-100 my-5 mx-auto text-success">Run your code here</h3>
            <div class="buttons col-lg-12 mb-5 text-center">
                <button id="run" class="btn btn-success">RUN</button>
                <button id="clear" class="btn btn-default">CLEAR</button>
            </div>
            <div class="col-lg-8">
                <textarea type="text" id="input" class="w-100 bg-dark text-success rounded px-2" placeholder="Write your code here"></textarea>
            </div>
            <div id="output" class="col-lg-4 output bg-dark d-flex align-items-center text-success">Execution will appear here</div>
        </div>
    </div>
</div>


<style>
    ::placeholder{
        color: #bf0000;
        font-family: Consolas;
    }
</style>
