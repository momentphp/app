<?php
namespace app\bundle\welcome\helper;

class HtmlHelper extends \moment\Helper
{
    public function charset()
    {
        return sprintf('<meta charset="%s">', $this->app->config->get('app.encoding', 'UTF-8'));
    }

    public function test($d = 'default')
    {
        return 'test ' . $d;
    }

    public function title()
    {
        $title = [
            $this->app->config->get('bundle.welcome.title'),
            $this->app->config->get('bundle.welcome.description')
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
            strtolower($this->view->request->getAttribute('controller')),
            strtolower($this->view->request->getAttribute('action'))
        ];
        return implode(' ', $classes);
    }
}
