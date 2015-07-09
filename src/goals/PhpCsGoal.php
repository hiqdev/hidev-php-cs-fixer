<?php

/*
 * php-cs-fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\phpcsfixer\goals;

/**
 * Goal for .php_cs (php-cs-fixer config) file.
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
