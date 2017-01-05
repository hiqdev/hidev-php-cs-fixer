<?php
/**
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpcsfixer\tests\unit\console;

use hidev\phpcsfixer\console\PhpCsController;

/**
 * Tests for PhpCsController.
 */
class PhpCsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PhpCsController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PhpCsController('.php_cs', null);
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('hidev\base\Controller', $this->object);
    }
}
