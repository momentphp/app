<?php
namespace app\bundle\welcome\controller;

class WelcomeController extends \moment\Controller
{
    public function home()
    {
        $posts = $this->app->database->getConnection()->table('posts')->get();
    }
}
