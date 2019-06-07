<?php
namespace Controllers;

use Models\UsersModel;

class IndexController extends Controller
{

    public function home()
    {

        $this->app->container['title'] = 'Home page';
        $user = UsersModel::getBy('email', $this->session->get('user_email'));
        $this->app->container['user'] = $user;
        $this->siteView();

    }

}