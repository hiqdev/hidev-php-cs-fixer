<?php
/**
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpcsfixer\components;

/**
 * php-cs-fixer.
 */
class PhpCsFixer extends \hidev\base\Component
{
    protected $_version;

    public function getConfiguration()
    {
        return $this->take('.php_cs');
    }

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
        if (preg_match('/PHP CS Fixer (\S+) /', $str, $matches)) {
            return $matches[1];
        }

        return '1.x';
    }

}
