<?php

namespace hidev\phpcsfixer\goals;

/**
 * Goal for .php_cs (php-cs-fixer config) file
 */
class PhpCsGoal extends \hidev\goals\TemplateGoal
{
    public function getTemplate()
    {
        return 'php-cs.twig';
    }

    public function getFixer()
    {
        return $this->getConfig()->get('php-cs-fixer');
    }
}
