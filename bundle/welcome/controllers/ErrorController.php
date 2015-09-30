<?php

namespace app\bundle\welcome\controllers;

/**
 * ErrorController
 */
class ErrorController extends Controller
{
    /**
     * Invoked for not found requests
     */
    public function notFound()
    {
        $this->set('htmlTitle', '404');
    }

    /**
     * Invoked for HTTP method not allowed requests
     */
    public function notAllowed()
    {
        $methods = func_get_args();
        $this->set('htmlTitle', '405')->set('methods', $methods);
    }

    /**
     * Invoked for errors & exceptions
     */
    public function error(\Exception $e)
    {
        $this->set('htmlTitle', '500')->set('e', $e);
    }
}
