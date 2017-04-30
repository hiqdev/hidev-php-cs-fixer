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
 * php-cs-fixer.
 */
class PhpCsFixerController extends \hidev\base\Controller
{
    protected $_before = ['.php_cs'];

    public function actionIndex()
    {
        return $this->doFix();
    }

    public function doFix()
    {
        return $this->passthru('php-cs-fixer', ['fix']);
    }

    public function actionCheck()
    {
        return $this->passthru('php-cs-fixer', ['fix', '--dry-run']);
    }
}
