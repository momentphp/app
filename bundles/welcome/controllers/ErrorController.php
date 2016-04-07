<?php

namespace bundles\welcome\controllers;

/**
 * ErrorController
 */
class ErrorController extends Controller
{
    /**
     * Invoked for not found requests
     */
    protected function notFound()
    {
        $this->set('htmlTitle', '404');
    }

    /**
     * Invoked for HTTP method not allowed requests
     */
    protected function notAllowed()
    {
        $methods = func_get_args();
        $this->set('htmlTitle', '405')->set('methods', $methods);
    }

    /**
     * Invoked for errors & exceptions
     *
     * @param \Throwable $e
     */
    protected function error($e)
    {
        $this->set('htmlTitle', '500')->set('e', $e);
    }
}
