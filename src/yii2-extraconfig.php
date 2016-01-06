<?php

/*
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'php-cs-fixer' => [
                'class' => 'hidev\phpcsfixer\goals\PhpCsFixerGoal',
            ],
            '.php_cs' => [
                'class' => 'hidev\phpcsfixer\goals\PhpCsGoal',
            ],
            'binaries' => [
                'php-cs-fixer' => [
                    'package' => 'fabpot/php-cs-fixer',
                    'version' => '*',
                ],
            ],
            'views' => [
                '@hidev/phpcsfixer/views',
            ],
            'vcsignores' => [
                '.php_cs.cache' => 'php-cs-fixer cache',
            ],
        ],
    ],
];
