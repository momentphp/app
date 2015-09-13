<?php

namespace app\bundle\welcome\controllers;

class ErrorController extends Controller
{
    public function notFound()
    {
        $this->set('htmlTitle', '404');
        $this->response = $this->response->withStatus(404)->withHeader('Content-Type', 'text/html');
    }

    public function notAllowed()
    {
        $methods = func_get_args();
        $this->set('htmlTitle', '405');
        $this->set('methods', $methods);
        $this->response =  $this->response->withStatus(405)->withHeader('Content-Type', 'text/html')->withHeader('Allow', $methods);
    }

    public function error($exception)
    {
        $this->set('htmlTitle', '500');
        if ($this->app->debug && isset($this->app->exceptionRenderer)) {
            $exceptionRenderer = $this->app->exceptionRenderer;
            $this->set('exception', $exceptionRenderer($exception));
        }
        $this->response = $this->response->withStatus(500)->withHeader('Content-Type', 'text/html');
    }
}
