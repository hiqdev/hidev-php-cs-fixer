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
 * `.php_cs` (php-cs-fixer config) file generation.
 */
class PhpCs extends \hidev\components\ConfigFile
{
    protected $_file = '.php_cs';

    public function getTemplate()
    {
        $version = $this->getFixer()->getVersion();
        $vno = substr($version, 0, 1);

        return "php-cs-v$vno.twig";
    }

    public function getFixer()
    {
        return $this->take('php-cs-fixer');
    }

    public function getCasedLevel()
    {
        $level = strtolower($this->level);

        return $level === 'symfony' ? 'Symfony' : strtoupper($level);
    }
}
