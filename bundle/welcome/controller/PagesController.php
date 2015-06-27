<?php
namespace app\bundle\welcome\controller;

class PagesController extends \moment\Controller
{
    public function display($page)
    {
        $this->template = $page;
        try {
            return $this->view()->render($this->template(__FUNCTION__));
        } catch (\SmartyException $e) {
            throw new \moment\NotFoundException;
        }
    }
}
