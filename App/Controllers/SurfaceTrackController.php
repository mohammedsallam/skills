<?php
namespace Controllers;

use Models\LessonsModel;
use Models\AnswersSurfaceBeforeModel;
use Models\QuestionsModel;

class SurfaceTrackController extends Controller
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

        $sql = "SELECT COUNT('student_id') as student_id FROM answers_before_surface WHERE student_id = $id";
        $answers = AnswersSurfaceBeforeModel::query($sql);
        $answers = array_shift($answers);

        if($answers->student_id == 0){
            header('location:' . $this->route->baseUrl() . 'Measure/surfaceBefore');
            exit();
        }

        $this->app->container['title'] = 'Lessons track';
        $this->app->container['lessons'] = LessonsModel::getAll();
        $this->siteView();
    }

}