<?php
namespace Controllers;

use Models\AdminModel;
use Models\StudentsDeepModel;
use Models\StudentsSurfaceModel;
use Models\UsersModel;

class StudentsController extends Controller
{

    public $noLoad = [
        'navBar',
        'welcomeSection',
        'sideBar',
        'descSection',
        'aboutSection',
        'objectiveSection',
        'booksSection',
        'contactSection',
        'footerSection'
    ];

    public function home(){

        if (! $this->session->get('admin_email')){
            header('location:' . $this->route->baseUrl() . 'login/admin');
            exit();
        }

        $this->app->container['title'] = 'Admin | Dashboard page';
        $this->app->container['students'] = UsersModel::getAll();;
        $this->adminView();
    }

    public function showSurface(){
        $this->app->container['title'] = 'Admin | Dashboard page';
        $admin = AdminModel::getBy('admin_email', $this->session->get('admin_email'));
        $this->app->container['admin'] = $admin;
        $this->adminView();
    }

    public function showDeep(){
        $this->app->container['title'] = 'Admin | Dashboard page';
        $admin = AdminModel::getBy('admin_email', $this->session->get('admin_email'));
        $this->app->container['admin'] = $admin;
        $this->adminView();
    }

    public function delete()
    {

        if (! $this->session->get('admin_email')){
            header('location:' . $this->route->baseUrl() . 'login');
            exit();
        }

        $id = $this->filter->int($this->request->post('user_id'));
        $user = UsersModel::getBy('user_id', $id);

        if(empty($user) == false){
            UsersModel::delete("user_id= $id");
            $data['status'] = 'success';
            $data['msg'] = "Student number $id deleted";
            echo json_encode($data);
            exit();
        }
    }

    public function active(){
        if (! $this->session->get('admin_email')){
            header('location:' . $this->route->baseUrl() . 'login');
            exit();
        }

        $id = $this->filter->int($this->request->post('user_id'));
        $approve = $this->filter->int($this->request->post('approve'));
        $user = UsersModel::getBy('user_id', $id);

        if(empty($user) == false){
            UsersModel::update(['approve'], [$approve], "user_id = $id");
            exit();
        }
    }

    public function view(){
        if (! $this->session->get('admin_email')){
            header('location:' . $this->route->baseUrl() . 'login/admin');
            exit();
        }

        $id = $this->filter->int($this->app->params);

        $this->app->container['title'] = 'View | Print - student information';
        $this->app->container['deep'] = StudentsDeepModel::getBy('student_id', $id);
        $this->app->container['surface'] = StudentsSurfaceModel::getBy('student_id', $id);
        $this->app->container['user'] = UsersModel::getBy('user_id', $id);

        $this->siteView();
    }


}