<?php

namespace app\bundle\welcome\helpers;

class HtmlHelper extends \momentphp\Helper
{
    public function charset()
    {
        return sprintf('<meta charset="%s">', $this->app->config->get('app.encoding', 'UTF-8'));
    }

    public function title()
    {
        $title = [
            $this->app->config->get('bundles.welcome.title'),
            $this->app->config->get('bundles.welcome.description')
        ];
        if (!empty($this->view->vars['htmlTitle'])) {
            array_pop($title);
            array_unshift($title, $this->view->vars['htmlTitle']);
        }
        return implode(' | ', $title);
    }

    public function bodyClass()
    {
        $classes = [
            snake_case($this->view->request->getAttribute('controller'), '-'),
            snake_case($this->view->request->getAttribute('action'), '-'),
        ];
        return implode(' ', $classes);
    }
}
