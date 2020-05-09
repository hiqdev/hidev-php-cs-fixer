<?php
/**
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' => [
        'php-cs-fixer' => [
            'class' => \hidev\phpcsfixer\console\PhpCsFixerController::class,
        ],
        '.php_cs' => [
            'class' => \hidev\phpcsfixer\console\PhpCsController::class,
        ],
    ],
    'components' => [
        'php-cs-fixer' => [
            'class' => \hidev\phpcsfixer\components\PhpCsFixer::class,
        ],
        '.php_cs' => [
            'class' => \hidev\phpcsfixer\components\PhpCs::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => ['@hidev/phpcsfixer/views'],
                ],
            ],
        ],
        'vcsignore' => [
            '.php_cs.cache' => 'dynamic files',
        ],
        'binaries' => [
            'php-cs-fixer' => [
                'package'  => 'fabpot/php-cs-fixer',
                'version'  => '*',
                'download' => 'http://get.sensiolabs.org/php-cs-fixer.phar',
            ],
        ],
    ],
    'aliases' => [
        '@hidev/phpcsfixer' => dirname(__DIR__) . '/src',
    ],
];
