<?php
namespace Controllers;

use Models\QuestionsModel;
use Models\AnswersSurfaceBeforeModel;
use Models\AnswersSurfaceAfterModel;
use Models\AnswersDeepBeforeModel;
use Models\UsersModel;

class MeasureController extends Controller
{

    public $noLoad = [
        'aboutSection',
        'objectiveSection',
        'booksSection'
    ];

    public function surfaceBefore(){
        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $id = $this->session->get('user_id');

        $sql = "SELECT COUNT('student_id') as student_id FROM answers_before_surface WHERE student_id = $id";
        $answers = AnswersSurfaceBeforeModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id >= 1){
            header('location:' . $this->route->baseUrl() . 'SurfaceTrack');
            exit();
        }

        $this->app->container['title'] = 'Exam before';
        $sqlQuestion = "SELECT * FROM questions";
        $this->app->container['questions'] = QuestionsModel::query($sqlQuestion);
        $this->siteView();
    }

    public function surfaceAfter(){
        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $id = $this->session->get('user_id');

        $sql = "SELECT COUNT('student_id') as student_id FROM answers_after_surface WHERE student_id = $id";
        $answers = AnswersSurfaceAfterModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id >= 1){
            $this->session->set('finish', 'Dear Student Thanks For You To Finish Exams And Tracks Of Lessons');
            UsersModel::update(['approve'], [0], "user_id = $id");
            $this->session->remove('user_id');
            $this->session->remove('full_name');
            $this->session->remove('user_email');
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $this->app->container['title'] = 'Last Exam';
        $sqlQuestion = "SELECT * FROM questions";
        $this->app->container['questions'] = QuestionsModel::query($sqlQuestion);
        $this->siteView();
    }

    public function deepBefore(){

        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $id = $this->session->get('user_id');

        $sql = "SELECT COUNT('student_id') as student_id FROM answers_before_deep WHERE student_id = $id";
        $answers = AnswersDeepBeforeModel::query($sql);
        $answers = array_shift($answers);

//        if($answers->student_id >= 1){
//            header('location:' . $this->route->baseUrl() . 'DeepTrack');
//            exit();
//        }

        $this->app->container['title'] = 'Exam before';
        $sqlQuestion = "SELECT * FROM questions";
        $this->app->container['questions'] = QuestionsModel::query($sqlQuestion);
        $this->siteView();
    }

    public function deepAfter(){

        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $id = $this->session->get('user_id');

        $sql = "SELECT COUNT('student_id') as student_id FROM answers_after_deep WHERE student_id = $id";
        $answers = AnswersSurfaceAfterModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id >= 1){
            $this->session->set('finish', 'Dear Student Thanks For You To Finish Exams And Tracks Of Lessons');
            UsersModel::update(['approve'], [0], "user_id = $id");
            $this->session->remove('user_id');
            $this->session->remove('full_name');
            $this->session->remove('user_email');
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $this->app->container['title'] = 'Last Exam';
        $sqlQuestion = "SELECT * FROM questions";
        $this->app->container['questions'] = QuestionsModel::query($sqlQuestion);
        $this->siteView();
    }

    public function examAdd(){

        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        if ($this->request->requestMethod() == 'POST'){

            $answerAndMark = explode('_', $this->request->post('mark'), 2);

            $questions['question_id'] = $this->request->post('question_id');
            $questions['student_id'] = $this->request->post('student_id');

            $sId = $questions['student_id'];
            $qId = $questions['question_id'];

            $questions['mark'] = $answerAndMark[0];
            $questions['answer'] = $answerAndMark[1];

            $model = 'Models\\'.$this->request->post('model');
            $table = $this->request->post('table');

            $sql = "SELECT * FROM $table WHERE student_id = $sId AND question_id= $qId";

            $answer = $model::query($sql);

            foreach ($questions as $key => $value) {

                $column[] = $key;
                $columnValue[] = $value;

            }

            if ($answer == null) {
                $model::insert($column, $columnValue);
            } else {
                $model::update($column, $columnValue, "student_id = $sId AND question_id = $qId");
            }
            exit();
        }
    }

}