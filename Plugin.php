<?php

namespace hidev\phpcsfixer;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'php-cs-fixer' => 'hidev\phpcsfixer\goals\PhpCsFixerGoal',
            '.php_cs'      => 'hidev\phpcsfixer\goals\PhpCsGoal',
        ],
        'views' => [
            '@hidev/phpcsfixer/views',
        ],
    ];
}
