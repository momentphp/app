<?php

namespace app\bundle\welcome\controllers;

/**
 * PagesController
 */
class PagesController extends Controller
{
    /**
     * Display template
     *
     * @param  string $page
     * @return string
     */
    public function display($page)
    {
        try {
            return $this->render($page);
        } catch (\Exception $e) {
            throw ($this->app->debug) ? $e : new \momentphp\exceptions\NotFoundException;
        }
    }
}
