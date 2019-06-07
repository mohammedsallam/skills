<?php
namespace Controllers;

use Models\StudentsDeepModel;
use Models\StudentsSurfaceModel;
use Models\UsersModel;

class RegisterController extends Controller
{

    public $noLoad = [
        'searchNav',
        'topNav',
        'sidesSection',
        'contentStart',
        'contentEnd'
    ];

    public $loadCss = [
        'bootstrap',
        'waves',
        'animate',
        'style',
        'my_style',

    ];

    public $loadJs = [
        'jquery',
        'bootstrap',
        'waves',
        'validate',
        'admin',
        'sign_up',
        'main'

    ];

    public function home()
    {
        if ($this->session->has('user_email') == true){
            header('location:' . $this->route->baseUrl() . 'index');
            exit();
        }
        $this->app->container['title'] = 'Register page';
        $this->siteView();
    }

    public function checkRegister()
    {


        $userData['full_name'] = $this->filter->stringStrip($this->request->post('full_name'));
        $userData['user_email'] = $this->filter->email($this->request->post('user_email'));
        $userData['confirm_email'] = $this->filter->email($this->request->post('confirm_email'));
        $userData['user_password'] = $this->filter->password($this->request->post('user_password'));
        $userData['confirm_password'] = $this->filter->password($this->request->post('confirm_password'));
        $userData['gender'] = $this->filter->stringStrip($this->request->post('gender'));

        $user = UsersModel::getBy('user_email', $userData['user_email']);

        $allSurface = StudentsSurfaceModel::getAll();
        $allDeep = StudentsDeepModel::getAll();



        if ($this->request->requestMethod() == 'POST') {


            if (count($allDeep) == 30 && count($allSurface) == 30){
                $data['status'] = 'error';
                $data['msg'] = 'Sorry The count of student complete';
                echo json_encode($data);
                exit();
            }


            if ($user != null){
                $data['status'] = 'error';
                $data['msg'] = 'Email already exists';
                echo json_encode($data);
                exit();
            }

            if (empty($userData['full_name'])){
                $data['status'] = 'error';
                $data['msg'] = 'Pleas inter you full name';
                echo json_encode($data);
                exit();
            }


            if ($userData['user_email'] == false){
                $data['status'] = 'error';
                $data['msg'] = 'Empty email or email syntax error';
                echo json_encode($data);
                exit();
            }

            if ($userData['confirm_email'] == false){
                $data['status'] = 'error';
                $data['msg'] = 'Empty email or email syntax error';
                echo json_encode($data);
                exit();
            }

            if ($userData['confirm_email'] != $userData['user_email']){
                $data['status'] = 'error';
                $data['msg'] = 'Email not matches';
                echo json_encode($data);
                exit();
            }

            if ($userData['user_password'] == ''){
                $data['status'] = 'error';
                $data['msg'] = 'Pleas inter you password';
                echo json_encode($data);
                exit();
            }

            if ($userData['confirm_password'] == ''){
                $data['status'] = 'error';
                $data['msg'] = 'Pleas inter confirm password';
                echo json_encode($data);
                exit();
            }

            if ($userData['confirm_password'] != $userData['user_password']){
                $data['status'] = 'error';
                $data['msg'] = 'Password not matches';
                echo json_encode($data);
                exit();
            }

            if (mb_strlen($userData['user_password']) < 8 || mb_strlen($userData['confirm_password']) < 8){
                $data['status'] = 'error';
                $data['msg'] = 'Password must be at least 8 characters';
                echo json_encode($data);
                exit();
            }

            if (empty($userData['gender']) == true){
                $data['status'] = 'error';
                $data['msg'] = 'Password choose your gender';
                echo json_encode($data);
                exit();
            }

            $userData['user_password'] = password_hash($userData['user_password'].'!@#$%^&*()', CRYPT_BLOWFISH);

            unset($userData['confirm_password'], $userData['confirm_email']);

            foreach ($userData as $key => $value) {

                $column[] = $key;
                $columnValue[] = $value;
            }


            UsersModel::insert($column, $columnValue);
            $data['status'] = 'success';
            $data['msg'] = 'Register Successfully';
            echo json_encode($data);
            exit();
        }

    }

}