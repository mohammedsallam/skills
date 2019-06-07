<?php
namespace Controllers;

use Models\AnswersDeepBeforeModel;


class DeepTrackController extends Controller
{
    public $noLoad = [
        'aboutSection',
        'objectiveSection',
        'booksSection'
    ];

    public function home(){

        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $id = $this->session->get('user_id');

        $sql = "SELECT COUNT('student_id') as student_id FROM answers_before_deep WHERE student_id = $id";
        $answers = AnswersDeepBeforeModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id == 0){
            header('location:' . $this->route->baseUrl() . 'Measure/deepBefore');
            exit();
        }

        $this->app->container['title'] = 'Lessons track';
        $id = $this->session->get('user_id');
        $answersBeforeSql = "SELECT answers_before_deep.*, questions.lesson_id FROM answers_before_deep LEFT JOIN questions ON answers_before_deep.question_id = questions.question_id  WHERE mark = 0 AND student_id = $id";
        $this->app->container['lessons'] = AnswersDeepBeforeModel::query($answersBeforeSql);


        $this->siteView();


    }

}