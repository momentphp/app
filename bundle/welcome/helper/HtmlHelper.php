<?php
namespace app\bundle\welcome\helper;

class HtmlHelper extends \moment\Helper
{
    public function charset()
    {
        return sprintf('<meta charset="%s">', $this->template->app->config->get('app.encoding', 'UTF-8'));
    }

    public function title()
    {
        $title = [
            $this->template->app->config->get('bundle.welcome.title'),
            $this->template->app->config->get('bundle.welcome.description')
        ];
        if (!empty($this->template->vars['htmlTitle'])) {
            array_pop($title);
            array_unshift($title, $this->template->vars['htmlTitle']);
        }
        return implode(' | ', $title);
    }

    public function bodyClass()
    {
        $classes = [
            strtolower($this->template->request->getAttribute('controller')),
            strtolower($this->template->request->getAttribute('action'))
        ];
        return implode(' ', $classes);
    }
}
