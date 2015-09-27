<?php

namespace app\bundle\welcome\controllers;

class ErrorController extends Controller
{
    public function notFound()
    {
        $this->set('htmlTitle', '404');
    }

    public function notAllowed()
    {
        $methods = func_get_args();
        $this->set('htmlTitle', '405');
        $this->set('methods', $methods);
    }

    public function error(\Exception $e)
    {
        $this->set('htmlTitle', '500');
        $this->set('e', $e);
    }
}
