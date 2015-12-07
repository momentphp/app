<?php

namespace bundles\welcome\controllers;

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
    protected function display($page)
    {
        try {
            return $this->render($page);
        } catch (\Exception $e) {
            if ($this->app->debug) {
                throw $e;
            } else {
                $this->abort();
            }
        }
    }
}
