<?php

/*
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'php-cs-fixer' => [
                'class' => 'hidev\phpcsfixer\console\PhpCsFixerController',
            ],
            '.php_cs' => [
                'class' => 'hidev\phpcsfixer\console\PhpCsController',
            ],
            'binaries' => [
                'php-cs-fixer' => [
                    'package'  => 'fabpot/php-cs-fixer',
                    'version'  => '*',
                    'download' => 'http://get.sensiolabs.org/php-cs-fixer.phar',
                ],
            ],
            'views' => [
                '@hidev/phpcsfixer/views',
            ],
            'vcsignore' => [
                '.php_cs.cache' => 'php-cs-fixer cache',
            ],
        ],
    ],
];
