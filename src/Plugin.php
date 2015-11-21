<?php

/*
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpcsfixer;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'php-cs-fixer'  => 'hidev\phpcsfixer\goals\PhpCsFixerGoal',
            '.php_cs'       => 'hidev\phpcsfixer\goals\PhpCsGoal',
            'install'       => [
                'requires' => [
                    'fabpot/php-cs-fixer' => '*',
                ],
            ],
        ],
        'views' => [
            '@hidev/phpcsfixer/views',
        ],
        'vcsignore' => [
            '.php_cs.cache' => 'php-cs-fixer cache',
        ],
    ];
}
