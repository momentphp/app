<?php

namespace bundles\welcome\controllers\cells;

use Kminek\EmailObfuscator;

/**
 * EmailObfuscatorController
 */
class EmailObfuscatorController extends \momentphp\Controller
{
    /**
     * Display cell
     */
    protected function display($email, $text = null)
    {
        $this->set('email', EmailObfuscator::obfuscate($email, $text));
    }
}
