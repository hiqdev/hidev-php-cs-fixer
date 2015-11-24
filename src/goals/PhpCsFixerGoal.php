<?php

/*
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpcsfixer\goals;

/**
 * Goal for php-cs-fixer.
 */
class PhpCsFixerGoal extends \hidev\goals\DefaultGoal
{
    public function init()
    {
        $this->setDeps('.php_cs');
    }

    public function actionMake()
    {
        return $this->actionFix();
    }

    public function actionFix()
    {
        return $this->passthru('php-cs-fixer', 'fix .');
    }

    public function actionCheck()
    {
        return $this->passthru('php-cs-fixer', 'fix . --dry-run');
    }
}
