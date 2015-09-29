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
        $this->view
        ->context([$this, __METHOD__])
        ->request($this->request)
        ->response($this->response)
        ->template($page);

        if ($this->view->exists()) {
            return $this->view->render();
        }

        throw new \momentphp\exceptions\NotFoundException;
    }
}
