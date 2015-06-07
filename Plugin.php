<?php
/**
 * @link        http://hiqdev.com/hidev-php-cs-fixer
 * @license     BSD-3-Clause
 * @copyright   Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\phpcsfixer;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'php-cs-fixer' => [
                'class' => 'hidev\phpcsfixer\goals\FixerGoal',
            ],
            '.php_cs' => [
                'class' => 'hidev\phpcsfixer\goals\ConfigGoal',
            ],
        ],
    ];

}
