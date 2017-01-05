<?php
/**
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpcsfixer\console;

/**
 * Goal for .php_cs (php-cs-fixer config) file.
 */
class PhpCsController extends \hidev\controllers\TemplateController
{
    public function getTemplate()
    {
        $version = $this->getFixer()->getVersion();
        $v = substr($version, 0, 1);

        return "php-cs-v$v.twig";
    }

    public function getFixer()
    {
        return $this->takeGoal('php-cs-fixer');
    }
}
