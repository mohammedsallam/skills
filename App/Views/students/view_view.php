<style>
    body{
        background: rgba(243, 243, 243, 0.64);
    }
</style>
<?php

if (empty($user) == true) {
    echo '<h4 class="alert alert-danger text-center font-weight-bold col-lg-6 my-3 p-3 mx-auto shadow border"> ! لا يوجد طالب بهذه البيانات </h4>';
} else {
    $id = $user->user_id;
    ?>

    <div class="col-lg-12 m-auto">
        <button class="my-5" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
        <h5>Student information</h5>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Sorting</th>
                <th scope="col">Exam Before</th>
                <th scope="col">Exam After</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?=$user->full_name?></td>
                <td>
                    <?= $user->user_email ?>
                </td>
                <td>

                    <?php

                    if ($deep != null) {
                        echo 'إخفاء الروابط التكيفي';
                    } elseif ($surface != null) {
                        echo 'التوجيه المباشر';
                    } else {
                        echo 'لم يتم التصنيف بعد';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($deep != null){
                        $sql = "SELECT SUM(mark) as sumMark FROM answers_before_deep WHERE student_id = $id";
                        $answer = \Models\AnswersDeepBeforeModel::query($sql);
                        $answer= array_shift($answer);
                        echo $answer->sumMark;
                    } else{
                        $sql = "SELECT SUM(mark) as sumMark FROM answers_before_surface WHERE student_id = $id";
                        $answer = \Models\AnswersSurfaceBeforeModel::query($sql);
                        $answer= array_shift($answer);
                        echo $answer->sumMark;

                    }
                    ?>
                </td>
                <td>
                    <?php

                    if ($deep != null){
                        $sql = "SELECT SUM(mark) as sumMark FROM answers_after_deep WHERE student_id = $id";
                        $answer = \Models\AnswersDeepAfterModel::query($sql);
                        $answer= array_shift($answer);
                        echo $answer->sumMark;
                    } else{
                        $sql = "SELECT SUM(mark) as sumMark FROM answers_after_surface WHERE student_id = $id";
                        $answer = \Models\AnswersSurfaceAfterModel::query($sql);
                        $answer= array_shift($answer);
                        echo $answer->sumMark;                    }
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

<?php } ?>
