<?php

/*
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpcsfixer\console;

/**
 * Goal to run php-cs-fixer.
 */
class PhpCsFixerController extends \hidev\controllers\FileController
{
    protected $_before = ['.php_cs'];

    protected $_version;

    public function setVersion($value)
    {
        $this->_version = $value;
    }

    public function getVersion()
    {
        if ($this->_version === null) {
            $this->_version = $this->determineVersion();
        }

        return $this->_version;
    }

    public function determineVersion()
    {
        $str = reset($this->exec('php-cs-fixer', ['--version']));
        if (preg_match('/ version (\S+) /', $str, $m)) {
            return $m[1];
        }

        return '1.x';
    }

    public function getCasedLevel()
    {
        $level = strtolower($this->level);

        return $level === 'symfony' ? 'Symfony' : strtoupper($level);
    }

    public function actionMake()
    {
        return $this->runAction('fix');
    }

    public function actionFix()
    {
        $this->runAction('stop-fix');
    }

    public function actionStopFix()
    {
        return $this->passthru('php-cs-fixer', ['fix', '.']);
    }

    public function actionCheck()
    {
        return $this->passthru('php-cs-fixer', ['fix', '.', '--dry-run']);
    }
}
