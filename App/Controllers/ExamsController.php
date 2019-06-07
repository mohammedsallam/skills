<?php
namespace Controllers;
use Models\DeepMeasureAnswersModel;
use Models\DeepMeasureQuestionModel;
use Models\StudentsDeepModel;
use Models\StudentsSurfaceModel;
use Models\SurfaceMeasureAnswersModel;
use Models\SurfaceMeasureQuestionModel;
use Models\UsersModel;

class ExamsController extends Controller
{
    public $noLoad = [
        'aboutSection',
        'objectiveSection',
        'booksSection'
    ];


    public function surface()
    {
        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $allSurface = StudentsSurfaceModel::getAll();
        $allDeep = StudentsDeepModel::getAll();

        $id = $this->session->get('user_id');

        if (count($allDeep) == 30 && count($allSurface) == 30){
            $this->session->set('finish', 'Sorry The count of student complete');
            UsersModel::update(['approve'], [0], "user_id = $id");
            header('location:' . $this->route->baseUrl());
            $this->session->remove('user_id');
            $this->session->remove('full_name');
            exit();
        }

        $id = $this->session->get('user_id');

        $sql = "SELECT COUNT('student_id') as student_id FROM surface_measure_answers WHERE student_id = $id";
        $answers = SurfaceMeasureAnswersModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id == 7){
            header('location:' . $this->route->baseUrl() . 'exams/deep');
            exit();
        }

        $this->app->container['title'] = 'Exam page';
        $questions = SurfaceMeasureQuestionModel::getAll();
        $this->app->container['questions'] = $questions;
        $this->siteView();

    }

    public function deep()
    {
        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $allSurface = StudentsSurfaceModel::getAll();
        $allDeep = StudentsDeepModel::getAll();

        $id = $this->session->get('user_id');

        if (count($allDeep) == 30 && count($allSurface) == 30){
            $this->session->set('finish', 'Sorry The count of student complete');
            UsersModel::update(['approve'], [0], "user_id = $id");
            header('location:' . $this->route->baseUrl());
            $this->session->remove('user_id');
            $this->session->remove('full_name');
            exit();
        }

        $id = $this->session->get('user_id');
        $sql = "SELECT COUNT('student_id') as student_id FROM surface_measure_answers WHERE student_id = $id";
        $answers = SurfaceMeasureAnswersModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id < 7){
            header('location:' . $this->route->baseUrl() . 'exams/surface');
            exit();
        }

        $sql = "SELECT COUNT('student_id') as student_id FROM deep_measure_answers WHERE student_id = $id";
        $answers = DeepMeasureAnswersModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id == 7){
            header('location:' . $this->route->baseUrl() . 'exams/measureSorting');
            exit();
        }

        $this->app->container['title'] = 'Exam page';
        $questions = DeepMeasureQuestionModel::getAll();
        $this->app->container['questions'] = $questions;
        $this->siteView();

    }

    public function measureSorting(){

        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $id = $this->app->session->get('user_id');
        $fullName = $this->app->session->get('full_name');

        $allSurface = StudentsSurfaceModel::getAll();
        $allDeep = StudentsDeepModel::getAll();

        if (count($allDeep) == 30 && count($allSurface) == 30){
            $this->session->set('finish', 'Sorry The count of student complete');
            UsersModel::update(['approve'], [0], "user_id = $id");
            header('location:' . $this->route->baseUrl());
            $this->session->remove('user_id');
            $this->session->remove('full_name');
            exit();
        }

        $sql = "SELECT COUNT('student_id') as student_id FROM deep_measure_answers WHERE student_id = $id";
        $answers = DeepMeasureAnswersModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id < 7){
            header('location:' . $this->route->baseUrl() . 'exams/deep');
            exit();
        }

        $deepSql = "SELECT SUM(mark) as deepMark FROM deep_measure_answers WHERE student_id = $id";
        $deepSql = DeepMeasureAnswersModel::query($deepSql);
        $surfaceSql = "SELECT SUM(mark) as surfaceMark FROM surface_measure_answers WHERE student_id = $id";
        $surfaceSql = SurfaceMeasureAnswersModel::query($surfaceSql);
        $deepSql = array_shift($deepSql);
        $surfaceSql = array_shift($surfaceSql);

            if ($deepSql->deepMark > $surfaceSql->surfaceMark){

                if (StudentsDeepModel::getBy('student_id', "$id") == null){
                    StudentsDeepModel::insert(['student_name', 'student_id'], [$fullName, $id]);
                } else {
                    StudentsDeepModel::update(['student_name'], [$fullName], "student_id = $id");
                }

                header('location:'. $this->route->baseUrl() . 'measure/deepBefore');

            } else {

                if (StudentsSurfaceModel::getBy('student_id', "$id") == null){
                    StudentsSurfaceModel::insert(['student_name', 'student_id'], [$fullName, $id]);
                } else {
                    StudentsSurfaceModel::update(['student_name'], [$fullName], "student_id = $id");
                }

                header('location:'. $this->route->baseUrl() . 'measure/surfaceBefore');
            }

    }

    public function addMeasure(){

        if (! $this->session->get('user_email')){
            header('location:' . $this->route->baseUrl());
            exit();
        }

        $allSurface = StudentsSurfaceModel::getAll();
        $allDeep = StudentsDeepModel::getAll();

        $id = $this->session->get('user_id');

        if (count($allDeep) == 30 && count($allSurface) == 30){
            $this->session->set('finish', 'Sorry The count of student complete');
            UsersModel::update(['approve'], [0], "user_id = $id");
            header('location:' . $this->route->baseUrl());
            $this->session->remove('user_id');
            $this->session->remove('full_name');
            exit();
        }

        if ($this->request->requestMethod() == 'POST'){

            $answerAndMark = explode('-', $this->request->post('answer'), 2);

            $surfaces['question_id'] = $this->request->post('question_id');
            $surfaces['student_id'] = $this->request->post('student_id');

            $surfaces['mark'] = $answerAndMark[1];
            $surfaces['answer'] = $answerAndMark[0];

            $sId = $surfaces['student_id'];
            $qId = $surfaces['question_id'];

            $model = 'Models\\'.$this->request->post('model');
            $table = $this->request->post('table');

            $sql = "SELECT * FROM $table WHERE student_id = $sId AND question_id= $qId";

            $answer = $model::query($sql);

            foreach ($surfaces as $key => $value) {

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