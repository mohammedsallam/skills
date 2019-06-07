<div class="card col-sm-12">
    <h3 class="card-header primary-color white-text mt-3 text-center">Level two</h3>
    <h5 class="text-center w-50 my-3 mx-auto border rounded p-3 shadow">        عزيزي الطالب/ عزيزتي الطالبة أمامك مجموعة من العبارات والجمل، نرجو اختيار إجابة واحدة ، مع العلم أنه ليس هناك إجابات صحيحة وأخرى خاطئة فقط أجب بكل صراحة وصدق
        <br><br><span class="text-danger mt-3">فضلا قم بالإجابة على جميع الأسئلة</span>
    </h5>
    <div class="card-body col-sm-7 m-auto answer_form_deep_view answer_form">
            <?php
            foreach ($questions as $question) {

                $id = $this->session->get('user_id');
                $queId = $question->question_id;
                $sql = "SELECT * FROM deep_measure_answers WHERE student_id = $id AND question_id = $queId";
                $answers = \Models\DeepMeasureAnswersModel::query($sql);

                $answer = '';
                $mark = '';

                if(empty($answers) == false){
                    foreach ($answers as $item) {
                        $answer = $item->answer;
                        $mark = $item->mark;
                    }
                }

                ?>

                <form action="<?= $this->route->baseUrl() . 'exams/addMeasure'?>" method="post" class="d-none form_<?= $question->question_id?>">
                    <input type="hidden" name="student_id" value="<?= $this->session->get('user_id') ?>">
                    <input type="hidden" name="model" value="DeepMeasureAnswersModel">
                    <input type="hidden" name="table" value="deep_measure_answers">
                    <h4 class="card-title bg-info w-25 p-1 rounded mb-3 float-right">Que - <?= $question->question_id?></h4>
                    <label for="que_<?= $question->question_id ?>" class="form-group w-100">
                        <input type="text" disabled value="<?= $question->question_title ?>" class="form-control font-weight-bold" id="que_<?= $question->question_id ?>">
                        <input type="hidden" name="question_id" value="<?= $question->question_id ?>">
                    </label>
                    <label for="ans_<?= $question->question_id ?>" class="form-group w-100">
                        <select name="answer" id="ans_<?= $question->question_id ?>" class="form-control select_answer">
                            <option value="">اختر الإجابة</option>
                            <option <?php if($answer.'-'.$mark == 'a-3') { echo 'selected'; } else { echo ''; } ?> value='a-3'>موافق</option>
                            <option <?php if($answer.'-'.$mark == 'ac-4') { echo 'selected'; } else { echo ''; } ?> value="ac-4">موافق تماماً</option>
                            <option <?php if($answer.'-'.$mark == 'na-2') { echo 'selected'; } else { echo ''; } ?> value="na-2">غير موافق</option>
                            <option <?php if($answer.'-'.$mark == 'nac-1') { echo 'selected'; } else { echo ''; } ?> value="nac-1">غير موافق تماماً</option>
                        </select>
                        <?php
                        if(empty($answers) == false){
                            foreach ($answers as $item) {

                                if ($question->question_id == $item->question_id) { ?>
                                    <i class="fa fa-check" style="opacity: 1;"></i>
                                <?php }

                            }
                        } else { ?>
                            <i class="fa fa-check"></i>
                        <?php }

                        ?>

                    </label>
                </form>
            <?php } ?>
        <a href="<?= $this->route->baseUrl() . 'exams/measureSorting'?>" class="btn btn-success text-light text-uppercase mb-5 d-none save_surface_answer">Save answers</a>
    </div>

</div>