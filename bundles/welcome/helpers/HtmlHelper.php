<?php

namespace bundles\welcome\helpers;

/**
 * HtmlHelper
 */
class HtmlHelper extends \momentphp\Helper
{
    /**
     * Return HTML charset
     *
     * @return string
     */
    public function charset()
    {
        return sprintf('<meta charset="%s">', $this->app->config->get('app.encoding', 'UTF-8'));
    }

    /**
     * Return HTML title
     *
     * @return string
     */
    public function title()
    {
        $title = [
            $this->app->config->get('bundles.welcome.title'),
            $this->app->config->get('bundles.welcome.description')
        ];
        if (!empty($this->template->vars['htmlTitle'])) {
            array_pop($title);
            array_unshift($title, $this->template->vars['htmlTitle']);
        }
        return implode(' | ', $title);
    }

    /**
     * Return dynamic HTML body class
     *
     * @return string
     */
    public function bodyClass()
    {
        $classes = [
            snake_case($this->template->request->getAttribute('controller'), '-'),
            snake_case($this->template->request->getAttribute('action'), '-'),
        ];
        return implode(' ', $classes);
    }
}
